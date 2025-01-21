<style>
    .bg-page3 {
        background-image: url('{{ asset('images/section-3/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    #carousel-sectioon-3 {
        height: 500px;
        /* ตั้งค่าความสูงที่ต้องการ */
        overflow: hidden;
    }

    #carousel-sectioon-3 img {
        object-fit: cover;
        /* ปรับรูปภาพให้ขยายและครอบคลุมพื้นที่ */
        height: 100%;
        /* เต็มพื้นที่แนวตั้ง */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page3">
    <div class="container d-flex align-items-center w-100 gap-2">
        <div class="col-8 ">
            <!-- ภาพสไลด์ -->
            <div id="carousel-sectioon-3" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Images -->
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/section-3/16082567.png') }}" class="d-block w-100 img-fluid"
                            alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/section-3/BG.png') }}" class="d-block w-100 img-fluid"
                            alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/section-3/16082567.png') }}" class="d-block w-100 img-fluid"
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
        <div class="col-4 border">
            <img src="{{ asset('images/section-3/126805.png') }}" alt="img-right">
        </div>
    </div>
</main>
