<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan">
                <p class="site-title"><a class="logo" href="" title="phim hay ">Phim Hay</a></p>
            </div>
            <div class="col-md-4 col-sm-6 halim-search-form hidden-xs">
                <a href="{{ route('home') }}"><i class="bi bi-house-fill" style="font-size: 1.7em"></i></a>
                <div class="header-nav">
                    <div class="col-xs-12">

                        @include('modules.search')

                        <ul class="ui-autocomplete ajax-results hidden"></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 hidden-xs">
                @if (Session()->has('user'))
                    <a href="{{ route('notify') }}">
                        <div id="get-bookmark" class="box-shadow"><i class="bi bi-bell-fill"></i><span> Thông
                                báo
                            </span><span class="count_notify"
                                style="background: red
                        ;padding: 1px 6px;border-radius: 50%;">
                                @if (isset($notify))
                                    {{ count($notify) }}
                                @else
                                    0
                                @endif
                            </span></div>
                    </a>
                @endif
                <div class="wrapper_menu_utilities ">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle menu_utilities" type="button" id="dropdownMenuButton"
                            data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-filter"></i> &nbsp; Tiện ích người dùng
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (Session::get('user'))
                                <li><a class="dropdown-item" href="#">Phim vừa xem</a></li>
                                <li><a class="dropdown-item" href="#">Phim đã thích</a></li>
                                <li><a class="dropdown-item" href="{{ route('formCreateBlog') }}"><i
                                            class="fa-solid fa-arrow-right-to-bracket"></i>Viết Blog</a></li>
                            @endIf
                            @if (!Session::get('user'))
                                <li><a class="dropdown-item" href="{{ route('login') }}">Dang Nhap</a></li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Dang Ky</a></li>
                            @endIf
                            @if (Session::get('user'))
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Dang Xuat</a></li>
                            @endIf
                        </ul>
                    </div>
                </div>
                <div class="user_area">
                    @if (Session::get('user'))
                        <a href=" {{ route('getUser') }}"> <i class="bi bi-person-fill"></i></a>
                    @endIf
                </div>
            </div>
        </div>
    </div>
</header>
