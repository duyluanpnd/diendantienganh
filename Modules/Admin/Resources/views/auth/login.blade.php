<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>
    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('admin_template/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/font-awesome.min.css')}}" />
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{asset('admin_template/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/jquery-ui.custom.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/chosen.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/bootstrap-timepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/daterangepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/bootstrap-datetimepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/colorpicker.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/colorbox.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/ui.jqgrid.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/jquery-ui.min.css')}}" />
    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('admin_template/css/css.css')}}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('admin_template/css/ace.min.css')}}" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('admin_template/css/ace-part2.min.css')}}" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('admin_template/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin_template/css/ace-rtl.min.css')}}" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('admin_template/css/ace-ie.min.css')}}" />
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="{{asset('admin_template/js/ace-extra.min.js')}}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="{{asset('admin_template/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin_template/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('admin_template/css/more.css')}}" />
</head>
<body class="login-layout">
<div class="main-container">
    @if(\Session::has('success'))
        <div class="alert alert-success" style="position: fixed; right: 20px">
            <strong>Thành công! </strong> {{\Session::get('success')}}
        </div>
    @endif
    @if(\Session::has('danger'))
        <div class="alert alert-danger" style="position: fixed; right: 20px">
            <strong>Thất bại! </strong> {{\Session::get('danger')}}
        </div>
    @endif
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Ace</span>
                            <span class="white" id="id-text2">Application</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; Company Name</h4>
                    </div>
                    <div class="space-6"></div>
                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Please Enter Your Information
                                    </h4>
                                    <div class="space-6"></div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <fieldset>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                    <input id="user" required name="email" type="email" class="form-control" placeholder="Email">
                                                    <i class="ace-icon fa fa-user"></i>
                                                </span>
                                            </label>
                                            <label class="block clearfix">
                                                <span class="block input-icon input-icon-right">
                                                   <input name="password" required type="password" class="form-control" placeholder="Password">
                                                   <i class="ace-icon fa fa-lock"></i>
                                                </span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"> Remember Me</span>
                                                </label>
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.widget-main -->
                            </div>
                            <!-- /.widget-body -->
                        </div>
                        <!-- /.login-box -->
                    </div>
                    <!-- /.position-relative -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.main-content -->
</div>
<!-- /.main-container -->
<!-- basic scripts -->
<!--[if !IE]> -->
<script src="{{asset('admin_template/js/jquery.min.js')}}"></script>
<!-- <![endif]-->
<!--[if IE]>
<script src="{{asset('admin_template/js/jquery.min.js')}}"></script>
<![endif]-->
<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src=" + "{{asset('admin_template/js/jquery.min.js')}}" + ">" + "<" + "/script>");
</script>
<!-- <![endif]-->
<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript">
    $(document).ready(function () {
        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove();
            });
        }, 5000);
    });
</script>
</body>
</html>
