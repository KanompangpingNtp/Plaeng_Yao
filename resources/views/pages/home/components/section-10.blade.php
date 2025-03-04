<style>
    .bg-page10 {
        background-image: url('{{ asset('images/section-10/bg-section10.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */

    }

    .bg-footer {
        background-image: url('{{ asset('images/section-10/footer.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 2vh;
        /* ใช้ min-height เพื่อให้พื้นที่ครอบคลุมหน้าจอ */

    }

    .logo-footer {
        width: 10rem;
        height: 10rem;
        z-index: 5;
    }

    @media (max-width: 765px) {
        .logo-footer {
            width: 12rem;
            hight: 12rem;
        }
    }

    .no-bullets {
        list-style-type: none;
        /* ลบจุดด้านหน้า */
        padding-left: 0;
        /* ลบระยะห่างซ้าย */
        margin: 0;
        /* ลบระยะห่างรอบๆ */
    }

    .no-bullets li a {
        color: #000;
        transition: all 0.3s ease;
    }

    .no-bullets li a:hover {
        color: #ffffff;
    }

    .bg-dataweb {
        color: rgb(255, 255, 255);
        box-shadow: 0px 2px 15px rgba(255, 255, 255, 0.9);
        font-weight: bold;
        background: linear-gradient(to bottom, rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9));
        border-radius: 16px;
    }

    .hover-effect {
        transition: transform 0.3s ease, filter 0.3s ease;
        /* ทำให้การเปลี่ยนลื่นไหล */
    }

    .hover-effect:hover {
        transform: scale(1.2);
        /* ขยายขนาดเมื่อ hover */
        filter: drop-shadow(0 0 10px rgba(217, 255, 0, 0.8));
        /* เพิ่มเอฟเฟกต์เรืองแสง */
    }

    .text-link-custom a {
        text-decoration: none;
        color: #000;

    }

    .text-link-custom a:hover {
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .bg-coute {
        background: linear-gradient(to bottom, #d1f541b7, #70c020b2);
        padding: 10px 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
</style>
<!-- Content Section -->
<main class="bg-page10 d-flex pt-3">
    <div class="d-flex flex-column justify-content-end align-items-center w-100">
        <div class="bg-coute shadow-lg w-100 mb-5">
            <div class=" d-flex flex-column flex-lg-row justify-content-center align-items-center">
                <div class="text-center py-3 px-4 border-3 lh-1">
                    <span class="fw-bold fs-3">จำนวนผู้เข้าชมเว็บไซต์</span> <br>
                    number of website visitors
                </div>
                <div class="text-center py-3 px-5 border-3 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold text-white">ขณะนี้</span>
                </div>
                <div class="text-center py-3 px-5 border-3 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold text-white">วันนี้</span>
                </div>
                <div class="text-center py-3 px-5 border-3 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold text-white">เดือนนี้</span>
                </div>
                <div class="text-center py-3 px-5 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold text-white">ปีนี้</span>
                </div>
                <div class="text-center py-3 px-5 lh-1">
                    <span class=" fs-1">1</span> <br>
                    <span class="fw-bold text-white">ทั้งหมด</span>
                </div>
            </div>
        </div>
        <div class="bg-footer d-flex w-100">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-around align-items-center gap-3 py-3">
                <img src="{{ asset('images/section-10/logo.png') }}" alt="logo" class="logo-footer"
                    style="margin-top: -4rem;">
                <div class="d-flex flex-column justify-content-center align-items-start">
                    <div class="lh-1 ms-5 ms-lg-0">
                        <span class="fw-bold fs-5">องค์การบริหารส่วนตำบลแปลงยาว</span> <br>
                        <span class="fw-bold" style="font-size: 16px;">Plaeng Yao Subdistrict Administrative Organization</span> <br>
                        <span class="fw-bold " style="font-size: 16px;">
                            เลขที่ 86 หมู่ที่ 7 ตำบลแปลงยาว อำเภอแปลงยาว <br>
                            จังหวัดฉะเชิงเทรา รหัสไปรษณีย์ : 24190
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1">
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/section-10/phone-call.png') }}" alt="phone" width="20"
                            height="20">
                        <div class="fw-bold" style="font-size: 16px;">โทรศัพท์ : 038-852-556</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/section-10/email.png') }}" alt="phone" width="23"
                            height="20">
                        <div class="fw-bold" style="font-size: 16px;">Email : Saraban_06240907@dla.go.th</div>
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start lh-1">
                    {{-- <span class="bg-dataweb px-2 py-1 mb-1">ข้อมูลเว็บไซด์</span> --}}
                    <ul class="no-bullets">
                        <li><a href="#" class="text-decoration-none " style="font-size: 16px;">หน้าแรก</a></li>
                        <li><a href="#" class="text-decoration-none " style="font-size: 16px;">กระดานกระทู้</a></li>
                        <li><a href="#" class="text-decoration-none " style="font-size: 16px;">ติดต่อ</a></li>
                        <li><a href="#" class="text-decoration-none " style="font-size: 16px;">แผนผังเว็บไซต์</a></li>
                    </ul>
                </div>

                <div class="d-flex flex-column justify-content-center align-items-start lh-1 gap-2 text-link-custom">
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/section-10/email.png') }}" alt="email" width="20"
                            height="15">
                        <div style="font-size: 16px;">ตรวจสอบEmail</div>
                    </a>
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/section-10/home.png') }}" alt="phone" width="20"
                            height="20">
                        <div style="font-size: 16px;">เว็บใกล้เคียง</div>
                    </a>
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/section-10/user.png') }}" alt="phone" width="20"
                            height="20">
                        <div style="font-size: 16px;">เว็บมาสเตอร์</div>
                    </a>
                    <a href="#" class="d-flex justify-content-center align-items-start gap-2">
                        <img src="{{ asset('images/section-10/enter.png') }}" alt="phone" width="20"
                            height="20">
                        <div style="font-size: 16px;">เข้าสู่ระบบ Admin</div>
                    </a>
                </div>
                <div class="d-flex flex-row flex-lg-column justify-content-center align-items-start lh-1 gap-2">
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/section-10/arrow.png') }}" alt="upload" width="25"
                            height="25"></a>
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/section-10/share.png') }}" alt="chair" width="25"
                            height="25"></a>
                    <a href="#"><img class="hover-effect"
                            src="{{ asset('images/section-10/messenger.png') }}" alt="message" width="25"
                            height="25"></a>
                </div>

            </div>
        </div>
    </div>
</main>
