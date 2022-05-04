@extends('layout.master')
@section('content')

{{--    tiêu đề--}}
{{--    nội dung--}}
{{--    chủ đề con--}}
{{--    nhiều ảnh--}}


<form action="{{route('posts.store')}}" method="post" class="form-horizontal" role="form">
    @csrf
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tiêu đề </label>
        <input name="title" type="text" id="form-field-1" class="col-xs-10 col-sm-5" />
    </div>


    <div class="form-group">
        <div class="widget-body">
            <div class="widget-main">
                <div>
                    <label for="form-field-8">Nội dung</label>
                    <textarea name="content" class="form-control" id="form-field-8"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="widget-body">
            <label for="form-field-select-1 col-sm-3 control-label no-padding-right">Danh mục</label>
            <select name="topic_id" class="form-control col-xs-10 col-sm-5" id="form-field-select-1">
                @foreach($topics as $topic)
                    <option value="{{$topic->id}}">{{$topic->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button>Thêm</button>
</form>


@endsection
