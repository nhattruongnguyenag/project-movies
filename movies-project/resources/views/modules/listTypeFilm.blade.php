<section id="halim-advanced-widget-2">
@foreach ($categories as $category)
    <div class="section-heading">
        <a href="danhmuc.php" title="Phim Lẻ">
            <span class="h-text">{{$category->name}}</span>
        </a>
    </div>
    <div id="halim-advanced-widget-2-ajax-box" class="halim_box">
    @foreach ($category->movies as $movie)
        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
            <div class="halim-item">
                <a class="halim-thumb" href="#">
                    <figure><img class="lazy img-responsive" src="{{$movie->image}}" alt="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO" title="BẠN CÙNG PHÒNG CỦA TÔI LÀ GUMIHO"></figure>
                    <span class="status">TẬP 15</span><span class="episode"><i class="fa fa-play" aria-hidden="true"></i>Vietsub</span>
                    <div class="icon_overlay"></div>
                    <div class="halim-post-title-box">
                        <div class="halim-post-title ">
                            <p class="entry-title">{{$movie->name}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach
</section>
<div class="clearfix"></div>
