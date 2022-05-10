<style>
    /* body select.select_box */
     select {
        display: block;
        padding: 10px 70px 10px 13px !important;
        max-width: 100%;
        height: auto !important;
        border: 1px solid #e3e3e3;
        border-radius: 3px;
        background: url("https://i.ibb.co/b7xjLrB/selectbox-arrow.png") right center no-repeat;
        background-color: #fff;
        color: #444444;
        font-size: 12px;
        line-height: 16px !important;
        appearance: none;
        /* this is must */ -webkit-appearance: none;
        -moz-appearance: none;
    }
    /* body select.select_box option */
     select option {
        padding: 0 4px;
    }
    /* for IE and Edge */
    select::-ms-expand {
        display: none;
    }
    select:disabled::-ms-expand {
        background: #f60;
    }
</style>
<div id="modal-add" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" id="form-add" method="POST" role="form">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="smaller lighter blue no-margin">A modal with a slider in it!</h3>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Tên danh mục</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nhập tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input name="slug" type="text" class="form-control" id="slug" placeholder="Slug">
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6" style="padding-left: 0px !important; margin-bottom: 10px">
                            <label>
                                <span>Công khai</span>
                                <input name="active" class="ace ace-switch ace-switch-6" id="active" type="checkbox">
                                <span class="lbl" style="top: 8px"></span>

                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6" style="padding-left: 0px !important; margin-bottom: 10px">
                            <label>
                                <span>Nổi bật</span>
                                <input name="hot" class="ace ace-switch ace-switch-6" id="hot" type="checkbox">
                                <span class="lbl" style="top: 8px"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="parent_id">Danh mục cha</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="" selected>Chọn danh mục cha</option>
                            @if($categories)
                                @php echo Modules\Admin\Http\Controllers\AdminCategoryController::showCategories($categories);  @endphp
{{--                            @foreach($categories as $stt => $category)--}}
{{--                                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                            @endforeach--}}
                            @endif

                        </select>
                    </div>


                </div>

                <div class="modal-footer">
                    <button class="btn btn-white btn-info btn-bold">
                        <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                        Lưu
                    </button>
                    <button class="btn btn-white btn-default btn-round" data-dismiss="modal">
                        <i class="ace-icon fa fa-times red2"></i>
                        Đóng
                    </button>
                </div>
            </form>
        </div><!-- /.modal-content -->
</div>
