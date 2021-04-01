<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@.keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Blank Page Layout</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
        {{Html::style('/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        {{Html::style('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}
       
        {{Html::style('/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}
        {{Html::style('/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}
        
        <!-- END GLOBAL MANDATORY STYLES -->


        {{Html::style('/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}


        <!-- BEGIN THEME GLOBAL STYLES -->
        {{Html::style('/assets/global/css/components.min.css')}}
        {{Html::style('/assets/global/css/plugins.min.css')}}
        
        <!-- END THEME GLOBAL STYLES -->
        
        <!-- BEGIN THEME LAYOUT STYLES -->
        {{Html::style('/assets/layouts/layout2/css/layout.min.css')}}
        {{Html::style('/assets/layouts/layout2/css/themes/default.min.css')}}
        {{Html::style('/assets/layouts/layout2/css/custom.min.css')}}
         {{Html::style('/css/digi_custom.css')}}
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{{ asset('favicon.ico') }}}" /> 

        <!-- BEGIN CORE PLUGINS -->
            
            {{ Html::script('/assets/global/plugins/jquery.min.js') }}
            {{ Html::script('/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}
            {{ Html::script('/assets/global/plugins/js.cookie.min.js') }}
            {{ Html::script('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
            {{ Html::script('/assets/global/plugins/jquery.blockui.min.js') }}
            {{ Html::script('/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}
            
        <!-- END CORE PLUGINS -->
    </head>
    <!-- END HEAD -->
   <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" >
    @include('admin.adminlayout.top-navbar')

    @yield('content')

            <!-- BEGIN FOOTER -->
          <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
          
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
            
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            {{ Html::script('/assets/global/scripts/app.min.js') }}
            
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            {{ Html::script('/assets/layouts/layout2/scripts/layout.min.js') }}
            {{ Html::script('/assets/layouts/layout2/scripts/demo.min.js') }}
            {{ Html::script('/assets/layouts/global/scripts/quick-sidebar.min.js') }}
            
            <!-- END THEME LAYOUT SCRIPTS -->

                <!-- BEGIN PAGE LEVEL PLUGINS -->
            {{ Html::script('/assets/global/plugins/select2/js/select2.full.min.js') }}
            {{ Html::script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}
            {{ Html::script('/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}
            {{ Html::script('/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}

            {{ Html::script('/assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}
            {{ Html::script('/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}


            
            {{ Html::script('/assets/global/plugins/ckeditor/ckeditor.js') }}
            
            {{ Html::script('/assets/global/scripts/datatable.js') }}
            {{ Html::script('/assets/global/plugins/datatables/datatables.min.js') }}
            {{ Html::script('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}

            
            {{ Html::script('/assets/pages/scripts/table-datatables-buttons.min.js') }}
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
           {{--  {{ Html::script('/assets/pages/scripts/form-validation.min.js') }} --}}
            
            <!-- END PAGE LEVEL SCRIPTS -->
            {{ Html::script('/js/admin_digi_ajax.js') }}
            {{ Html::script('/js/digi_dynamic_css.js') }}
             
    </body>

</html>