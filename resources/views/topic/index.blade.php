@extends('layout1.master')
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
            <th>Tên chủ đề</th>
            <th>Xem các danh mục con của chủ đề này</th>
            <th></th>

        </tr>
        </thead>

        <tbody>
        @foreach($topics as $topic)
            <tr>
                <td class="center">
                    <label class="position-relative">
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    <a href="tables.html#">{{$topic->id}}</a>
                </td>
                <td>{{$topic->name}}</td>

                <td>
                    <form action="{{route('topics.sub_topic', ['topic' => $topic->id])}}">
                        <button class="btn btn-xs btn-success">
                            <i class="ace-icon fa fa-eye bigger-120"></i>
                        </button>
                    </form>
                </td>

                <td>
                    <div class="hidden-sm hidden-xs btn-group">
{{--                        <form action="{{route('topics.edit', ['topic' => $topic->id])}}" style="float:left;padding-right:2px">--}}
                            <button class="btn btn-xs btn-info">
                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                            </button>
{{--                        </form>--}}

                        @if (session()->get('level') === 1)
                            <form action="{{route('topics.destroy', ['topic' => $topic->id])}}" method="post" style="float:left;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-xs btn-danger">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </button>
                            </form>
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
        @endforeach

        </tbody>
    </table>



@endsection
