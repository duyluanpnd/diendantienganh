<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Admin template</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />

<!-- page specific plugin styles -->
<link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/jquery-ui.custom.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/chosen.css')}}" />
<link rel="stylesheet" href="{{asset('css/datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.css')}}" />
<link rel="stylesheet" href="{{asset('css/colorpicker.css')}}" />
<link rel="stylesheet" href="{{asset('css/select2.css')}}" />
<link rel="stylesheet" href="{{asset('css/colorbox.css')}}" />
<link rel="stylesheet" href="{{asset('css/ui.jqgrid.css')}}" />
<link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('css/bootstrap-editable.css')}}" />
<!-- text fonts -->
<link rel="stylesheet" href="{{asset('css/css.css')}}" />

<!-- ace styles -->
<link rel="stylesheet" href="{{asset('css/ace.min.css')}}" />

<!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('css/ace-part2.min.css')}}" />
<![endif]-->
<link rel="stylesheet" href="{{asset('css/ace-skins.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/ace-rtl.min.css')}}" />

<!--[if lte IE 9]>
  <link rel="stylesheet" href="{{asset('css/ace-ie.min.css')}}" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="{{asset('js/ace-extra.min.js')}}"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('js/respond.min.js')}}"></script>
<![endif]-->
<link rel="stylesheet" href="{{asset('css/more.css')}}" />

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			@include('layout.header')
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

        <div id="sidebar" class="sidebar responsive">
            @include('layout.sidebar')
        </div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="index.php#">Home</a>
						</li>
						<li class="active">Dashboard</li>
					</ul><!-- /.breadcrumb -->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->
				</div>

				<div class="page-content">
					<div class="ace-settings-container" id="ace-settings-container">
						<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
							<i class="ace-icon fa fa-cog bigger-150"></i>
						</div>

						<div class="ace-settings-box clearfix" id="ace-settings-box">
							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<div class="pull-left">
										<select id="skin-colorpicker" class="hide">
											<option data-skin="no-skin" value="#438EB9">#438EB9</option>
											<option data-skin="skin-1" value="#222A2D">#222A2D</option>
											<option data-skin="skin-2" value="#C6487E">#C6487E</option>
											<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
										</select>
									</div>
									<span>&nbsp; Choose Skin</span>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
									<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
									<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
									<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
									<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
									<label class="lbl" for="ace-settings-add-container">
										Inside
										<b>.container</b>
									</label>
								</div>
							</div><!-- /.pull-left -->

							<div class="pull-left width-50">
								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
									<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
									<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
								</div>

								<div class="ace-settings-item">
									<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
									<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
								</div>
							</div><!-- /.pull-left -->
						</div><!-- /.ace-settings-box -->
					</div><!-- /.ace-settings-container -->

					<div class="page-header">
						<h1>
							Dashboard
							<small>
								<i class="ace-icon fa fa-angle-double-right"></i>
								overview &amp; stats
							</small>
						</h1>
					</div><!-- /.page-header -->

					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
                            @yield('content')

							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div class="footer">
				@include('layout.footer')
			</div>

			<a href="index.php#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
<!--[if !IE]> -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('js/jquery.min.js')}}"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src={{asset('js/jquery.min.js')}}>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
{{--<script type="text/javascript">--}}
{{--window.jQuery || document.write("<script src={{asset('js/jquery.min.js')}}>"+"<"+"/script>");--}}
{{--</script>--}}
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src={{asset('js/jquery.mobile.custom.min.js')}}>"+"<"+"/script>");
</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
{{--<!--[if lte IE 8]>--}}
{{--  <script src="{{asset('js/excanvas.min.js')}}"></script>--}}
{{--<![endif]-->--}}
<script src="{{asset('js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/bootbox.min.js')}}"></script>
<script src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/fuelux.spinner.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/daterangepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('js/jquery.knob.min.js')}}"></script>
<script src="{{asset('js/jquery.autosize.min.js')}}"></script>
<script src="{{asset('js/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('js/bootstrap-tag.min.js')}}"></script>
<script src="{{asset('js/fuelux.wizard.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/additional-methods.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/jquery.hotkeys.min.js')}}"></script>
<script src="{{asset('js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('js/jquery.jqGrid.min.js')}}"></script>
<script src="{{asset('js/grid.locale-en.js')}}"></script>
<script src="{{asset('js/jquery.nestable.min.js')}}"></script>
<script src="{{asset('js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('js/ace-editable.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.bootstrap.js')}}"></script>
<script src="{{asset('js/markdown.min.js')}}"></script>
<script src="{{asset('js/bootstrap-markdown.min.js')}}"></script>

<script src="{{asset('js/ace-elements.min.js')}}"></script>
<script src="{{asset('js/ace.min.js')}}"></script>



<script type="text/javascript">
    // Script for select all checkbox
    jQuery(function($) {
        var oTable1 =
            $('#sample-table-2')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .dataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                        { "bSortable": false },
                        null, null,null, null, null,
                        { "bSortable": false }
                    ]


                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,

                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                    //"iDisplayLength": 50
                } );



        $(document).on('click', 'th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
                .each(function(){
                    this.checked = that.checked;
                    $(this).closest('tr').toggleClass('selected');
                });
        });


        $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('table')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            //var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }

    })
</script>

	</body>
</html>
