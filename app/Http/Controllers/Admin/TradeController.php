<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User\Trade;
use App\Models\User\TradeDetail;
use Illuminate\Http\Request;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trades = Trade::join('crops','crops.id','trades.crop_id')
                        ->join('users','users.id','trades.created_by')
                        ->select('trades.*','crops.name as crop_name','users.name as created_by_name')
                        ->paginate(10);
        //dd($trades);
        return view('admin.trade_list',['trades'=>$trades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $trade =  Trade::with('trade_details')
                        ->join('crops','crops.id','trades.crop_id')
                        ->join('users','users.id','trades.created_by')
                        ->select('trades.*','crops.name as crop_name','users.name as created_by_name')->find($id);
       // dd($trade->trade_details);
       return view('admin.trade_detail',['trade'=>$trade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function trade_approve(Request $request){
        
        if($request->installment_number > 0){

            $trade = Trade::find($request->trade_id);
            
            if($trade->status_id == 0){

                $trade->status_id = 1;
                $trade->installment_number = $request->installment_number;
                $trade->save();
                $this->insertIntoTradeDetails($request->trade_id);
                $request->session()->flash('feedback','Trade Approve successfully');
                return back();

            }else{

                $request->session()->flash('failed','Trade Already Approved');
                return back();
            }

            

        }else{
            $request->session()->flash('failed','Trade Approval Failed');
            return back();
        }
    }

    public function insertIntoTradeDetails($trade_id){

        $trade = Trade::find($trade_id);
        $actual_price = $trade->actual_price;
        $total_trading_amount = $trade->total_trading_amount;
        $quantity = $trade->quantity;
        $installment_number = $trade->installment_number;

        $single_trade_amount = $total_trading_amount/$installment_number;

        $single_trade_quantity = $quantity/$installment_number;
        $days = 360/$installment_number;

        //$days = 30;
        $today_date = date('Y-m-d');
        //echo "today_date: ".$today_date."<br/>";

        for ($ins_id=1; $ins_id <= $installment_number ; $ins_id++) { 

            $total_days = $ins_id * $days;
            $next_due_date = date('Y-m-d', strtotime($today_date. " +".$total_days." days"));
            //echo $next_due_date."<br/>";
            # code...

            $trade_detail = new TradeDetail;
            $trade_detail->trade_id = $trade_id;
            $trade_detail->quantity = $single_trade_quantity;
            $trade_detail->amount = $single_trade_amount;
            $trade_detail->trading_date = $next_due_date;

            $trade_detail->barcode = $this->generateBarcode(4);
            $trade_detail->save();

        }

         // 
    }

   public function generateBarcode($digit){
        $x = $digit; // Amount of digits
        $min = pow(10,$x);
        $max = pow(10,$x+1)-1;
        $value = rand($min, $max);
        return $value;
    }
}
