<form id="search-form-pc" name="halimForm" role="search" action="" method="GET" class="search_wrapper_area">
    <div class="form-group">
        <div class="input-group col-xs-12">
            <input type="text" name="s" class="form-control search_input_area" placeholder="Tìm kiếm..."
                autocomplete="off" required oninput="searchEngine(this)" onfocusout="forcusOut()">
            <i class="animate-spin hl-spin4">
            </i>
        </div>
    </div>
</form>
<ul class="ui-autocomplete ajax-results father_contanier_wrapper_result_search hidden" style="width: 200%;left: -50%;">
    <div class="scrollbar" id="style-1">
        <div class="force-overflow container_search_area">

        </div>
    </div>
</ul>
<script>
    let containerSearch = document.querySelector('.container_search_area');

    async function searchEngine($data) {
        let fatherContainerSearch = document.querySelector('.father_contanier_wrapper_result_search');
        // B1: Gui yeu cau
        const url = '/movie/searchMovies';
        const data = {
            name: $data.value
        };
        const reponse = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify(data)
        });
        //B2: Xu ly ket qua
        const result = await reponse.json();
        containerSearch.innerHTML = '';
        fatherContainerSearch.classList.remove('hidden');
        for (let index = 0; index < result.length; index++) {
            containerSearch.innerHTML += `
                        <div class="movie_movies_item" style="background: black;">
                <div class="row">
                    <a href="">
                        <div class="col-md-3" style="overflow: hidden;">
                            <div class="wraper_img"
                                style="width: 200px;height: 210px;margin-top: -10px;">
                                <div class="item-link image_search_result">
                                    <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                        class="lazy post-thumb"
                                        alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                        title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="col-md-9">
                        <div class="content_wrapper"
                            style="width: 100%;height: 180px;overflow: hidden;">
                            <a href="" class="name_movie_searh_result">
                                <h2
                                    style="text-align: center;color: white;font-family: Georgia, 'Times New Roman', Times, serif;">
                                    ${result[index]['name']}
                                </h2>
                            </a>
                            <p style="text-align: left;">
                                    ${result[index]['description']}
                            </p>
                        </div>
                    </div>
                </div>
            </div>            
                        `;
        }

        if ($data.value.trim() == '') {
            containerSearch.innerHTML = '';
            fatherContainerSearch.classList.add('hidden');
        }
    }

    function forcusOut() {
        let fatherContainerSearch = document.querySelector('.father_contanier_wrapper_result_search');
        let valueArea = document.querySelector('.search_input_area');
        fatherContainerSearch.classList.add('hidden');
        valueArea.value = '';
    }
</script>
