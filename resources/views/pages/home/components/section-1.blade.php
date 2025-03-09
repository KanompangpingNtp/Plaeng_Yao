<style>
    .bg-page1 {
        background-image: url('{{ asset('images/section-1/bg-2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    .banner-section-1 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        text-decoration: none;
        color: #000000;
        background: linear-gradient(to right, #94dc38, #cff16b, #94dc38);
        box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        overflow: visible;
        transition: all 0.3s ease-in-out;
        /* เพิ่มทรานซิชัน */
    }

    .banner-section-1:hover {
        background: linear-gradient(to right, #cff16b, #94dc38, #cff16b);
        box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.7);
        transform: scale(1.05);
        /* เพิ่มการขยาย */
    }

    .banner-section-1 .icon-attach {
        position: absolute;
        top: -13px;
        left: -15px;
        width: 40px;
        height: auto;
        transition: transform 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับไอคอน */
    }

    .banner-section-1:hover .icon-attach {
        transform: rotate(-10deg) scale(1.1);
        /* เอฟเฟกต์หมุนและขยาย */
    }

    .banner-section-1 .icon {
        width: 50px;
        height: auto;
        margin-right: 15px;
        transition: transform 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับไอคอน */
    }

    .banner-section-1:hover .icon {
        transform: scale(1.1);
        /* ขยายไอคอน */
    }

    .banner-section-1 .text-content {
        font-size: 21px;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับข้อความ */
    }

    .banner-section-1:hover .text-content {
        color: #ffa600;
        /* เปลี่ยนสีข้อความเมื่อ hover */
    }

    .bg-dark-section-1 {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(8, 8, 8, 0.5));
        padding: 1.5rem;
        position: absolute;
        bottom: 0;
        /* จัดตำแหน่งให้ล่างสุด */
        left: 0;
        width: 100%;
    }

    .responsive-image {
        width: 100%;
        max-width: 400px;
        height: auto;
    }

    .margin-control {
        margin-bottom: 13rem;
    }

    @media (min-width: 1199px) {

        /* สำหรับจอ lg หรือใหญ่กว่า */
        .responsive-image {
            max-width: 100%;
            /* ขนาดที่ใหญ่ขึ้น */
        }
    }

    .name-title {
        margin-left: 18rem;
        /* ค่าเริ่มต้นสำหรับหน้าจอใหญ่ */
    }

    .position-title {
        margin-left: 25rem;
        /* ค่าเริ่มต้นสำหรับหน้าจอใหญ่ */
    }

    .contact-info {
        margin-left: 30rem;
        /* ค่าเริ่มต้นสำหรับหน้าจอใหญ่ */
    }

    /* Media Queries สำหรับ Responsive */
    @media (max-width:1399px) {

        .margin-control {
            margin-bottom: 4rem;
        }

    }

    @media (max-width:1199px) {

        /* สำหรับหน้าจอขนาดกลาง (tablet) */
        .name-title,
        .position-title,
        .contact-info {
            margin-left: 0rem;
            /* ลดระยะขอบ */
        }

        .margin-control {
            margin-bottom: 12rem;
        }
    }

    @media (max-width: 768px) {

        /* สำหรับหน้าจอขนาดเล็ก (mobile) */
        .name-title,
        .position-title,
        .contact-info {
            margin-left: 0rem;
            /* ลดระยะขอบให้เหลือน้อยที่สุด */
            text-align: center;
            /* จัดข้อความให้อยู่กลาง */
        }
    }
</style>
<main class="d-flex bg-page1">
    <div class="container d-flex flex-column align-items-center ">
        <div class="d-flex flex-column flex-xl-row gap-3 ">
            <div class="col-xl-6 d-flex justify-content-center">
                {{-- <img src="{{ asset('images/section-1/persernals.png') }}" alt="persernals" class="responsive-image"> --}}
                <img src="{{ asset('images/section-1/nayok.gif') }}" alt="persernals" class="responsive-image">
            </div>

            <div class="col-xl-6 d-flex align-items-end margin-control">
                <div class="row p-1 ">
                    <a href="https://plaengyao.go.th/PerformanceResults/show/section/topic/54" class="col-xl-6 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/businessman.png') }}" alt="icon">
                        <div class="text-content lh-1">
                            สารจากนายก
                        </div>
                    </a>
                    <a href="{{route('ReceiveComplaintsForm')}}" class="col-xl-5 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/4.png') }}" alt="icon">
                        <div class="text-content lh-1">
                            รับแจ้งเรื่องราว <br>
                            ร้องทุกข์
                        </div>
                    </a>
                    <a href="{{route('SatisfactionForm')}}" class="col-xl-6 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/5.png') }}" alt="icon">
                        <div class="text-content lh-1">
                            รับเรื่องร้องเรียนทุจริต <br>
                            ประพฤติมิชอบ
                        </div>
                    </a>
                    <a href="https://plaengyao.go.th/PerformanceResults/show/section/topic/details/84" class="col-xl-5 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/goal.png') }}" alt="icon">
                        <div class="text-content lh-1">
                            เจตจำนงสุจริต <br>
                            ของผู้บริหาร
                        </div>
                    </a>
                    <a href="{{route('itaPage')}}" class="col-xl-6 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/ita.png') }}" alt="icon">
                        <div class="text-content lh-1">
                            การประเมินคุณธรรม <br>
                            และ ความโปร่งใส
                        </div>
                    </a>
                    <a href="https://lpa.dla.go.th/" class="col-xl-5 banner-section-1 d-flex mx-1 my-2">
                        <img class="icon" src="{{ asset('images/section-1/การประเมินประสิทธิภาพขององค์กรปกครอง ส่วนท้องถิ่น.png') }}" alt="icon">
                        <div class="text-content lh-1" style="font-size:16px;">
                            การประเมินประสิทธิภาพขององค์กรปกครอง <br class="d-none d-sm-block">
                            ส่วนท้องถิ่น
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-dark-section-1 d-flex align-items-start justify-content-center lh-1 text-light fw-bold">
        <div class="container d-flex flex-column align-items-center justify-content-center gap-2">
            <div class="fs-1 name-title">
                นาย ธานินทร์ พุทธรัตน์
            </div>
            <div class="fs-4 position-title">
                นายกองค์การบริหารส่วนตำบลแปลงยาว
            </div>
            <div class="d-flex fs-4 gap-2 contact-info">
                <img src="{{ asset('images/section-1/telephone-call.png') }}" alt="phone" width="30"
                    height="30">
                <div>
                    สายด่วนนายก : 063-265-9742
                </div>
            </div>
        </div>
    </div>


</main>
