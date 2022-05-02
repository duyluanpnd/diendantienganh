<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="ace-icon fa fa-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="ace-icon fa fa-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="ace-icon fa fa-users"></i>
        </button>

        <button class="btn btn-danger">
            <i class="ace-icon fa fa-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
    <li class="active">
        <a href="index.php">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="index.php#" class="dropdown-toggle">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> Quản lý bài viết </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('topics.index')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Theo danh mục
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('users.index')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Theo người đăng
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="{{route('admins.index')}}" class="dropdown-toggle">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Quản lý nhân viên </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('admins.index')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Trang chủ
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('admins.create')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm nhân viên
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="{{route('admins.edit')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Đổi mật khẩu
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Quản lý người dùng </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('users.index')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Trang chủ
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>


</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
