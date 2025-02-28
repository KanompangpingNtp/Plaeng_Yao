<style>
    .bg-page4 {
        background-image: url('{{ asset('images/section-4/bg-5.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }



    .bg-video-sectioon-4 {
        background: linear-gradient(to top, rgba(5, 143, 0, 0.5), rgba(135, 255, 36, 0.5));
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        padding: 15px;
        width: 100%;
        height: 500px;
        overflow: hidden;
    }

    .bg-video-sectioon-4 video {
        width: 100%;
        height: 470px;
        object-fit: cover;
        border-radius: 20px;
    }

    .bg-link-button {
        background: linear-gradient(to left, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        text-decoration: none;
        color: #000;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .bg-link-button:hover {
        background: linear-gradient(to left, rgba(0, 100, 0, 0.8), rgba(255, 255, 0, 0.8));
        /* เปลี่ยนสีเมื่อ hover */
        box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.7);
        /* ทำให้เงาลึกขึ้น */
        transform: scale(1.05);
        /* ขยายขนาดเล็กน้อย */
    }

    .bg-e-service {
        background-image: url('{{ asset('images/section-4/button-eservice.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 1rem 1rem 0.1rem 1rem;
        border-radius: 20px;
        cursor: pointer;
        text-decoration: none;
        position: relative;
        overflow: visible;
        transition: all 0.3s ease;
    }

    .bg-e-service:hover {
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงาเมื่อ hover */
        transform: scale(1.03);
        /* ขยายขนาดเล็กน้อย */
    }

    .bg-e-service img {
        transition: all 0.3s ease;
    }

    .bg-e-service:hover img {
        transform: rotate(10deg) scale(1.2);
    }

    .bg-brown {
        background: linear-gradient(to left, rgb(71, 58, 0), rgb(71, 58, 0));
        height: 10px;
        width: 100%;
        border-radius: 20px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.3);
    }

    .star-icon {
        position: absolute;
        top: -20px;
        /* เลื่อนขึ้นให้อยู่เหนือขอบ */
        left: -20px;
        /* เลื่อนไปด้านซ้ายให้ออกมาครึ่งหนึ่ง */
        width: 50px;
        height: 50px;
        /* ขนาดของรูป */
        z-index: 1;
        /* ให้แสดงอยู่ด้านหน้า */
    }

    .bg-e-book {
        background-image: url('{{ asset('images/section-4/bg-ebook.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 1rem 1rem 1rem 1rem;
        border-radius: 20px;
        cursor: pointer;
        text-decoration: none;
        position: relative;
        overflow: visible;
        transition: all 0.3s ease;
    }

    .ebook-section-4 {
        width: 100%;
        height: 150px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .ebook-section-4:hover {
        transform: rotate(5deg) scale(1.01);
        /* ขยายขนาดเมื่อ hover */
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        /* เพิ่มเงา */
        cursor: pointer;
        /* เปลี่ยนเป็นรูปมือ */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page4">
    <div class="container d-flex flex-column flex-lg-row align-items-center w-100 gap-3">
        <div class="col-lg-6 col-xl-8 d-flex flex-column">
            <div class="d-flex align-items-center justify-content-start mb-3 fs-1 fw-bold"
                style="text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.8);">
                วิดีทัศน์แนะนำ
            </div>
            <div class="bg-video-sectioon-4">
                {{-- <video src="{{ asset('images/section-4/video.mp4') }}" autoplay loop muted></video> --}}
                <iframe width="100%" height="470px" src="https://www.youtube.com/embed/QvZVOhDrBPI?autoplay=1&mute=1" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                    <img src="{{ asset('images/section-4/star.png') }}" alt="star" class="star-icon">
                    <div class="fs-4 lh-1 text-center text-light fw-bold">
                        บริการยื่นคำร้องออนไลน์ สะดวก รวดเร็ว <br>
                        ครบทุกงานบริการประชาชน <br>
                        สะดวกรวดเร็วตลอด 24 ชม.
                    </div>
                    <div class="d-flex align-items-center justify-content-center fs-1 fw-bold gap-2 text-dark">
                        <img src="{{ asset('images/section-4/button.png') }}" alt="icon" width="50"
                            height="50">
                        E - Service
                    </div>
                </a>
                <div class="bg-brown"></div>
            </div>
            <div class=" px-1 px-lg-4">
                <a href="#" class="bg-e-book d-flex flex-column justify-content-between position-relative"
                    style="filter: drop-shadow(2px 2px 10px rgba(255, 255, 255, 0.5));">
                    <div class="d-flex align-items-center justify-content-start fs-1 fw-bold text-light lh-1">
                        E - LIBRARY
                    </div>
                    <img src="{{ asset('images/section-4/star.png') }}" alt="star" class="star-icon">
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <img src="{{ asset('images/section-4/ebook-1.png') }}" alt="book1" class="ebook-section-4">
                        <img src="{{ asset('images/section-4/ebook-2.png') }}" alt="book2" class="ebook-section-4">
                        <img src="{{ asset('images/section-4/ebook-3.png') }}" alt="book3" class="ebook-section-4">
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
