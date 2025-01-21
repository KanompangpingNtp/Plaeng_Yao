<style>
    .bg-page2 {
        background-image: url('{{ asset('images/section-2/bg-2.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    .banner-section-2 {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        text-decoration: none;

        color: #ffffff;
        background: linear-gradient(to right, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8), rgba(5, 143, 0, 0.8));
        box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        overflow: visible;
        transition: all 0.3s ease-in-out;
        /* เพิ่มทรานซิชัน */
    }

    .banner-section-2:hover {
        background: linear-gradient(to right, rgba(135, 255, 36, 0.8), rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        box-shadow: 0 0 15px 5px rgba(255, 255, 255, 0.7);
        transform: scale(1.05);
        /* เพิ่มการขยาย */
    }

    .banner-section-2 .icon-attach {
        position: absolute;
        top: -13px;
        left: -15px;
        width: 40px;
        height: auto;
        transition: transform 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับไอคอน */
    }

    .banner-section-2:hover .icon-attach {
        transform: rotate(-10deg) scale(1.1);
        /* เอฟเฟกต์หมุนและขยาย */
    }

    .banner-section-2 .icon {
        width: 50px;
        height: auto;
        margin-right: 15px;
        transition: transform 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับไอคอน */
    }

    .banner-section-2:hover .icon {
        transform: scale(1.1);
        /* ขยายไอคอน */
    }

    .banner-section-2 .text-content {
        font-size: 30px;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
        /* เพิ่มทรานซิชันสำหรับข้อความ */
    }

    .banner-section-2:hover .text-content {
        color: #ffbb00;
        /* เปลี่ยนสีข้อความเมื่อ hover */
    }

    .bg-dark-section-2 {
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
        max-width: 250px;
        height: auto;
    }

    @media (min-width: 992px) {

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
    @media (max-width: 992px) {

        /* สำหรับหน้าจอขนาดกลาง (tablet) */
        .name-title,
        .position-title,
        .contact-info {
            margin-left: 10rem;
            /* ลดระยะขอบ */
        }
    }

    @media (max-width: 768px) {

        /* สำหรับหน้าจอขนาดเล็ก (mobile) */
        .name-title,
        .position-title,
        .contact-info {
            margin-left: 2rem;
            /* ลดระยะขอบให้เหลือน้อยที่สุด */
            text-align: center;
            /* จัดข้อความให้อยู่กลาง */
        }
    }

    /* Margin default for each <a> */
.margin-a1 {
    margin-left: 5rem;
}

.margin-a2 {
    margin-left: 10rem;
}

.margin-a3 {
    margin-left: 15rem;
}

.margin-a4 {
    margin-left: 10rem;
}

.margin-a5 {
    margin-left: 5rem;
}

/* Responsive adjustments */
@media (max-width: 992px) { /* For tablet screens */
    .margin-a1,
    .margin-a2,
    .margin-a3,
    .margin-a4,
    .margin-a5 {
        margin-left: 3rem; /* Reduce margin for smaller screens */
    }
}

@media (max-width: 768px) { /* For mobile screens */
    .margin-a1,
    .margin-a2,
    .margin-a3,
    .margin-a4,
    .margin-a5 {
        margin-left: 0; /* Align to the left for compact view */
        text-align: center; /* Center-align content */
    }
}

</style>
<main class="d-flex bg-page2">
    <div class="container d-flex flex-column align-items-center ">
        <div class="d-flex flex-column flex-lg-row gap-3 ">
            <div class="col-12 col-lg-6 d-flex">
                <img src="{{ asset('images/section-2/persernals.png') }}" alt="persernals" class="responsive-image">
            </div>

            <div class="cool-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start justify-content-center gap-2 gap-lg-5">
                <a href="#" class="banner-section-2 d-flex margin-a1">
                    <img class="icon-attach" src="{{ asset('images/section-2/attach.png') }}" alt="attach">
                    <img class="icon" src="{{ asset('images/section-2/businessman.png') }}" alt="icon">
                    <div class="text-content lh-1">
                        สารจากนายก
                    </div>
                </a>
                <a href="#" class="banner-section-2 d-flex margin-a2">
                    <img class="icon-attach" src="{{ asset('images/section-2/attach.png') }}" alt="attach">
                    <img class="icon" src="{{ asset('images/section-2/goal.png') }}" alt="icon">
                    <div class="text-content lh-1">
                        เจตจำนงสุจริต <br>
                        ของผู้บริหาร
                    </div>
                </a>
                <a href="#" class="banner-section-2 d-flex margin-a3">
                    <img class="icon-attach" src="{{ asset('images/section-2/attach.png') }}" alt="attach">
                    <img class="icon" src="{{ asset('images/section-2/information.png') }}" alt="icon">
                    <div class="text-content lh-1">
                        รับแจ้งเรื่องราว <br>
                        ร้องทุกข์
                    </div>
                </a>
                <a href="#" class="banner-section-2 d-flex margin-a4">
                    <img class="icon-attach" src="{{ asset('images/section-2/attach.png') }}" alt="attach">
                    <img class="icon" src="{{ asset('images/section-2/email-marketing.png') }}" alt="icon">
                    <div class="text-content lh-1">
                        รับเรื่องร้องเรียน <br>
                        ทุจริตประพฤติมิชอบ
                    </div>
                </a>
                <a href="#" class="banner-section-2 d-flex margin-a5">
                    <img class="icon-attach" src="{{ asset('images/section-2/attach.png') }}" alt="attach">
                    <img class="icon" src="{{ asset('images/section-2/ita.png') }}" alt="icon">
                    <div class="text-content lh-1">
                        การประเมินคุณธรรม <br>
                        และ ความโปร่งใส
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    <div class="bg-dark-section-2 d-flex align-items-start justify-content-center lh-1 text-light fw-bold">
        <div class="container d-flex flex-column align-items-center justify-content-center gap-2">
            <div class="fs-1 name-title">
                นาย ธานินทร์ พุทธรัตน์
            </div>
            <div class="fs-4 position-title">
                นายกองค์การบริหารส่วนตำบลแปลงยาว
            </div>
            <div class="d-flex fs-4 gap-2 contact-info">
                <img src="{{ asset('images/section-2/telephone-call.png') }}" alt="phone" width="30"
                    height="30">
                <div>
                    สายด่วนนายก : 000-000-0000
                </div>
            </div>
        </div>
    </div>


</main>
