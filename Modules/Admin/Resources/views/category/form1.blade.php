<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"> {{ isset($category->id) ? "Cập nhật danh mục" : "Thêm mới danh mục" }} </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">

                <form action="" id="form-add" method="POST" role="form">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Họ tên</label>
                            <input name="hoten" type="text" class="form-control" id="hoten-add" placeholder="Nhập vào họ tên">
                        </div>

                        <div class="form-group">
                            <label for="">Giới tính</label>
                            <select name="gioitinh" id="gioitinh-add" class="form-control" required="required">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Ngày sinh</label>
                            <input name="ngaysinh" type="date" name="" id="ngaysinh-add" class="form-control" value="" required="required" title="">
                        </div>

                        <div class="form-group">
                            <label for="">Số điện thoại</label>
                            <input name="sdt" type="number" class="form-control" id="sdt-add" placeholder="Nhập vào số điện thoại">
                        </div>

                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input name="diachi" type="text" class="form-control" id="diachi-add" placeholder="Nhập vào địa chỉ">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <form  action="" method="POST">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="name" >Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="{{old('name',isset($category->c_name) ? $category->c_name : '')}}"  placeholder="Nhập tên danh mục">
                @if($errors->has('name'))
                    <div class="error-text">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="icon" >Icon</label>
                <input type="text" class="form-control" name="icon" value="{{old('icon',isset($category->c_icon) ? $category->c_icon : '')}}" placeholder="fa fa-home">
                @if($errors->has('icon'))
                    <div class="error-text">
                        {{$errors->first('icon')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="c_title_seo" >Meta Title</label>
                <input type="text" class="form-control" name="c_title_seo" value="{{old('c_title_seo',isset($category->c_title_seo) ? $category->c_title_seo : '')}}" placeholder="Meta Title">
            </div>

            <div class="form-group">
                <label for="c_description_seo" >Meta Description</label>
                <input type="text" class="form-control" name="c_description_seo" value="{{old('c_description_seo',isset($category->c_description_seo) ? $category->c_description_seo : '')}}" placeholder="Meta Title">
            </div>

            <div class="form-group">
                <label>
                    <input type="checkbox" name="hot" value="{{old('hot',isset($category->c_active)? $category->c_active : '')}}" class="flat-red" >
                    Nổi bật
                </label>



            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
