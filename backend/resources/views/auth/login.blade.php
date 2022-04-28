<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('backend/images/favicon.ico')}}" rel="icon" type="image/x-icon" />
    <title>DIỄN ĐÀN TIẾNG ANH</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/login.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet" />
</head>
<body class="webp_support">
    <header>
        <div class="pn-quancao pn-image"><img src="{{asset('backend/images/banner_top.jpg')}}" alt="" /></div>
        <div class="pn-header">
            <div class="container">
                <a href="#" class="pn-logo"><img src="{{asset('backend/images/logo.png')}}" alt="DIỄN ĐÀN TIẾNG ANH" /></a>
                <div class="pn-header-right">
                    <button class="pn-icon-menu">
                        <span></span><span></span><span></span>
                    </button>
                    <a href="#" class="pn-button">FORUM</a>
                    <div class="pn-wrapper-menu">
                        <span id="close-menu"><i class="fa fa-times"></i></span>
                        <ul class="pn-menu clearfix">
                            <li class="haschild active">
                                <a href="#">Luyện thi</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li class="haschild">
                                        <a href="#">IELTS</a>
                                        <span class="fa fa-caret-down"></span>
                                        <ul>
                                            <li><a href="#">IELTS Listening</a></li>
                                            <li><a href="#">IELTS Speaking</a></li>
                                            <li><a href="#">IELTS Reading</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">TOEIC</a></li>
                                    <li><a href="#">TOEFL</a></li>
                                    <li><a href="#">GRE, GMAT, SAT</a></li>
                                </ul>
                            </li>
                            <li class="haschild">
                                <a href="#">Tiếng anh giao tiếp</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li><a href="#">Tiếng Anh văn phòng</a></li>
                                    <li><a href="#">Tiếng Anh thương mại</a></li>
                                    <li><a href="#">Tiếng Anh thiếu nhi</a></li>
                                    <li><a href="#">Tiếng Anh theo chủ đề</a></li>
                                    <li><a href="#">Thành ngữ & Phrasal Verbs</a></li>
                                </ul>
                            </li>
                            <li class="haschild">
                                <a href="#">Tự học tiếng anh</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li><a href="#">Pronunciation</a></li>
                                    <li><a href="#">Listening</a></li>
                                    <li><a href="#">Speaking</a></li>
                                    <li><a href="#">Reading</a></li>
                                    <li><a href="#">Writing</a></li>
                                    <li><a href="#">Ngữ pháp thông dụng</a></li>
                                </ul>
                            </li>
                            <li class="haschild">
                                <a href="#">Chia sẻ</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li><a href="#">Phương pháp học</a></li>
                                    <li><a href="#">Kinh nghiệm Du học</a></li>
                                </ul>
                            </li>
                            <li class="haschild">
                                <a href="#">Ebook tiếng anh</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li><a href="#">Sự Kiện & Hoạt động</a></li>
                                    <li><a href="#">Tin Thị Trường</a></li>
                                </ul>
                            </li>
                            <li class="haschild">
                                <a href="#">English watch</a>
                                <span class="fa fa-caret-down"></span>
                                <ul>
                                    <li><a href="#">Sự Kiện & Hoạt động</a></li>
                                    <li><a href="#">Tin Thị Trường</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="pn-content-body">
        <div class="pn-wrapper-login">
            <div class="container">
                <div class="pn-content-login">
                    <form action="{{route('process_login')}}">
                        <h2 class="pn-title">Đăng nhập tài khoản</h2>
                        <p class="text-center"><a href="#" class="pn-logo"><img src="{{asset('backend/images/logo.png')}}" alt="" /></a></p>
                        <p><input type="text" name="name" class="form-control" placeholder="Tên tài khoản hoặc Email"></p>
                        <p><input type="password" name="password" class="form-control" placeholder="Mật khẩu"></p>
                        <p class="text-right"><a href="#">Quên mật khẩu</a></p>
                        <p><button type="submit" class="pn-button">Đăng nhập</button></p>
                        <div class="pn-login-google">
                            <p><span>Hoặc</span></p>
                            <p><a href="#" class="pn-login-gg"><span></span>Đăng nhập bằng Google</a></p>
                            <p><a href="#" class="pn-login-fb"><span></span>Đăng nhập bằng Facebook</a></p>
                        </div>
                        <p class="text-center" style="font-size: 13px;margin-top: 20px">Chưa có tài khoản? <a href="#" style="color: #0011f3;">Đăng ký</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a href="#" class="pn-logo-ft"><img src="{{asset('backend/images/logo.png')}}" alt="Diễn đàn tiếng anh" /></a>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <h6 class="pn-title-ft">Diễn đàn tiếng Anh</h6>
                    <ul>
                        <li><a href="#">Nội quy diễn đàn</a></li>
                        <li><a href="#">Thỏa thuận sử dụng dịch vụ</a></li>
                        <li><a href="#">Góp ý</a></li>
                        <li><a href="#">Hỗ trợ, hướng dẫn</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <h6 class="pn-title-ft">Thông tin liên hệ</h6>
                    <ul class="pn-info">
                        <li><i class="fa fa-phone"></i>0919.050.560</li>
                        <li><i class="fa fa-envelope"></i>info@diendantienganh.com</li>
                        <li><i class="fa fa-map-marker"></i>357 Lê Hồng Phong, Phường 2, Quận 10, TP.HCM</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="pn-copyright"><div class="container">Giấy phép MXH số 530/GP-BTTTT do Bộ TTTT cấp</div></div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/website.js"></script>
</body>
</html>