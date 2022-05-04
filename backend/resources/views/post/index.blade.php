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
            <th>Tiêu đề</th>
            <th>Chủ đề</th>
            <th>Người đăng</th>
            <th>Trạng thái</th>
            <th>Thời gian đăng</th>
            <th>Lần cuối cập nhật</th>
            <th>Duyệt</th>
        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr>
                <td class="center">
                    <label class="position-relative">
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="tables.html#">{{$post->id}}</a>
                </td>
                <td>{{$post->title}}</td>
                <td>{{$post->topic_name}}</td>
                <td>{{$post->user_name}}</td>
                <td class="hidden-480">
                    <span class="label label-sm label-warning">
                        @if ($post->status === 0)
                            Chờ duyệt
                        @elseif ($post->status === 1)
                            Đã duyệt
                        @else
                            Không duyệt
                        @endif
                    </span>
                </td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group">
                        @if ( $post->status === 0)
                            <form method="post" action="{{route('posts.update1', ['post' => $post->id])}}" style="float:left;padding-right: 2px;">
                                @csrf
                                <button class="btn btn-xs btn-success">
                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                </button>
                            </form>

                            <form method="post" action="{{route('posts.update0', ['post' => $post->id])}}" style="float:left;padding-right: 2px;">
                                @csrf
                                <button class="btn btn-xs btn-info">
                                    <i class="ace-icon fa fa-minus-circle bigger-120"></i>
                                </button>
                            </form>
                        @endif

                        @if (session()->get('level') === 1)
                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal{{$post->id}}">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </button>
                        @endif
                    </div>

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

            <div class="modal fade" id="myModal{{$post->id}}" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Cảnh báo</h4>
                        </div>
                        <div class="modal-body">
                            <p>Xóa bài viết này ?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{route('posts.destroy', ['post' => $post->id])}}" method="post">
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
