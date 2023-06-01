<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan">
                <p class="site-title"><a class="logo" href="" title="phim hay ">Phim Hay</p>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 halim-search-form hidden-xs">
                <div class="header-nav">
                    <div class="col-xs-12">

                        @include('modules.search')

                        <ul class="ui-autocomplete ajax-results hidden"></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 hidden-xs">
                <div id="get-bookmark" class="box-shadow"><i class="bi bi-bell-fill"></i><span> Thông báo</span><span
                        class="count">0</span></div>
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
                    <a href=" {{ route('user') }}"> <i class="bi bi-person-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
