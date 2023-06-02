// Lấy danh sách phim có lượt xem cao nhất trong mọi thời gian.
// const detail = document.querySelector('.detail_product');
const container = document.querySelector(".popular_movie_every_time");
// Goi lan dau
getTopViewEveryTime();

async function getTopViewEveryTime() {
    container.innerHTML = "";
    // Buoc 1: Gui yeu cau
    const url = "/movie/top-view-all";
    const reponse = await fetch(url);
    // Buoc 2: Lay
    const result = await reponse.json();
    for (let index = 0; index < result.length; index++) {
        container.innerHTML += `
         <div class="item post-37176">
                   <a href="#" title="${result[index]["name"]}">
                      <div class="item-link">
                         <img src="http://127.0.0.1:8000/images/${result[index]["image"]}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">${result[index]["name"]}</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">${result[index]["view_count"]} lượt xem</div>
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
    container.innerHTML = "";
    // Buoc 1: Gui yeu cau
    const url = "/movie/top-view-month";
    const reponse = await fetch(url);
    // Buoc 2: Lay
    const result = await reponse.json();
    for (let index = 0; index < result.length; index++) {
        container.innerHTML += `
           <div class="item post-37176">
                     <a href="#" title="${result[index]["name"]}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]["image"]}"class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]["name"]}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]["view_count"]} lượt xem</div>
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
    container.innerHTML = "";
    // Buoc 1: Gui yeu cau
    const url = "/movie/top-view-week";
    const reponse = await fetch(url);
    // Buoc 2: Lay
    const result = await reponse.json();
    for (let index = 0; index < result.length; index++) {
        container.innerHTML += `
           <div class="item post-37176">
                     <a href="#" title="${result[index]["name"]}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]["image"]}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]["name"]}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]["view_count"]} lượt xem</div>
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
    container.innerHTML = "";
    // Buoc 1: Gui yeu cau
    const url = "/movie/top-view-day";
    const reponse = await fetch(url);
    // Buoc 2: Lay
    const result = await reponse.json();
    for (let index = 0; index < result.length; index++) {
        container.innerHTML += `
           <div class="item post-37176">
                     <a href="#" title="${result[index]["name"]}">
                        <div class="item-link">
                           <img src="http://127.0.0.1:8000/images/${result[index]["image"]}" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                           <span class="is_trailer">Trailer</span>
                        </div>
                        <p class="title">${result[index]["name"]}</p>
                     </a>
                     <div class="viewsCount" style="color: #9d9d9d;">${result[index]["view_count"]} lượt xem</div>
                     <div style="float: left;">
                        <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                        <span style="width: 0%"></span>
                        </span>
                     </div>
                  </div>
           `;
    }
}

let containerSearch = document.querySelector(".container_search_area");
async function searchEngine($data) {
    let fatherContainerSearch = document.querySelector(
        ".father_contanier_wrapper_result_search"
    );
    // B1: Gui yeu cau
    const url = "http://127.0.0.1:8000/search/activity";
    const data = {
        name: $data.value,
    };
    const reponse = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "/application/json",
            Accept: "application/json",
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        body: JSON.stringify(data),
    });
    const result = await reponse.json();
    containerSearch.innerHTML = "";
    fatherContainerSearch.classList.remove("hidden");
    for (let index = 0; index < result.length; index++) {
        containerSearch.innerHTML += `
                        <div class="movie_movies_item" style="background: black;">
                <div class="row">
                    <a href="#">
                        <div class="col-md-3" style="overflow: hidden;">
                            <div class="wraper_img"
                                style="width: 200px;height: 210px;margin-top: -10px;">
                                <div class="item-link image_search_result">
                                    <img src="http://127.0.0.1:8000/images/${result[index]["image"]}"
                                        class="lazy post-thumb"
                                     />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-md-9">
                        <div class="content_wrapper">
                            <a href="#" class="name_movie_searh_result">
                                <h2
                                    style="text-align: center;color: white;">
                                    ${result[index]["name"]}
                                </h2>
                            </a>
                            <p style="text-align: left;" class="wrapper_content_area">
                                    ${result[index]["description"]}
                            </p>
                        </div>
                    </div>
                </div>
            </div>            
                        `;
    }

    if ($data.value.trim() == "") {
        containerSearch.innerHTML = "";
        fatherContainerSearch.classList.add("hidden");
    }
}

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 1500);
    }