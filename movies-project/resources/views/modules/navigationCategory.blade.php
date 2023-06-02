<div class="collapse navbar-collapse" id="halim">
    <div class="menu-menu_1-container">
        <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
            <li class="current-menu-item active"><a title="Trang Chủ" href="{{ route('home') }}">Trang Chủ</a>
            </li>
            <li class="mega"><a title="Phim Mới" href="#">Phim Mới</a></li>
            <li class="mega dropdown">
                <a title="Năm" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    disabled>Năm <span class="caret"></span></a>
                <ul role="menu" class=" dropdown-menu">
                    @foreach ($years as $year)
                        <li><a title="Phim 2020" href="#">Phim {{ $year }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="mega dropdown">
                <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    disabled>Thể Loại <span class="caret"></span></a>
                <ul role="menu" class=" dropdown-menu">
                    @foreach ($genreses as $gen)
                        <li><a title="{{ $gen->title }}" href="#">{{ $gen->title }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="mega dropdown">
                <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    disabled>Quốc Gia <span class="caret"></span></a>
                <ul role="menu" class=" dropdown-menu">
                    @foreach ($countries as $country)
                        <li><a title="{{ $country }}" href="#">{{ $country }}</a></li>
                    @endforeach
                </ul>
            </li>
            @foreach ($categories as $category)
                <li><a title="Phim Lẻ" href="#">{{ $category->name }}</a></li>
            @endforeach
            <li class="mega"><a title="Phim Mới" href="{{ route('watchBlog') }}">Blog</a></li>
            <li><a href="{{ route('filmFilter') }}" title="Phim Chiếu Rạp" href="#">Lọc Phim</a></li>
        </ul>
    </div>
    <ul class="nav navbar-nav navbar-left" style="background:#000;">
        @if (Session::get('user'))
            <li class="disabled"><a href="#" style="color: #ffed4d;">{{ Session::get('user')->username }}</a></li>
        @endIf
    </ul>
</div>
