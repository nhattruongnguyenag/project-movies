<script type='text/javascript' src='js/owl.carousel.min.js?ver=5.7.2' id='carousel-js'></script>
<script type='text/javascript' src='{{ URL::asset('js/bootstrap.min.js') }}' id='bootstrap-js'></script>
<script type='text/javascript' src='{{ URL::asset('js/halimtheme-core.min.js') }}' id='halim-init-js'></script>
<script>
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
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 1500);
    }
</script>
<script>
    const likeIcon = document.querySelector('#like');
    const report = document.querySelector('#report');
    const url = 'http://127.0.0.1:8000/api/like';
    let data = {'user_id' : "{{ Session::get('user')->id }}" , 'movie_id' : "{{ $movie->id }}"};
    report.addEventListener("click", () => {
        if (likeIcon.classList.contains("bi-hand-thumbs-up")) {
            likeIcon.classList.replace("bi-hand-thumbs-up", "bi-hand-thumbs-up-fill");
            like(url, data);
        } else {
            likeIcon.classList.replace("bi-hand-thumbs-up-fill", "bi-hand-thumbs-up");
            like(url, data);
        }
    });

    async function like(url , data) {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const i = await response;
        console.log(i);
    }

</script>
