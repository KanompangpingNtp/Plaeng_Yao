<style>
    .bg-page7 {
        background-image: url('{{ asset('images/section-7/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;

    }

    .bg-egp {
        background-color: #f3f3f3;
        border-radius: 20px;
    }

    .bg-menu-egp {
        background-image: url('{{ asset('images/section-7/bg-in.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 20px;
        gap: 0.6rem 0;
    }

    .bg-menu-egp a {
        text-decoration: none;
        color: #ffffff;
        font-size: 25px;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        /* ขนาดตัวอักษรปกติ */
        transition: all 0.3s ease-in-out;
    }

    @media (max-width: 991px) {

        /* เมื่อหน้าจอมีความกว้างน้อยกว่าหรือเท่ากับ 991px */
        .bg-menu-egp a {
            font-size: 23px;
            border-radius: 20px;
            /* ปรับขนาดตัวอักษรให้เล็กลง */
        }
    }

    .bg-menu-egp a:hover {
        color: black;
        background: #f3f3f3;
    }

    .egp-card {
        background-color: transparent !important;
        border: 1px solid black;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        /* ให้เอฟเฟกต์เปลี่ยนสีพื้นหลังนุ่มนวล */
    }

    .egp-card:hover {
        background-color: rgba(0, 0, 0, 0.5) !important;
        /* พื้นหลังสีดำโปร่งแสงเมื่อ hover */
        color: white;
        /* เปลี่ยนสีตัวอักษรเป็นสีขาวเพื่อให้อ่านง่ายขึ้น */
    }

    .egp-card:hover .card-text {
        color: #f1f1f1;
        /* เปลี่ยนสีข้อความเมื่อ hover */
    }
</style>
<main class="d-flex align-items-center justify-content-center bg-page7">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="lh-1 fw-bold w-100 ms-2 mb-4">
                <span
                    style="font-size:50px; text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px white, 0 0 40px white;">ประกาศของคลัง</span>
                <img src="{{ asset('images/section-7/hired.png') }}" alt="icon" height="50"> <br>
                <span class="fs-4 ">องค์การบริหารส่วนตำบลแปลงยาว</span>
            </div>
            <div class="row bg-egp justify-content-center shadow-lg w-100">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center bg-menu-egp  ps-0 ps-lg-3 py-2 py-lg-5 fw-bold pe-0">
                    <a href="#" class="w-100 text-center text-lg-start px-4 py-1">ประกาศจัดซื้อจัดจ้าง</a>
                    <a href="#" class="w-100 text-center text-lg-start px-4 py-1">ผลประกาศจัดซื้อจัดจ้างประจำปี</a>
                    <a href="#" class="w-100 text-center text-lg-start px-4 py-1">สรุปผลการจัดซื้อจัดจ้าง</a>
                    <a href="#" class="w-100 text-center text-lg-start px-4 py-1">แผนการจัดซื้อจัดจ้าง</a>
                    <a href="#" class="w-100 text-center text-lg-start px-4 py-1">ประกาศผู้ชนะการเสนอราคา</a>
                </div>
                <div
                    class="col-lg-8 d-flex flex-column justify-content-center align-items-center px-3 py-5 "style="gap: 1rem 0;">
                    <?php
                    // วนลูปเพื่อแสดงการ์ด 4 อัน
                    for ($i = 1; $i <= 5; $i++): 
                    ?>
                    <a href="#" class="w-100" style="text-decoration: none; ">
                        <div class="card p-3 egp-card text-black w-100">
                            <div class="d-flex align-items-center">
                                <!-- รูปภาพด้านซ้าย -->
                                <img src="{{asset('images/section-7/bookmark.png')}}" alt="รูปภาพ" class="rounded me-3"
                                    style="width: 45px; height: 45px; object-fit: contain;">
                                <!-- ข้อความด้านขวา -->
                                <div class="flex-grow-1">
                                    <div class="card-text lh-1">
                                        <?php
                                        $text = 'This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.'; // สร้างข้อความให้แตกต่างกันตามลูป
                                        echo mb_strimwidth($text, 0, 180, '...');
                                        ?>
                                    </div>
                                    <div class="card-text text-muted">
                                        <img src="{{ asset('images/section-7/fast-time.png') }}" alt="icon"
                                            class="me-1" width="18">
                                        dd/mm/yyyy
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center w-100 me-2 mt-2">
                <a href="#" class="bg-link-button px-4 py-1 my-1 ">
                    ดูทั้งหมด
                </a>
            </div>
        </div>
    </div>
</main>
