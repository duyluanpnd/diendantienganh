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
            <th>Tên</th>
            <th class="hidden-480">Vị trí</th>

            <th></th>
        </tr>
        </thead>

        <tbody>
        @foreach($admins as $admin)
        <tr>
            <td class="center">
                <label class="position-relative">
                    <input type="checkbox" class="ace">
                    <span class="lbl"></span>
                </label>
            </td>

            <td>
                <a href="tables.html#">{{$admin->id}}</a>
            </td>
            <td>{{$admin->name}}</td>

            <td class="hidden-480">
                <span class="label label-sm label-warning">
                    @if ($admin->level === 0)
                        Nhân viên
                    @else
                        Sếp
                    @endif
                </span>
            </td>

            <td>
                <div class="hidden-sm hidden-xs btn-group">
                    <button class="btn btn-xs btn-success">
                        <i class="ace-icon fa fa-check bigger-120"></i>
                    </button>

                    <button class="btn btn-xs btn-info">
                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                    </button>

                    @if (session()->get('level') === 1)
                    <button class="btn btn-xs btn-danger">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    </button>
                    @endif

                    <button class="btn btn-xs btn-warning">
                        <i class="ace-icon fa fa-flag bigger-120"></i>
                    </button>
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
        @endforeach

        </tbody>
    </table>



@endsection
