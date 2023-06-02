<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
        <div class="section-bar clearfix">
            <div class="section-title">
                <span>Top Views</span>
                <ul class="halim-popular-tab" role="tablist">
                    <li role="presentation">
                        <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="today"
                            onclick='getTopViewEveryDay()'>Day</a>
                    </li>
                    <li role="presentation">
                        <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="week"
                            onclick='getTopViewEveryWeek()'>Week</a>
                    </li>
                    <li role="presentation">
                        <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="month"
                            onclick='getTopViewEveryMonth()'>Month</a>
                    </li>
                    <li role="presentation" class="active">
                        <a role="tab" data-toggle="tab" data-showpost="10" data-type="all"
                            onclick='getTopViewEveryTime()'>All</a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="tab-content">
            <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                <div class="halim-ajax-popular-post-loading_no hidden"></div>
                <div id="halim-ajax-popular-post-no" class="popular-post popular_movie_every_time">
                    {{-- Content --}}
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
</aside>
