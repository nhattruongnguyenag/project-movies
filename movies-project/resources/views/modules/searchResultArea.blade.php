<section>
    <div class="section-bar clearfix">
        <h1 class="section-title"><span>Phim 2020</span></h1>
    </div>
    <div class="halim_box">
        @if (isset($value))
            @foreach ($value as $item)
                <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                    <div class="halim-item">
                        <a class="halim-thumb" title="VŨNG LẦY PHẦN 1" href="http://127.0.0.1:8000/detail?id={{$item->id}}">
                            <figure><img class="lazy img-responsive"
                                    src="{{URL::asset('images/'.$item->image)}}"
                                    alt="VŨNG LẦY PHẦN 1" title="VŨNG LẦY PHẦN 1"></figure>
                            <div class="icon_overlay"></div>
                            <span class="status">HD</span><span class="episode"><i class="bi bi-database-fill"></i>{{$item->type}}</span>
                            <div class="halim-post-title-box">
                                <div class="halim-post-title ">
                                    <p class="entry-title">{{$item->name}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </article>
            @endforeach
        @endif
    </div>
</section>
