@extends('admin::layouts.master')
@section('content')
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{route('admin.home')}}">Home</a>
            </li>
            <li class="active">Category</li>
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
        @include('admin::components.setting')
        <div class="page-header">
            <h1>Category</h1>
            <a href="#" data-target="#modal-add" data-toggle="modal" type="button" class="btn btn-primary pull-right" style="bottom: 33px; margin-right: 30px;">Thêm mới</a>
        </div>
        <!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->


                <div>
                    <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label class="position-relative">
                                        <input type="checkbox" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>STT</th>
                                <th>Tên danh mục</th>
{{--                                <th>--}}
{{--                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>--}}

{{--                                </th>--}}
                                <th>Danh mục cha</th>
                                <th class="hidden-480">Trạng thái</th>
                                <th class="hidden-480">Nổi bật</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @if(isset($categories))
                                @foreach($categories as $stt => $category)
                                    <tr id="sid{{$category->id}}">
                                        <td class="center">
                                            <label class="position-relative">
                                                <input type="checkbox" class="ace" />
                                                <span class="lbl"></span>
                                            </label>
                                        </td>

                                        <td>{{$stt + 1}}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="hidden-480">{{$category->parent->name ?? ''}}</td>
                                        <td>
                                            <a class="label label-sm {{$category->getStatus($category->active) ['class']}}" href="#">
                                                {{$category->getStatus($category->active) ['name']}}
                                            </a>
                                        </td>
                                        <td>
                                            <a class="label label-sm {{$category->getHot($category->hot) ['class']}}" href="#">
                                                {{$category->getHot($category->hot) ['name']}}
                                            </a>
                                        </td>

                                        <td>
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a class="blue" href="tables.html#">
                                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                                </a>

                                                <a class="green" href="tables.html#">
                                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                                </a>

                                                <a class="red delete" href="{{route('admin.get.action.category',['delete', $category->id])}}" data-id="{{$category->id}}">
                                                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                @include("admin::category.form")

            <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.page-content -->
@stop
@section('script')
    <script>
        $(document).ready(function() {
            $('#form-add').submit(function(e){
                e.preventDefault();
                let url = '{{route('admin.store.category')}}';
                $.ajax({
                    type: 'post',
                    url: url,
                    data: {
                        name: $('#name').val(),
                        slug: $('#slug').val(),
                        active: $('#active').is(":checked"),
                        hot: $('#hot').is(":checked"),
                        parent_id: $('#parent_id').val(),
                    },
                    success: function(response) {
                        if (response.data.status) {
                            $('#modal-add').modal('hide');
                            console.log(response.data);
                            {{--$('tbody').prepend('<tr><td id="'+response.data.id+'">'+response.data.id+'</td><td id="hoten-'+response.data.id+'">'+response.data.hoten+'</td><td id="gioitinh-'+response.data.id+'">'+response.data.gioitinh+'</td><td id="ngaysinh-'+response.data.id+'">'+response.data.ngaysinh+'</td><td id="sdt-'+response.data.id+'">'+response.data.sdt+'</td><td id="diachi-'+response.data.id+'">'+response.data.diachi+'</td><td><button data-url="{{asset('')}}studentajax/'+response.data.id+'"​ type="button" data-target="#show" data-toggle="modal" class="btn btn-info btn-show">Detail</button><button style="margin-left: 5px;" data-url="{{asset('')}}studentajax/'+response.data.id+'"​ type="button" data-target="#edit" data-toggle="modal" class="btn btn-warning btn-edit">Edit</button><button style="margin-left: 5px;" data-url="{{asset('')}}studentajax/'+response.data.id+'"​ type="button" data-target="#delete" data-toggle="modal" class="btn btn-danger btn-delete">Delete</button></td></tr>');--}}

                        }
                        else {
                            swal('Error', response.data.error, "error");
                        }

                    },
                    error: function (response) {
                        let errors = JSON.parse(response.responseText).errors;
                        swal('Error', errors.join('\n'), "error");
                    }
                })
            });

            $(".delete").click(function (event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                let id = $this.attr('data-id');
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: 'get',
                            url: url,
                            success: function(response) {
                                console.log(response);
                                $('#sid'+id).remove();
                                swal(response.success, {
                                    icon: "success",
                                });
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                //xử lý lỗi tại đây
                            }
                        });

                    }
                });
            });
        });
    </script>
@stop


