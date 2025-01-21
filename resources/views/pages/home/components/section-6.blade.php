<style>
    .bg-page6 {
        background-image: url('{{ asset('images/section-6/bg-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }



</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page6">
    <div class="container d-flex flex-column flex-lg-row align-items-center w-100 gap-3">
        <div class="col-lg-6 col-xl-8 d-flex flex-column">
            <div class="d-flex align-items-center justify-content-start mb-3 fs-1 fw-bold"
                style="text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.8);">
                วิดีทัศน์แนะนำ
            </div>
            <div class="bg-video-sectioon-5">
                <video src="{{ asset('images/section-5/video.mp4') }}" autoplay loop muted></video>
            </div>

            <div class="d-flex align-items-center justify-content-end mt-3 fs-3 fw-bold ">
                <a href="#" class="bg-link-button px-4 py-1">
                    วิดีทัศน์เพิ่มเติม
                </a>
            </div>
        </div>
        <div
            class="col-12 col-lg-6 col-xl-4 d-flex flex-column justify-content-center align-items-center gap-3 gap-lg-5">
            <div class="w-100 px-1 px-lg-4">
                <a href="#" class="bg-e-service d-flex flex-column justify-content-between position-relative"
                    style="filter: drop-shadow(2px 2px 10px rgba(255, 255, 255, 0.5));">
                    <img src="{{ asset('images/section-5/star.png') }}" alt="star" class="star-icon">
                    <div class="fs-4 lh-1 text-center text-light fw-bold">
                        บริการยื่นคำร้องออนไลน์ สะดวก รวดเร็ว <br>
                        ครบทุกงานบริการประชาชน <br>
                        สะดวกรวดเร็วตลอด 24 ชม.
                    </div>
                    <div class="d-flex align-items-center justify-content-center fs-1 fw-bold gap-2 text-dark">
                        <img src="{{ asset('images/section-5/button.png') }}" alt="icon" width="50"
                            height="50">
                        E - Service
                    </div>
                </a>
                <div class="bg-brown"></div>
            </div>
            <div class="w-100 px-1 px-lg-4">
                <a href="#" class="bg-e-book d-flex flex-column justify-content-between position-relative"
                    style="filter: drop-shadow(2px 2px 10px rgba(255, 255, 255, 0.5));">
                    <div class="d-flex align-items-center justify-content-start fs-1 fw-bold text-light lh-1">
                        E - LIBRARY
                    </div>
                    <img src="{{ asset('images/section-5/star.png') }}" alt="star" class="star-icon">
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <img src="{{ asset('images/section-5/ebook-1.png') }}" alt="book1" class="ebook-section-5">
                        <img src="{{ asset('images/section-5/ebook-2.png') }}" alt="book2" class="ebook-section-5">
                        <img src="{{ asset('images/section-5/ebook-3.png') }}" alt="book3" class="ebook-section-5">
                    </div>
                </a>
                <div class="bg-brown"></div>
                <div class="d-flex align-items-center justify-content-end mt-3 fs-3 fw-bold ">
                    <a href="#" class="bg-link-button px-4 py-1">
                        อ่านเพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>
