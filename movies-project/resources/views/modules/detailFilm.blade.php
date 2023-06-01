<section id="content" class="test">
    <div class="clearfix wrap-content">
        <div class="halim-movie-wrapper">
            <div class="title-block">
                <div id="bookmark" class="bookmark-img-animation primary_ribbon" data-id="38424">
                    <div class="halim-pulse-ring"></div>
                </div>
                <div class="title-wrapper" style="font-weight: bold;">
                    CHI TIET PHIM
                </div>
            </div>
            <div class="movie_info col-xs-12">
                <div class="movie-poster col-md-3">
                    <img class="movie-thumb" src="{{ asset(`storage/app/photos/$movie->image`) }}"
                        alt="{{ $movie->name }}">
                    <div class="bwa-content">
                        <div class="loader"></div>
                        <a href="http://127.0.0.1:8000/watch?id={{ $movie->id }}&episode={{ $movie->episodes()[0]->episode ?? 0 }}"
                            class="bwac-btn">
                            <i class="bi bi-play" style="top: 0 ; left: 12px"></i>
                        </a>
                    </div>
                </div>
                <div class="film-poster col-md-9">
                    <h1 class="movie-title title-1"
                        style="display:block;line-height:35px;margin-bottom: -14px;color: #ffed4d;text-transform: uppercase;font-size: 18px;">
                        {{ $movie->name }}</h1>
                    <ul class="list-info-group">
                        <li class="list-info-group-item"><span>Trạng Thái</span> : <span class="quality">HD</span><span
                                class="episode">{{ $type }}</span></li>
                        <li class="list-info-group-item"><span>Điểm IMDb</span> : <span class="imdb">7.2</span></li>
                        <li class="list-info-group-item"><span>Thời lượng</span> : {{ $movie->duration }}</li>
                        <li class="list-info-group-item"><span>Thể loại</span> :
                            @foreach ($movie->genreses as $key => $genres)
                                @if ($key == count($movie->genreses) - 1)
                                    <a href="" rel="category tag">{{ $genres->title }}</a>
                                @else
                                    <a href="" rel="category tag">{{ $genres->title }}</a>,
                                @endif
                            @endforeach
                        </li>
                        <li class="list-info-group-item"><span>Quốc gia</span> : <a href=""
                                rel="tag">{{ $movie->country }}</a>
                        </li>
                        <li class="list-info-group-item"><span>Đạo diễn</span> : <a class="director" rel="nofollow"
                                href="https://phimhay.co/dao-dien/cate-shortland"
                                title="Cate Shortland">{{ $movie->director }}</a></li>
                        <li class="list-info-group-item last-item"
                            style="-overflow: hidden;-display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-flex: 1;-webkit-box-orient: vertical;">
                            <span>Diễn viên</span> :
                            <a href="" rel="nofollow" title="{{ $movie->actor }}">{{ $movie->actor }}</a>
                        </li>
                        @if (Session::get('user'))
                            <a id="report" class="halim-switch"><i id="like" style="font-size: 1.5em" class="bi bi-hand-thumbs-up"></i>
                                Like
                            </a>
                        @endIf
                    </ul>
                    <div class="movie-trailer hidden"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div id="halim_trailer"></div>
        <div class="clearfix"></div>
        <div class="section-bar clearfix">
            <h2 class="section-title"><span style="color:#ffed4d">Nội dung phim</span></h2>
        </div>
        <div class="entry-content htmlwrap clearfix">
            <div class="video-item halim-entry-box">
                <article id="post-38424" class="item-content">
                    Phim <a href="https://phimhay.co/goa-phu-den-38424/">{{ $movie->name }}</a> -
                    {{ $movie->publish_year }} - {{ $movie->country }}:
                    <p>{{ $movie->name }}: {{ $movie->description }}</p>
                </article>
            </div>
        </div>
    </div>
</section>

@include('modules.relatedMovie')
