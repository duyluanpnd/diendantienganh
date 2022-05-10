<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Admin template</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

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
<link rel="stylesheet" href="{{asset('admin_template/css/jquery.gritter.css')}}" />
<link rel="stylesheet" href="{{asset('admin_template/css/bootstrap-editable.css')}}" />
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

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			@include('admin::layouts.header')
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

        <div id="sidebar" class="sidebar responsive">
            @include('admin::layouts.sidebar')
        </div>

			<div class="main-content">
				@yield('content')
			</div><!-- /.main-content -->

			<div class="footer">
				@include('admin::layouts.footer')
			</div>

			<a href="index.php#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->
<!--[if !IE]> -->
<script src="{{asset('admin_template/js/jquery.min.js')}}"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="{{asset('admin_template/js/jquery.min.js')}}"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src={{asset('admin_template/js/jquery.min.js')}}>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
{{--<script type="text/javascript">--}}
{{--window.jQuery || document.write("<script src={{asset('admin_template/js/jquery.min.js')}}>"+"<"+"/script>");--}}
{{--</script>--}}
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src={{asset('admin_template/js/jquery.mobile.custom.min.js')}}>"+"<"+"/script>");
</script>
<script src="{{asset('admin_template/js/bootstrap.min.js')}}"></script>
{{--<!--[if lte IE 8]>--}}
{{--  <script src="{{asset('admin_template/js/excanvas.min.js')}}"></script>--}}
{{--<![endif]-->--}}
<script src="{{asset('admin_template/js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('admin_template/js/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootbox.min.js')}}"></script>
<script src="{{asset('admin_template/js/chosen.jquery.min.js')}}"></script>
<script src="{{asset('admin_template/js/fuelux.spinner.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('admin_template/js/moment.min.js')}}"></script>
<script src="{{asset('admin_template/js/daterangepicker.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.knob.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.autosize.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-tag.min.js')}}"></script>
<script src="{{asset('admin_template/js/fuelux.wizard.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin_template/js/additional-methods.min.js')}}"></script>
<script src="{{asset('admin_template/js/select2.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.hotkeys.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.jqGrid.min.js')}}"></script>
<script src="{{asset('admin_template/js/grid.locale-en.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.nestable.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('admin_template/js/ace-editable.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_template/js/jquery.dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin_template/js/markdown.min.js">')}}"></script>
<script src="{{asset('admin_template/js/bootstrap-markdown.min.js')}}"></script>

<script src="{{asset('admin_template/js/ace-elements.min.js')}}"></script>
<script src="{{asset('admin_template/js/ace.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
    // // Script for select all checkbox
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

    });
	$('#name').change(function (event) {
		$.get('{{route('admin.checkSlug.category')}}',
			{ 'name' : $(this).val()},
				function (data) {
					$('#slug').val(data.slug);
				}
		);
	})
</script>
@yield('script')
</body>
</html>
