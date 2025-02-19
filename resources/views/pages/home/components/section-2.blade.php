<style>
    .bg-page2 {
        background-image: url('{{ asset('images/section-2/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    #carousel-sectioon-2 {
        height: 500px;
        /* ตั้งค่าความสูงที่ต้องการ */
        overflow: hidden;
    }

    #carousel-sectioon-2 img {
        object-fit: cover;
        /* ปรับรูปภาพให้ขยายและครอบคลุมพื้นที่ */
        height: 500px;
        /* เต็มพื้นที่แนวตั้ง */
    }

    .bg-carousel-sectioon-2 {
        background: linear-gradient(to top, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        padding: 15px;
    }


    .banner-section-2 {
        background-color: white;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        border-radius: 30px;
        font-size: 22px;
        font-weight: bold;
        text-decoration: none;
        color: #000;
        position: relative;
        overflow: visible;
        transition: box-shadow 0.3s, transform 0.3s;
    }

    .banner-section-2:hover {
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
        transform: scale(1.02);
        /* ขยายขนาดเล็กน้อยเมื่อ hover */
    }

    .banner-section-2 .bg-inbanner {
        background: linear-gradient(to bottom, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        border-radius: 30px 0 0 30px;
        width: 70px;
        z-index: 1;
        position: relative;
        overflow: visible;
        transition: background 0.3s;
    }

    .banner-section-2:hover .bg-inbanner {
        background: linear-gradient(to bottom, rgba(5, 200, 50, 0.9), rgba(135, 255, 80, 0.9));
        /* เปลี่ยนสีเมื่อ hover */
    }

    .bg-inbanner img {
        position: absolute;
        width: 75px;
        top: -16px;
        left: -8px;
        z-index: 2;
        transition: transform 0.3s, filter 0.3s;
        /* เพิ่มทรานซิชันสำหรับ hover */
    }

    .banner-section-2:hover .bg-inbanner img {
        transform: rotate(10deg) scale(1.1);
        /* หมุนและขยายภาพ */
        filter: brightness(1.2);
        /* ทำให้ภาพสว่างขึ้น */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page2">
    <div class="container d-flex flex-column flex-lg-row align-items-center w-100 gap-2">
        <div class="col-lg-6 col-xl-8 d-flex flex-column">
            <div class="d-flex align-items-center justify-content-center mb-3 gap-2 fs-1 fw-bold">
                รางวัลแห่งความภาคภูมิใจ <img src="{{ asset('images/section-2/trophy.png') }}" alt="icon" width="50"
                    height="50">
            </div>
            <div class="bg-carousel-sectioon-2">
                <!-- ภาพสไลด์ -->
                <div id="carousel-sectioon-2" class="carousel slide" style="border-radius: 20px;"
                    data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-sectioon-2" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-sectioon-2" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-sectioon-2" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/section-2/16082567.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-2/BG.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-2/16082567.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 3">
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-sectioon-3"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-sectioon-3"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

        </div>
        <div class="col-lg-6  col-xl-4 d-flex justify-content-center mt-lg-5 pt-lg-4">
            <img src="{{ asset('images/section-2/126805.png') }}" alt="img-right"
                style="filter: drop-shadow(2px 2px 10px rgba(0, 0, 0, 0.5));">
        </div>
    </div>
    <div class="container mt-3 mt-sm-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 justify-content-center">
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-2/knowledge.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        การจัดการองค์ความรู้ <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/public-service.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        คู่มือบริการประชาชน <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/facebook.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        Facebook <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/documentation.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        ระบบสารบรรณ <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/resources.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        ระบบสารสนเทศ <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/accounting.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        ระบบบันทึกบัญชี <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#" class="banner-section-2 d-flex border lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/mail.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        เช็ค E - mail <br class="d-none d-sm-block">
                        อบต.แปลงยาว
                    </div>
                </a>
            </div>
        </div>
    </div>

</main>
