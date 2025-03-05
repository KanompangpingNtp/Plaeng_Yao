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
        background: linear-gradient(to top, #558a0b, #a3cb49);
        box-shadow: 3px 3px 10px rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        padding: 15px;
        width: 100%;
        overflow: hidden;
    }

    .bg-video-sectioon-4 iframe {
        width: 100%;
        height: 470px;
        object-fit: cover;
        border-radius: 20px;
    }

    @media (max-width:991px) {
        .bg-video-sectioon-4 iframe {
        width: 650px;
        height: 470px;
        object-fit: cover;
        border-radius: 20px;
    }
}
    @media (max-width:750px) {
        .bg-video-sectioon-4 iframe {
        width: 400px;
        height: 350px;
        object-fit: cover;
        border-radius: 20px;
    }
}
    @media (max-width:456px) {
        .bg-video-sectioon-4 iframe {
        width: 300px;
        height: 250px;
        object-fit: cover;
        border-radius: 20px;
    }
    }

    .bg-link-buttons {
        background: linear-gradient(to left, #488001, #d2f16e);
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        text-decoration: none;
        color: #000;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .bg-link-buttons:hover {
        background: linear-gradient(to left, #d2f16e, #488001);
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

    .image-link-section4 {
        position: relative;
        display: inline-block;
        width: 100%;
        /* หรือกำหนดตามต้องการ */
    }

    .image-link-section4 img {
        width: 100%;
        display: block;
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .image-link-section4 img:hover {
        transform: scale(1.02);
        /* ซูมเข้า 10% */
        opacity: 0.9;
        /* ลดความทึบเล็กน้อย */
    }

    .image-text-section4 {
        position: absolute;
        top: 15%;
        /* ปรับให้ตัวอักษรอยู่ด้านบน */
        left: 50%;
        transform: translate(-50%, -50%);
        color: rgb(0, 0, 0);
        /* เปลี่ยนสีข้อความตามต้องการ */
        font-size: 22px;
        /* ปรับขนาดตัวอักษร */
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.9);
        /* เพิ่มเงาให้ชัดขึ้น */
        white-space: nowrap;
        /* ป้องกันข้อความขึ้นบรรทัดใหม่ */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page4">
    <div class="container d-flex flex-column flex-lg-row align-items-center w-100 gap-3">
        <div class="col-lg-6 col-xl-8 d-flex flex-column align-items-center">

            <div class="d-flex flex-column align-items-start justify-content-center mb-3  lh-1"
                style="text-shadow: 2px 2px 3px rgba(255, 255, 255, 0.8);">
                <div class=" fs-1 fw-bold text-dark ">
                    วิดีทัศน์แนะนำ <img src="{{ asset('images/section-4/icony.png') }}" alt="icon">
                </div>
                <div class="fs-4 text-dark">
                    องค์การบริหารส่วนตำบลแปลงยาว
                </div>
            </div>
            <div class="bg-video-sectioon-4">
                {{-- <video src="{{ asset('images/section-4/video.mp4') }}" autoplay loop muted></video> --}}
                <iframe src="https://www.youtube.com/embed/QvZVOhDrBPI?autoplay=1&mute=1" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="border-radius: 10px;"></iframe>
            </div>

            <div class="d-flex align-items-center justify-content-end mt-3 fs-4 fw-bold w-100">
                <a href="#" class="bg-link-buttons px-4 py-1">
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
                <div class="d-flex align-items-center justify-content-end mt-3 fs-4 fw-bold ">
                    <a href="#" class="bg-link-buttons px-4 py-1">
                        อ่านเพิ่มเติม
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mt-sm-5">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/การจัดซื้อจัดจ้างหรือจัดหาพัสดุ.png') }}" alt="icon"
                            style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        การจัดซื้อจัดจ้าง <br class="d-none d-sm-block">
                        หรือจัดหาพัสดุ
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/การจัดการเรื่องร้องเรียนทุจริต.png') }}" alt="icon"
                            style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        การจัดการเรื่อง<br class="d-none d-sm-block">ร้องเรียนทุจริต
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/การเสริมสร้างวัฒนธรรมองค์กร.png') }}" alt="icon"
                            style="width: 60px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        การเสริมสร้าง<br class="d-none d-sm-block">วัฒนธรรมองค์กร
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/การบริหารและพัฒนาทรัพยากรบุคคล.png') }}" alt="icon"
                            style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        การบริหารและพัฒนา<br class="d-none d-sm-block">ทรัพยากรบุคคล
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/ส่งเสริมความโปร่งใสและแผนป้องกันการทุจริต.png') }}"
                            alt="icon" style="width: 60px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        ส่งเสริมความโปร่งใส<br class="d-none d-sm-block">และแผนป้องกันการทุจริต
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-4/ดาวน์โหลดแบบฟอร์ม.png') }}" alt="icon"
                            style="width: 60px;">
                    </div>
                    <div class="m-auto py-3">
                        ดาวน์โหลดแบบฟอร์ม
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-3 mt-sm-5">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-xl-4">
                <a href="https://calendar.google.com/calendar/u/0/r?pli=1" class="image-link-section4">
                    <img src="{{ asset('images/section-4/ข้อปฏิทินกิจกรรม.png') }}" alt="icon">
                    <span class="image-text-section4">ปฏิทินกิจกรรม</span>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="image-link-section4">
                    <img src="{{ asset('images/section-4/ปั้มน้ำมันโรงทานในพื้นที่.png') }}" alt="icon">
                    <span class="image-text-section4">ปั้มน้ำมันโรงทานในพื้นที่</span>
                </a>
            </div>
            <div class="col-sm-6 col-xl-4">
                <a href="#" class="image-link-section4">
                    <img src="{{ asset('images/section-4/ระบบสารบรรณแปลงยาว.png') }}" alt="icon">
                    <span class="image-text-section4">ระบบสารบรรณแปลงยาว</span>
                </a>
            </div>
        </div>
    </div>
</main>
