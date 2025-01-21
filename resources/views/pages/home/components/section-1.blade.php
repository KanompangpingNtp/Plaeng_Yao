<style>
    .bg-page1 {
        background-image: url('{{ asset('images/section-1/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 90vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }

    .bg-runtext {
        background-image: url('{{ asset('images/section-1/แถบล่าง.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 10vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */
    }


    .bg-menu {
        background: linear-gradient(to right, rgba(155, 255, 73, 0.8), rgba(135, 255, 37, 0.8));
        z-index: 2;
        transition: transform 0.3s ease;
    }

    .navbar-item {
        color: white;
        text-decoration: none;
        text-align: center;
        display: block;
        padding: 2px 10px;
        transition: all 0.3s ease;
    }

    .navbar-item img {
        width: 40px;
        height: 40px;
        margin-bottom: 5px;
        transition: transform 0.3s ease;
        /* เพิ่ม effect การขยายขนาดของไอคอน */
    }

    .navbar-item div {
        font-size: 23px;
        transition: color 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงสีของข้อความ */
    }

    .navbar-item:hover {
        color: rgba(135, 255, 36, 0.8);
        /* เปลี่ยนสีของข้อความเมื่อ hover */
        border-radius: 10px;
        /* เพิ่มมุมโค้งเพื่อให้ดูนุ่มนวล */
    }

    .navbar-item:hover img {
        transform: scale(1.1);
        /* ขยายขนาดไอคอนให้ใหญ่ขึ้นเมื่อ hover */
    }

    .navbar-item:hover div {
        color: rgba(32, 61, 8, 0.8);
        /* เปลี่ยนสีของข้อความเมื่อ hover */
    }

    /* แสดงแนวตั้งไอคอนและข้อความ */
    .navbar-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }


    .hero-section {
        width: 100%;
        height: 100vh;
        /* Full screen height */
        overflow: hidden;
        position: relative;
    }

    .carousel {
        display: flex;
        height: 100%;
        position: relative;
    }

    .carousel-slide {
        flex: 0 0 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transition: transform 0.5s ease-in-out;
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }

    .carousel-slide.active {
        opacity: 1;
        position: relative;
    }

    .carousel-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(135, 255, 36, 0.8);
        color: #fff;
        border: none;
        border-radius: 100%;
        padding: 1px 32px;
        cursor: pointer;
        font-size: 50px;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .carousel-btn.left {
        left: 10px;
    }

    .carousel-btn.right {
        right: 10px;
    }

    .carousel-btn:hover {
        background: rgba(0, 0, 0, 0.8);
        box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
        
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-end bg-page1">
    <section class="hero-section">
        <div class="carousel">
            <div class="carousel-slide active" style="background-image: url({{ asset('images/section-1/BG.png') }});">
            </div>
            <div class="carousel-slide" style="background-image: url('image2.jpg');"></div>
            <div class="carousel-slide" style="background-image: url('image3.jpg');"></div>
            <button class="carousel-btn left" onclick="prevSlide()">&#8249;</button>
            <button class="carousel-btn right" onclick="nextSlide()">&#8250;</button>
        </div>
    </section>

    <div class="bg-menu w-100 pb-2 pt-3">
        <div class="container d-flex flex-wrap justify-content-evenly">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/info.png') }}" alt="ปุ่มหน้าหลัก">
                    <div>ข้อมูลพื้นฐาน</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/networking.png') }}" alt="ปุ่มบุคลากร">
                    <div>บุคลากร</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/key-performance-indicator.png') }}" alt="ปุ่มผลการดำเนินงาน">
                    <div>ผลการดำเนินงาน</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/certificate-authority.png') }}" alt="ปุ่มอำนาจหน้าที่">
                    <div>อำนาจหน้าที่</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/growth.png') }}" alt="ปุ่มแผนพัฒนาท้องถิ่น">
                    <div>แผนพัฒนนาท้องถิ่น</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/verdict.png') }}" alt="กฏหมาย">
                    <div>กฏหมายและกฏระเบียบ</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/section-1/crowd.png') }}" alt="ปุ่มเมนูสำหรับประชาชน">
                    <div>เมนูสำรหับประชาชน</div>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-runtext w-100 d-flex align-items-center">
        <div class="container d-flex align-items-center gap-3">
            <div class="bg-text w-100">
                <div
                    style="white-space: nowrap; overflow: hidden; position: relative; width: 100%; height: 38px; background: linear-gradient(to right, #ffffff6b, #ffffff6b); border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3); padding: 5px;">
                    <span
                        style="display: inline-block; position: absolute; white-space: nowrap; animation: marquee 15s linear infinite; color: white; font-size: 20px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        วิสัยทัศน์ : ตำบลน่าอยู่ เรียนรู้ตลอดชีวิต เป็นมิตรสิ่งแวดล้อม พร้อมพัฒนาสู่เมืองดิจิทัล
                    </span>
                </div>
            </div>

        </div>
    </div>

    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>


</main>
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Optional: Auto-play functionality
    setInterval(nextSlide, 5000); // Change slide every 5 seconds
</script>
