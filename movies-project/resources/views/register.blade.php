<!DOCTYPE html>
<html lang="vi">

<head>
    @include('assets.link_css')
</head>

<body>
    @include('modules.header')
    @include('modules.navigation')

    <div id="login" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h1 style="font-weight: bold; color: #fff;">Đăng Ký</h1>
                                    </div>
                                    <form>
                                    <div class="form-group">
                                            <label for="exampleInputName1" style="color: #fff;">Tên Người Dùng</label>
                                            <input type="name" class="form-control" id="exampleInputName1"
                                                placeholder="Nhập tên người dùng">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" style="color: #fff;">Địa Chỉ Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Nhập email">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1" style="color: #fff;">Mật Khẩu</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Nhập mật khẩu">
                                        </div>
                                        <button type="submit" class="btn" style="background: #e46565; color: #fff;">Đăng
                                            ký</button>
                                        <p class="text-muted text-center mt-3 mb-0">Đã có tài khoản? <a
                                                href="register.html" class="text-primary ml-1">Đăng nhập</a></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="slideshow-container">
                                    <div class="mySlides fade">
                                        <img src="https://movies.sterkinekor.co.za/CDN/media/entity/get/FilmPosterGraphic/HO00002694?referenceScheme=HeadOffice&allowPlaceHolder=true&height=500"
                                            style="width:100%">
                                    </div>
                                    <div class="mySlides fade">
                                        <img src="https://movies.sterkinekor.co.za/CDN/media/entity/get/FilmPosterGraphic/HO00002694?referenceScheme=HeadOffice&allowPlaceHolder=true&height=500"
                                            style="width:100%">
                                    </div>
                                    <div class="mySlides fade">
                                        <img src="https://movies.sterkinekor.co.za/CDN/media/entity/get/FilmPosterGraphic/HO00002694?referenceScheme=HeadOffice&allowPlaceHolder=true&height=500"
                                            style="width:100%">
                                    </div>
                                    <div class="mySlides fade">
                                        <img src="https://movies.sterkinekor.co.za/CDN/media/entity/get/FilmPosterGraphic/HO00002694?referenceScheme=HeadOffice&allowPlaceHolder=true&height=500"
                                            style="width:100%">
                                    </div> <br>
                                    <div style="text-align:center">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
   
    @include('modules.footer')
    @include('assets.link_js');
</body>

</html>