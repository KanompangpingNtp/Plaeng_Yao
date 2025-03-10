@extends('layouts.sub-layout')
@section('content')
    <style>
        .bg {
            background-image: url('{{ asset('images/section-3/bg-4.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .custom-gradient-shadow {
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3),
                /* เงาพื้นฐาน */
                0 0 50px -10px rgba(158, 255, 3, 0.8),
                /* เงาสีฟ้าเข้ม */
                0 0 50px -10px rgba(72, 255, 0, 0.8);
            /* เงาสีฟ้าอ่อน */
            background-color: #ffffff;
        }
    </style>
    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class=" d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/contect/logo.png') }}" alt="icon" class="mb-3">
                <div class="d-flex flex-column justify-content-center align-items-center text-center lh-1">
                        <span class="fw-bold fs-2">องค์การบริหารส่วนตำบลแปลงยาว</span> <br>
                        <span class="fw-bold fs-4">Phra Achan Subdistrict Administrative Organization</span> <br>
                        <span class="text-muted fs-4">
                            เลขที่ 86 หมู่ที่ 7 ตำบลแปลงยาว<br>
                            อำเภอแปลงยาว จังหวัดฉะเชิงเทรา <br>
                            รหัสไปรษณีย์ : 24190
                        </span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center lh-1 my-3">
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/contect/phone-call.png') }}" alt="phone" width="20"
                            height="20" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5)">
                        <div>โทรศัพท์ : 038-852-556</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/contect/fax.png') }}" alt="phone" width="20"
                            height="20" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5)">
                        <div>เบอร์แฟกซ์ : 038-589630</div>
                    </div>
                    <div class="d-flex justify-content-center align-items-start gap-2 mb-1">
                        <img src="{{ asset('images/contect/email.png') }}" alt="phone" width="23"
                            height="20" style="filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5)">
                        <div>Email : plaengyao_sao@hotmail.com</div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            ช่องทางการชำระค่าธรรมเนียมต่าง ๆ <br>
                            (ภาษีบำรุงท้องที่, ค่าเก็บขนขยะ, ค่าธรรมเนียมต่างๆ)
                        </div>
                        <img src="{{ asset('images/contect/qr_code_01.png') }}" alt="qr-code">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div>
                            ช่องทางการติดต่อสอบถาม
                            อบต.แปลงยาว
                        </div>
                        <img src="{{ asset('images/contect/qr_code_03.png') }}" alt="qr-code">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                        <div>
                            ช่องทางการติดต่อสอบถาม
                            กองคลัง
                        </div>
                        <img src="{{ asset('images/contect/qr_code_02.png') }}" alt="qr-code">
                    </div>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7755.060776732151!2d101.238965!3d13.625469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d223aefc3513f%3A0x1b9b74641276b8dc!2z4Lit4LiH4LiE4LmM4LiB4Liy4Lij4Lia4Lij4Li04Lir4Liy4Lij4Liq4LmI4Lin4LiZ4LiV4Liz4Lia4Lil4LmB4Lib4Lil4LiH4Lii4Liy4Lin!5e0!3m2!1sth!2sth!4v1741333239530!5m2!1sth!2sth"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
