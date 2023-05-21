<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan">
                <a class="logo" href="" title="phim hay">
                  <img src="{{url('images/logo.png')}}" alt="{{route('home')}}">
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
                            <i class="bi bi-filter"></i> &nbsp;<span> Tiện ích người dùng</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Phim vừa xem</a></li>
                            <li><a class="dropdown-item" href="#">Phim đã thích</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i>Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}"><i class="fa-solid fa-arrow-right-to-bracket"></i>Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
                <div class="user_area">
                    <a href="{{ route('user') }}"> <i class="bi bi-person-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
