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
                    <li><a title="Phim 2020" href="#">Phim 2020</a></li>
                    <li><a title="Năm 2019" href="#">Năm 2019</a></li>
                    <li><a title="Năm 2018" href="#">Năm 2018</a></li>
                </ul>
            </li>
            <li class="mega dropdown">
                <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    disabled>Thể Loại <span class="caret"></span></a>
                <ul role="menu" class=" dropdown-menu">
                    <li><a title="Tâm Lý" href="#">Tâm Lý</a></li>
                    <li><a title="Hành động" href="#">Hành động</a></li>
                    <li><a title="Viễn Tưởng" href="#">Viễn Tưởng</a></li>
                    <li><a title="Hoạt Hình" href="#">Hoạt Hình</a></li>
                    <li><a title="Thể Thao - Âm Nhạc" href="#">Thể Thao &#8211; Âm Nhạc</a>
                    </li>
                </ul>
            </li>
            <li class="mega dropdown">
                <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"
                    disabled>Quốc Gia <span class="caret"></span></a>
                <ul role="menu" class=" dropdown-menu">
                    <li><a title="Việt nam" href="#">Việt nam</a></li>
                    <li><a title="Ấn Độ" href="#">Ấn Độ</a></li>
                    <li><a title="Mỹ" href="#">Mỹ</a></li>
                </ul>
            </li>
            <li><a title="Phim Lẻ" href="#">Phim Lẻ</a></li>
            <li><a title="Phim Bộ" href="#">Phim Bộ</a></li>
            <li><a title="Phim Chiếu Rạp" href="#">Phim Chiếu Rạp</a></li>
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
