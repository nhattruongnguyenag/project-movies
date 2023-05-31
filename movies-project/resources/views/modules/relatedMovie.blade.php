<section class="related-movies">
    <div id="halim_related_movies-2xx" class="wrap-slider">
        <div class="section-bar clearfix">
            <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
        </div>
        <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film">
            @if (isset($relatedMovies))
                @foreach ($relatedMovies as $movie)
                    <article class="thumb grid-item post-38498">
                        <div class="halim-item">
                            <a class="halim-thumb" href="chitiet.php" title="Đại Thánh Vô Song">
                                <figure><img class="lazy img-responsive"
                                        src="{{ asset(`storage/app/photos/$movie->image`) }}"
                                        alt="{{ $movie->name }}" title="{{ $movie->name }}"></figure>
                                <span class="status">HD</span><span class="episode"><i class="fa fa-play"
                                        aria-hidden="true"></i>{{ $movie->type }}</span>
                                <div class="icon_overlay"></div>
                                <div class="halim-post-title-box">
                                    <div class="halim-post-title ">
                                        <p class="entry-title">{{ $movie->name }}</p>
                                        <p class="original_title">{{ $movie->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
        <script>
            jQuery(document).ready(function($) {
                var owl = $('#halim_related_movies-2');
                owl.owlCarousel({
                    loop: true,
                    margin: 4,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    nav: true,
                    navText: ['<i class="hl-down-open rotate-left"></i>',
                        '<i class="hl-down-open rotate-right"></i>'
                    ],
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        480: {
                            items: 3
                        },
                        600: {
                            items: 4
                        },
                        1000: {
                            items: 4
                        }
                    }
                })
            });
        </script>
    </div>
</section>
