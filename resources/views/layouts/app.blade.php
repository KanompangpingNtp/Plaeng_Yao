<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="คำอธิบายเว็บไซต์">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub.ttf') format('woff2');
            font-weight: normal;
        }

        @font-face {
            font-family: 'th-krub';
            src: url('/fonts/TH-Krub-Bold.ttf') format('woff2');
            font-weight: bold;
        }

        body {
            font-family: 'th-krub', sans-serif;
            font-size: 20px;
        }

        .bg-nav {
            background-image: url('{{ asset('images/navbar/แถบบน.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 10vh;
            padding: 10px;
        }

        .text-title-nav {
            color: #ffffff;
            background-color: #00000093;
            border-top-right-radius: 40px;
            border-bottom-right-radius: 40px;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
        }

        /* เมื่อหน้าจอมีขนาดต่ำกว่า md (768px) */
        @media (max-width: 768px) {
            .text-title-nav {
                border-radius: 40px;
                /* ทำให้ border-radius เท่ากันทุกด้าน */
            }
        }


        .button-pink {
            background-color: rgb(255, 157, 211);
            font-size: 25px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-pink:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-blue {
            background: linear-gradient(to bottom, rgba(135, 255, 36, 0.8), rgba(5, 143, 0, 0.8));
            font-size: 25px;
            font-weight: bold;
            padding: 2px 20px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-blue:hover {
            transform: scale(1.05);
            /* ขยายขนาด */
            box-shadow: 0 0 5px 3px rgba(255, 255, 255, 0.5);
            /* เรืองแสงสีขาว */
        }

        .button-img img {
            cursor: pointer;
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .button-img img:hover {
            transform: scale(1.1);
            /* ขยายขนาดเมื่อ hover */
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.7));
            /* เพิ่มเงาสีขาว */
        }

        .logo {
            height: 8rem;
            filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.7));
        }

        .button-search {
            background: linear-gradient(to bottom, rgba(135, 255, 36, 0.8), rgba(5, 143, 0, 0.8));
            font-size: 25px;
            font-weight: bold;
            padding: 0px 15px;
            border: 0px solid black;
            border-radius: 10px;
            color: #ffffff;
            cursor: pointer;
            text-decoration: none;
            text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);
            transition: all 0.3s ease;
            /* เพิ่มทรานสิชั่น */
        }

        .button-search:hover {
            background: linear-gradient(to top, rgb(5, 143, 0), rgb(135, 255, 36));
            /* เรืองแสงสีขาว */
        }

        .bg-black-opacity {
            background: linear-gradient(to bottom, rgba(29, 29, 29, 0.4), rgb(29, 29, 29, 0.4));
            padding: 10px 5px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <!-- Content Section -->
    <header class="bg-nav d-flex">
        <div class="container d-flex justify-content-center justify-content-md-between align-items-center">
            <div class="d-flex  justify-content-start align-items-center">
                <img src="{{ asset('images/navbar/Logo-601.png') }}" alt="logo" class="logo d-none d-md-block"
                    style="margin-right:-35px; z-index: 3;">
                <div class="text-title-nav lh-1 text-center text-md-start py-2 px-5">
                    <span class="me-1" style="font-size: 30px;">องค์การบริหารส่วนตำบลแปลงยาว <br> อำเภอแปลงยาว
                        จังหวัดฉะเชิงเทรา</span><br>
                    <span style="font-size: 25px;">Plaeng Yao Subdistrict Administrative Oraganization</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="d-flex flex-column justify-content-start align-items-center d-none d-lg-block">
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <a class="button-blue"><i class="fa-solid fa-house fs-5"></i> หน้าหลัก</a>
                        <a class="button-blue"><i class="fa-solid fa-user fs-5"></i> เข้าสู่ระบบ</a>
                    </div>
                    <div class="d-flex justify-content-end align-items-center gap-2 button-img mt-2">
                        <div
                            class="d-flex justify-content-start align-items-start button-img gap-1 d-none d-lg-flex bg-black-opacity">
                            <img src="{{ asset('images/navbar/text-minus.png') }}" alt="text-minus">
                            <img src="{{ asset('images/navbar/text-normal.png') }}" alt="text-normal">
                            <img src="{{ asset('images/navbar/text-plus.png') }}" alt="text-plus">
                        </div>
                        <img src="{{ asset('images/navbar/disability.png') }}" alt="btn-disability" width="42"
                            height="42">
                        <div class="bg-black-opacity">
                            <img src="{{ asset('images/navbar/th.png') }}" alt="thailand" width="30">
                            <img src="{{ asset('images/navbar/en.png') }}" alt="english" width="30">
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="bg-menu w-100 pb-2 pt-3">
        <div class="container d-flex flex-wrap justify-content-evenly">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/info.png') }}" alt="ปุ่มหน้าหลัก">
                    <div>ข้อมูลพื้นฐาน</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/networking.png') }}" alt="ปุ่มบุคลากร">
                    <div>บุคลากร</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/key-performance-indicator.png') }}" alt="ปุ่มผลการดำเนินงาน">
                    <div>ผลการดำเนินงาน</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/certificate-authority.png') }}" alt="ปุ่มอำนาจหน้าที่">
                    <div>อำนาจหน้าที่</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/growth.png') }}" alt="ปุ่มแผนพัฒนาท้องถิ่น">
                    <div>แผนพัฒนนาท้องถิ่น</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/verdict.png') }}" alt="กฏหมาย">
                    <div>กฏหมายและกฏระเบียบ</div>
                </a>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <a href="#" class="navbar-item">
                    <img src="{{ asset('images/header/crowd.png') }}" alt="ปุ่มเมนูสำหรับประชาชน">
                    <div>เมนูสำรหับประชาชน</div>
                </a>
            </div>
        </div>
    </div>
    @include('layouts.components.header')

    @yield('content')



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
