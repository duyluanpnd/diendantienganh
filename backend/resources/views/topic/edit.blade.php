@extends('layout.master')

@section('content')
    <form class="form-horizontal" role="form" action="{{route('admins.update')}}" method="POST">
        @csrf
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="Enter username ..." class="col-xs-10 col-sm-5" name="username"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Old Password </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="Enter old password ..." class="col-xs-10 col-sm-5" name="password"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> New Password </label>

            <div class="col-sm-9">
                <input type="text" id="form-field-1" placeholder="Enter new password ..." class="col-xs-10 col-sm-5" name="newpassword"/>
            </div>
        </div>
        <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="ace-icon fa fa-check bigger-110"></i>
                    Submit
                </button>
            </div>
        </div>
    </form>

@endsection
