<style>
    .bg-page3 {
        background-image: url('{{ asset('images/section-3/bg-4.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    #carousel-section-3 {
        height: 500px;
        /* ตั้งค่าความสูงที่ต้องการ */
        overflow: visible;
    }

    #carousel-section-3 img {
        object-fit: cover;
        /* ปรับรูปภาพให้ขยายและครอบคลุมพื้นที่ */
        height: 500px;
        /* เต็มพื้นที่แนวตั้ง */
    }

    .bg-carousel-section-3 {
        background: linear-gradient(to top, #558a0b, #a3cb49);
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
        padding: 15px;
    }

    .bg-black-section-3{
        background: linear-gradient(to top, rgba(0, 0, 0, 0.4), rgba(41, 41, 41, 0.4));
        padding: 1.5rem 1rem;
        border-radius: 20px;
    }

    .banner-section-3 {
    background-color: white;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    border-radius: 30px;
    font-size: 20px;
    font-weight: bold;
    width: 100%;
    text-decoration: none;
    color: #000;
    position: relative;
    overflow: visible;
    transition: box-shadow 0.3s, transform 0.3s;
}



    .banner-section-3:hover {
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.7);
        transform: scale(1.02);
        /* ขยายขนาดเล็กน้อยเมื่อ hover */
    }

    .banner-section-3 .bg-inbanner-3 {
        background: linear-gradient(to bottom, #558a0b, #a3cb49);
        border-radius: 30px 0 0 30px;
        width: 70px;
        z-index: 1;
        position: relative;
        overflow: visible;
        transition: background 0.3s;
    }

    .banner-section-3:hover .bg-inbanner-3 {
        background: linear-gradient(to top, #558a0b, #a3cb49);
        /* เปลี่ยนสีเมื่อ hover */
    }

    .bg-inbanner-3 img {
        position: absolute;
        width: 65px;
        top: -10px;
        left: 0px;
        z-index: 2;
        transition: transform 0.3s, filter 0.3s;
        /* เพิ่มทรานซิชันสำหรับ hover */
    }

    .banner-section-3:hover .bg-inbanner-3 img {
        transform: rotate(10deg) scale(1.1);
        /* หมุนและขยายภาพ */
        filter: brightness(1.2);
        /* ทำให้ภาพสว่างขึ้น */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page3">
    <div class="container d-flex flex-column flex-xl-row align-items-center w-100 gap-3">
        <div class=" col-xl-8 d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-start justify-content-center mb-3  lh-1"
            style="text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.8);">
            <div class=" fs-1 fw-bold text-dark ">
                ป้ายประกาศ <img src="{{ asset('images/section-3/iconx.png') }}" alt="icon">
            </div>
            <div class="fs-4 text-dark">
                องค์การบริหารส่วนตำบลแปลงยาว
            </div>
        </div>
            <div class="bg-carousel-section-3">
                <!-- ภาพสไลด์ -->
                {{-- <div id="carousel-section-3" class="carousel slide" style="border-radius: 20px;"
                    data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-section-3" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carousel-section-3" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carousel-section-3" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/section-3/องค์การบริหารส่วนตำบลแปลงยาว อำเภอแปลงยาว จังหวัดฉะเชิงเทรา.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-3/BG.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/section-3/bg-4.png') }}" class="d-block w-100 img-fluid"
                                alt="Slide 3">
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-section-3"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-section-3"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> --}}
                <div id="carousel-section-3" class="carousel slide" style="border-radius: 20px;" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        @foreach ($noticeBoard as $index => $notice)
                            <button type="button" data-bs-target="#carousel-section-3" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>

                    <!-- Images -->
                    <div class="carousel-inner rounded">
                        @foreach ($noticeBoard as $index => $notice)
                            @foreach ($notice->photos as $photo)
                                <div class="carousel-item {{ $loop->first && $index == 0 ? 'active' : '' }}">
                                    <img src="{{ asset('storage/' . $photo->post_photo_file) }}" class="d-block w-100 img-fluid" alt="{{ $notice->topic_name }}">
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-section-3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-section-3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>

        </div>
        <div class="col-12 col-xl-4 mt-xl-5 pt-lg-4 bg-black-section-3 ">
            <div class="d-flex flex-column justifly-content-center align-items-center gap-4 ">
                <a href="https://www.admincourt.go.th/admincourt/site/09illustration.html" class="banner-section-3 d-flex lh-1 p-0" target="_blank">
                    <div class="bg-inbanner-3">
                        <img src="{{ asset('images/section-3/1.png') }}" alt="icon" style=" width: 55px;">
                    </div>
                    <div class="m-auto py-3 py-sm-3">
                        สาระดีๆจากศาลการปกครอง
                    </div>
                </a>
                <a href="https://www.nacc.go.th/NACCPPWFC?" class="banner-section-3 d-flex lh-1 p-0" target="_blank">
                    <div class="bg-inbanner-3">
                        <img src="{{ asset('images/section-3/2.png') }}" alt="icon" style=" width: 50px; ">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        สำนักงานคณะกรรมการป้องกัน <br>
                        และปราบปรามการทุจริตแห่งชาติ
                    </div>
                </a>
                <a href="http://www.gprocurement.go.th/new_index.html" class="banner-section-3 d-flex lh-1 p-0" target="_blank">
                    <div class="bg-inbanner-3">
                        <img src="{{ asset('images/section-3/3.png') }}" alt="icon" style=" width: 65px; top: -7px; left: 0px;">
                    </div>
                    <div class="m-auto py-3">
                        ระบบจัดซื้อจัดจ้างภาครัฐ (EGP)
                    </div>
                </a>
                <a href="#" class="banner-section-3 d-flex lh-1 p-0">
                    <div class="bg-inbanner-3">
                        <img src="{{ asset('images/section-3/4.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3">
                        E - Social
                    </div>
                </a>
                <a href="https://www.dla.go.th/oss.htm" class="banner-section-3 d-flex lh-1 p-0" target="_blank">
                    <div class="bg-inbanner-3">
                        <img src="{{ asset('images/section-3/6.png') }}" alt="icon">
                    </div>
                    <div class="m-auto py-3">
                        One Stop Service
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-3 mt-sm-5">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/กระดานกระทู้.png') }}" alt="icon" style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 ">
                        กระดานกระทู้
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/เบี้ยยังชีพผู้สูงอายุ.png') }}" alt="icon" style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 ">
                        เบี้ยยังชีพผู้สูงอายุ
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/เบี้ยยังชีพคนพิการ.png') }}" alt="icon" style="width: 60px;">
                    </div>
                    <div class="m-auto py-3">
                        เบี้ยยังชีพคนพิการ
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/แผนการใช้จ่ายงบประมาณประจำปี.png') }}" alt="icon" style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        แผนการใช้จ่ายงบ <br class="d-none d-sm-block">
                        ประมาณประจำปี
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/คู่มือการปฎิบัติงาน.png') }}" alt="icon" style="width: 60px;">
                    </div>
                    <div class="m-auto py-3 ">
                        คู่มือการปฎิบัติงาน
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-3/การให้บริการ.png') }}" alt="icon" style="width: 60px;">
                    </div>
                    <div class="m-auto py-3 ">
                        การให้บริการ
                    </div>
                </a>
            </div>
        </div>
    </div>

</main>
