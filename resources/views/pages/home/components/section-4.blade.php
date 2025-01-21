<style>
    .bg-page4 {
        background-image: url('{{ asset('images/section-4/bg-4.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    #carousel-section-4 {
        height: 500px;
        /* ตั้งค่าความสูงที่ต้องการ */
        overflow: hidden;
    }

    #carousel-section-4 img {
        object-fit: cover;
        /* ปรับรูปภาพให้ขยายและครอบคลุมพื้นที่ */
        height: 500px;
        /* เต็มพื้นที่แนวตั้ง */
    }

    .bg-carousel-section-4 {
        background: linear-gradient(to top, rgba(5, 143, 0, 0.5), rgba(135, 255, 36, 0.5));
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        padding: 15px;
    }

    .bg-black-section-4{
        background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(41, 41, 41, 0.4));
        padding: 1.5rem 1rem;
        border-radius: 20px;
    }

    .banner-section-4 {
        background-color: white;
        box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        border-radius: 30px;
        font-size: 22px;
        font-weight: bold;
        width: 100%;
        text-decoration: none;
        color: #000;
        position: relative;
        overflow: visible;
        transition: box-shadow 0.3s, transform 0.3s;
    }

    .banner-section-4:hover {
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
        transform: scale(1.02);
        /* ขยายขนาดเล็กน้อยเมื่อ hover */
    }

    .banner-section-4 .bg-inbanner-4 {
        background: linear-gradient(to bottom, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        border-radius: 30px 0 0 30px;
        width: 70px;
        z-index: 1;
        position: relative;
        overflow: visible;
        transition: background 0.3s;
    }

    .banner-section-4:hover .bg-inbanner-4 {
        background: linear-gradient(to bottom, rgba(5, 200, 50, 0.9), rgba(135, 255, 80, 0.9));
        /* เปลี่ยนสีเมื่อ hover */
    }

    .bg-inbanner-4 img {
        position: absolute;
        width: 65px;
        top: -10px;
        left: 0px;
        z-index: 2;
        transition: transform 0.3s, filter 0.3s;
        /* เพิ่มทรานซิชันสำหรับ hover */
    }

    .banner-section-4:hover .bg-inbanner-4 img {
        transform: rotate(10deg) scale(1.1);
        /* หมุนและขยายภาพ */
        filter: brightness(1.2);
        /* ทำให้ภาพสว่างขึ้น */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page4">
    <div class="container d-flex flex-column flex-lg-row align-items-center w-100 gap-3">
        <div class="col-lg-6 col-xl-8 d-flex flex-column">
            <div class="d-flex align-items-center justify-content-center mb-3 fs-1 fw-bold">
                ป้ายประกาศ
            </div>
            <div class="bg-carousel-section-4">
                <!-- ภาพสไลด์ -->
                <div id="carousel-section-4" class="carousel slide" style="border-radius: 20px;"
                    data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-section-4" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-section-4" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-section-4" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/section-4/องค์การบริหารส่วนตำบลแปลงยาว อำเภอแปลงยาว จังหวัดฉะเชิงเทรา.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-3/BG.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-4/bg-4.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 3">
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-section-4"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-section-4"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

        </div>
        <div class="col-12 col-lg-6 col-xl-4 mt-lg-5 pt-lg-4 bg-black-section-4 ">
            <div class="d-flex flex-column justifly-content-center align-items-center gap-4 ">
                <a href="#" class="banner-section-4 d-flex border lh-1 p-0">
                    <div class="bg-inbanner-4">
                        <img src="{{ asset('images/section-4/1.png') }}" alt="icon" style=" width: 55px;">
                    </div>
                    <div class="m-auto py-3 py-sm-3">
                        สาระดีๆจากศาลการปกครอง
                    </div>
                </a>
                <a href="#" class="banner-section-4 d-flex border lh-1 p-0">
                    <div class="bg-inbanner-4">
                        <img src="{{ asset('images/section-4/2.png') }}" alt="icon" style=" width: 50px; ">
                    </div>
                    <div class="m-auto py-3 py-sm-1">
                        สำนักงานคณะกรรมการป้องกัน <br>
                        และปราบปรามการทุจริตแห่งชาติ
                    </div>
                </a>
                <a href="#" class="banner-section-4 d-flex border lh-1 p-0">
                    <div class="bg-inbanner-4">
                        <img src="{{ asset('images/section-4/3.png') }}" alt="icon" style=" width: 65px; top: -7px; left: 0px;">
                    </div>
                    <div class="m-auto py-3">
                        ระบบจัดซื้อจัดจ้างภาครัฐ (EGP)
                    </div>
                </a>
                <a href="#" class="banner-section-4 d-flex border lh-1 p-0">
                    <div class="bg-inbanner-4">
                        <img src="{{ asset('images/section-4/4.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3">
                        E - Social
                    </div>
                </a>
                <a href="#" class="banner-section-4 d-flex border lh-1 p-0">
                    <div class="bg-inbanner-4">
                        <img src="{{ asset('images/section-4/5.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3">
                        One Stop Service
                    </div>
                </a>
            </div>
        </div>
    </div>

</main>
