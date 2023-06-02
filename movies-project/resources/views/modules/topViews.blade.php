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

<script>
    // Lấy danh sách phim có lượt xem cao nhất trong mọi thời gian. 
    // const detail = document.querySelector('.detail_product');
    const container = document.querySelector('.popular_movie_every_time');
    // Goi lan dau
    getTopViewEveryTime();


    async function getTopViewEveryTime() {
        container.innerHTML = '';
        // Buoc 1: Gui yeu cau
        const url = '/movie/top-view-all';
        const reponse = await fetch(url);
        // Buoc 2: Lay
        const result = await reponse.json();
        for (let index = 0; index < result.length; index++) {
            container.innerHTML +=
                `
         <div class="item post-37176">
                   <a href="#" title="${result[index]['name']}">
                      <div class="item-link">
                         <img src="http://127.0.0.1:8000/images/${result[index]['image']}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">${result[index]['name']}</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">${result[index]['view_count']} lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
         `;
        }
    }


    async function getTopViewEveryMonth() {
        container.innerHTML = '';
        // Buoc 1: Gui yeu cau
        const url = '/movie/top-view-month';
        const reponse = await fetch(url);
        // Buoc 2: Lay
        const result = await reponse.json();
        for (let index = 0; index < result.length; index++) {
            container.innerHTML +=
                `
           <div class="item post-37176">
                     <a href="#" title="${result[index]['name']}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]['image']}"class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]['name']}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]['view_count']} lượt xem</div>
                     <div style="float: left;">
                        <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                        <span style="width: 0%"></span>
                        </span>
                     </div>
                  </div>
           `;
        }
    }


    async function getTopViewEveryWeek() {
        container.innerHTML = '';
        // Buoc 1: Gui yeu cau
        const url = '/movie/top-view-week';
        const reponse = await fetch(url);
        // Buoc 2: Lay
        const result = await reponse.json();
        for (let index = 0; index < result.length; index++) {
            container.innerHTML +=
                `
           <div class="item post-37176">
                     <a href="#" title="${result[index]['name']}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]['image']}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]['name']}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]['view_count']} lượt xem</div>
                     <div style="float: left;">
                        <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                        <span style="width: 0%"></span>
                        </span>
                     </div>
                  </div>
           `;
        }
    }

    async function getTopViewEveryDay() {
        container.innerHTML = '';
        // Buoc 1: Gui yeu cau
        const url = '/movie/top-view-day';
        const reponse = await fetch(url);
        // Buoc 2: Lay
        const result = await reponse.json();
        for (let index = 0; index < result.length; index++) {
            container.innerHTML +=
                `
           <div class="item post-37176">
                     <a href="#" title="${result[index]['name']}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]['image']}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]['name']}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]['view_count']} lượt xem</div>
                     <div style="float: left;">
                        <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                        <span style="width: 0%"></span>
                        </span>
                     </div>
                  </div>
           `;
        }
    }
</script>
