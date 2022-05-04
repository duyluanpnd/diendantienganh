@extends('layout.master')
@section('content')
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th class="center">
                <label class="position-relative">
                    <input type="checkbox" class="ace">
                    <span class="lbl"></span>
                </label>
            </th>
            <th>#</th>
            <th>Tên danh mục</th>
            <th>Xem các bài đăng theo danh mục này</th>
            <th></th>

        </tr>
        </thead>

        <tbody>
        @foreach($sub_topics as $sub_topic)
            <tr>
                <td class="center">
                    <label class="position-relative">
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="tables.html#">{{$sub_topic->id}}</a>
                </td>
                <td>{{$sub_topic->name}}</td>

                <td>
                    <form action="{{route('posts.index2', ['topic' => $sub_topic->id])}}">
                        <button class="btn btn-xs btn-success">
                            <i class="ace-icon fa fa-eye bigger-120"></i>
                        </button>
                    </form>
                </td>

                <td>
                    <div class="hidden-sm hidden-xs btn-group">
                        <button class="btn btn-xs btn-info">
                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                        </button>

                        @if (session()->get('level') === 1)
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal{{$sub_topic->id}}">                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                        @endif

                    </div>
                </td>

                <div class="hidden-md hidden-lg">
                    <div class="inline position-relative">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                            <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                            <li>
                                <a href="tables.html#" class="tooltip-info" data-rel="tooltip" title="View">
                                    <span class="blue">
                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="tables.html#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                    <span class="green">
                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="tables.html#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                    <span class="red">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                </td>
            </tr>

            <div class="modal fade" id="myModal{{$sub_topic->id}}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Cảnh báo</h4>
                        </div>
                        <div class="modal-body">
                            <p>Xóa danh mục này sẽ xóa tất cả bài viết thuộc danh mục này</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{route('topics.destroy_sub_topic', ['topic' => $sub_topic->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        @endforeach

        </tbody>
    </table>


@endsection
