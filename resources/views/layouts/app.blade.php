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
            font-family: 'PROMPT';
            src: url('/fonts/PROMPT-LIGHT.ttf') format('woff2');
            font-weight: normal;
        }

        @font-face {
            font-family: 'PROMPT';
            src: url('/fonts/PROMPT-SEMIBOLD.ttf') format('woff2');
            font-weight: bold;
        }

        body {
            font-family: 'PROMPT', sans-serif;
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
            background: linear-gradient(to bottom, #cbfc89, #93961d);
            font-size: 16px;
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
            background: linear-gradient(to bottom, rgba(29, 29, 29, 0.6), rgba(29, 29, 29, 0.6));
            padding: 10px 5px;
            border-radius: 12px;
        }

        .navbar .dropdown-toggle::after {
            display: none !important;
        }

        .dropdown-menu {
            background-color: rgba(58, 175, 22, 0.8);
            border: 1px solid rgb(27, 116, 0);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            margin: 0;
            font-size: 23px;
            transition: all 0.3s ease;
        }


        .dropdown-menu a {
            color: #e4e4e4;
            transition: all 0.3s ease;
        }

        .dropdown-menu a:hover {
            color: rgb(0, 0, 0);
            background-color: rgb(27, 116, 0);
        }

        .navbar-nav .nav-item .nav-link {
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .navbar-nav .nav-item .nav-link:hover {
            transform: scale(1.1);
            /* ขยายขึ้น 10% */
            filter: drop-shadow(0 0 8px rgb(27, 116, 0, 0.9));
            /* เรืองแสงสีฟ้า */
        }

        .navbar-text {
            font-size: 16px;
        }

        .maintitle-text {
            font-size: 14px;
        }

        .subtitle-text {
            font-size: 12px;
            /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
        }

        @media (min-width: 640px) {
            .maintitle-text {
                font-size: 18px;
            }

            .subtitle-text {
                font-size: 16px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 16px;
            }
        }

        @media (min-width: 768px) {
            .maintitle-text {
                font-size: 18px;
            }

            .subtitle-text {
                font-size: 16px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 18px;
            }
        }

        @media (min-width: 1024px) {
            .maintitle-text {
                font-size: 20px;
            }

            .subtitle-text {
                font-size: 18px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 20px;
            }
        }

        @media (min-width: 1280px) {
            .maintitle-text {
                font-size: 26px;
            }

            .subtitle-text {
                font-size: 24px;
                /* ขนาดใหญ่ขึ้นเมื่อหน้าจอ ≥ 640px */
            }

            .button-blue {
                font-size: 22px;
            }
        }

        /* สำหรับ scrollbar ทุกประเภท */
        ::-webkit-scrollbar {
            width: 5px;
            /* กำหนดความกว้างของ scrollbar */
            height: 12px;
            /* กำหนดความสูงของ scrollbar สำหรับแนวนอน */

        }

        /* ส่วนที่ใช้ควบคุมสีของ scrollbar */
        ::-webkit-scrollbar-thumb {
            background-color: rgb(27, 116, 0);
            /* สีของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบ scrollbar เป็นมุมมน */
            transition: all 0.5s;
        }

        /* ส่วนที่เป็นพื้นหลังของ scrollbar */
        ::-webkit-scrollbar-track {
            background: transparent;
            /* สีพื้นหลังของ scrollbar */
            border-radius: 10px;
            /* ทำให้ขอบของ track เป็นมุมมน */
        }

        /* ส่วนของ scrollbar แนวนอน */
        ::-webkit-scrollbar-horizontal {
            height: 10px;
        }

        /* สำหรับ scrollbar เมื่อ hover */
        ::-webkit-scrollbar-thumb:hover {
            background-color: rgb(148, 228, 0);
            /* เปลี่ยนสีเมื่อ hover */
        }

        .flag-link {
            display: inline-block;
            margin: 2px;
            transition: filter 0.3s ease-in-out;
        }

        .flag-link:hover img {
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.8));
        }

        .bg-menu {
            background: linear-gradient(to right, #d2f26e, #95dc38);
            z-index: 2;
            transition: transform 0.3s ease;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-gadget {
            font-size: 0;
        }

        .goog-te-gadget span {
            display: none;
        }

        .goog-te-gadget-simple {
            background: none;
            border: none;
        }

    </style>
</head>

<body>

    <!-- Content Section -->
    <header class="bg-nav d-flex">
        <div class="container d-flex flex-column flex-xxl-row justify-content-center justify-content-md-between align-items-center">
            <div class="d-flex justify-content-start align-items-center">
                <img src="{{ asset('images/navbar/Logo-601.png') }}" alt="logo" class="logo d-none d-md-block" style="margin-right:-35px; z-index: 3;">
                <div class="text-title-nav lh-1 text-center text-md-start py-2 px-5">
                    <span class="me-1 maintitle-text">องค์การบริหารส่วนตำบลแปลงยาว <br> อำเภอแปลงยาว
                        จังหวัดฉะเชิงเทรา</span><br>
                    <span class="subtitle-text">Plaeng Yao Subdistrict Administrative Oraganization</span>
                </div>
            </div>
            <div class="d-flex gap-2">
                <div class="d-flex flex-column justify-content-start align-items-center mt-2 mt-md-0">
                    <div class="d-flex justify-content-end align-items-center gap-2">
                        <a class="button-blue" href="{{ route('Home') }}"><i class="fa-solid fa-house text-black"></i>
                            หน้าหลัก</a>
                        <a class="button-blue" href="{{ route('showLoginForm') }}"><i class="fa-solid fa-user  text-black"></i> เข้าสู่ระบบ</a>
                        <a class="button-blue" href="{{route('ContectPages')}}"><img src="{{asset('images/navbar/ติดต่อ.png')}}" alt="icon" height="21"> ติดต่อเรา</a>
                    </div>
                    <div class="d-flex justify-content-evenly align-items-center gap-2 button-img my-1">
                        <div class="d-flex justify-content-start align-items-start button-img gap-1 bg-black-opacity">
                            <img src="{{ asset('images/navbar/text-minus.png') }}" alt="text-minus">
                            <img src="{{ asset('images/navbar/text-normal.png') }}" alt="text-normal">
                            <img src="{{ asset('images/navbar/text-plus.png') }}" alt="text-plus">
                        </div>
                        <img src="{{ asset('images/navbar/disability.png') }}" alt="btn-disability" width="42" height="42">
                    </div>
                    <div class="bg-black-opacity d-flex justify-content-center align-items-center">
                        <div class="text-white d-none d-sm-block">
                            เปลี่ยนภาษา
                        </div>
                        <div id="google_translate_element"></div>

                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en', // ภาษาเริ่มต้นของเว็บไซต์
                                    includedLanguages: 'en,th,id,ms,vi,lo,my,kh,ph,sg', // ภาษาในอาเซียน
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                    , autoDisplay: false // ปิดการแสดงผลอัตโนมัติ
                                }, 'google_translate_element');
                            }

                        </script>
                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/thailand.png') }}" alt="Thailand" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Brunei.png') }}" alt="Brunei" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Myanmar.png') }}" alt="Myanmar" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Laos.png') }}" alt="Laos" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Indonesia.png') }}" alt="Indonesia" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Malaysia.png') }}" alt="Malaysia" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Philippines.png') }}" alt="Philippines" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Cambodia.png') }}" alt="Cambodia" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Singapore.png') }}" alt="Singapore" width="23"></a>
                        <a href="#" class="flag-link"><img src="{{ asset('images/navbar/country/Vietnam.png') }}" alt="Vietnam" width="23"></a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class=" w-100">
        <nav class="navbar navbar-expand-lg bg-menu pb-2 pt-3">
            <div class="container">
                <!-- ปุ่ม Toggle สำหรับหน้าจอเล็ก -->
                <button class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- เมนูทั้งหมด -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav w-100 d-flex flex-wrap justify-content-evenly fw-bold">
                        <!-- 1. ข้อมูลพื้นฐาน -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center " href="#" id="basicInfoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/info.png') }}" alt="house" class="navbar-icon">
                                <div class="navbar-text ">ข้อมูลพื้นฐาน</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="basicInfoDropdown">
                                <li><a class="dropdown-item" href="{{route('testPage')}}">ประวัติความเป็นมา</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">วิสัยทัศน์</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">ข้อมูลสภาพทั่วไป</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">ผลิตภัณฑ์ชุมชน/OTOP</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">สถานที่สำคัญ</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">อำนาจหน้าที่</a>
                                </li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">นโยบายการบริหาร/เจตจำนงสุจริต</a>
                                </li>

                            </ul>
                        </li>

                        <!-- 2. บุคลากร -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="personnelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/networking.png') }}" alt="teamwork" class="navbar-icon">
                                <div class="navbar-text">บุคลากร</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="personnelDropdown">
                                <li><a class="dropdown-item" href="{{route('PersonnelChart')}}">โครงสร้างองค์กร</a>
                                </li>
                                @foreach ($personnelAgencies as $agency)
                                <li>
                                    <a class="dropdown-item" href="{{ route('AgencyShow', ['id' => $agency->id]) }}">
                                        {{ $agency->personnel_agency_name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- 3. ผลการดำเนินงาน -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="performanceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/key-performance-indicator.png') }}" alt="online survey" class="navbar-icon">
                                <div class="navbar-text">ผลการดำเนินงาน</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="performanceDropdown">
                                @foreach ($PerfResultsMenu as $detail)
                                <li>
                                    <a class="dropdown-item" href="{{ route('PerformanceResultsSectionPages', ['id' => $detail->id]) }}">
                                        {{ $detail->type_name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- 4. อำนาจหน้าที่ -->
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="">
                                <img src="{{ asset('images/header/certificate-authority.png') }}" alt="อำนาจหน้าที่"
                        class="navbar-icon">
                        <div class="navbar-text">อำนาจหน้าที่</div>
                        </a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="authorityDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/certificate-authority.png') }}" alt="อำนาจหน้าที่" class="navbar-icon">
                                <div class="navbar-text">อำนาจหน้าที่</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="authorityDropdown">
                                @foreach ($AuthorityDetails as $detail)
                                <li>
                                    <a class="dropdown-item" href="{{ route('AuthorityShowDetails', ['id' => $detail->id]) }}">
                                        {{ $detail->list_details_name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>


                        <!-- 5. แผนพัฒนนาท้องถิ่น -->
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/growth.png') }}" alt="แผนพัฒนนาท้องถิ่น" class="navbar-icon">
                        <div class="navbar-text">แผนพัฒนาท้องถิ่น</div>
                        </a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="developmentPlanDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/growth.png') }}" alt="แผนพัฒนาท้องถิ่น" class="navbar-icon">
                                <div class="navbar-text">แผนพัฒนาท้องถิ่น</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="developmentPlanDropdown">
                                @foreach ($OperationalPlanMenu as $detail)
                                <li>
                                    <a class="dropdown-item" href="{{ route('OperationalPlanSectionPages', ['id' => $detail->id]) }}">
                                        {{ $detail->type_name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <!-- 6. กฏหมายและกฏระเบียบ -->
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/verdict.png') }}" alt="กฏหมายและกฏระเบียบ" class="navbar-icon">
                        <div class="navbar-text">กฏหมายและกฏระเบียบ</div>
                        </a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="lawDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/verdict.png') }}" alt="กฏหมายและกฏระเบียบ" class="navbar-icon">
                                <div class="navbar-text">กฏหมายและกฏระเบียบ</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="lawDropdown">
                                <li><a class="dropdown-item" href="{{route('testPage')}}">ข้อบัญญัติ และคำสั่งอบต.</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">พระราชบัญญัติ และพระราชกฤษฎีกา</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">กฎหมาย ระเบียบ และประกาศกระทรวง</a></li>
                            </ul>
                        </li>

                        <!-- 7. เมนูหรับประชาชน -->
                        {{-- <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <img src="{{ asset('images/header/crowd.png') }}" alt="เมนูสำหรับประชาชน" class="navbar-icon">
                        <div class="navbar-text">เมนูสำหรับประชาชน</div>
                        </a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#" id="citizenMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/header/crowd.png') }}" alt="เมนูสำหรับประชาชน" class="navbar-icon">
                                <div class="navbar-text">เมนูสำหรับประชาชน</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="citizenMenuDropdown">
                                <li><a class="dropdown-item" href="{{route('ReceiveComplaintsForm')}}">รับเรื่องราวร้องทุกข์ </a></li>
                                <li><a class="dropdown-item" href="{{route('SatisfactionForm')}}">รับแจ้งร้องเรียนทุจริตประพฤติมิชอบ</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">แบบสอบถามความพึงพอใจ </a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">คู่มือต่าง ๆ</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">การประปา</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">การชำระภาษี</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">การขออนุญาตก่อสร้าง</a></li>
                                <li><a class="dropdown-item" href="https://welfare.dla.go.th/webview/">การลงทะเบียนผู้สูงอายุ/คนพิการ/ผู้ติดเชื้อ</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">การขอมีบัตรประจำตัวคนพิการ</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">เด็กแรกเกิด</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">บริการด้านงานทะเบียน</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">บริการจดทะเบียนพาณิชย์</a></li>
                                <li><a class="dropdown-item" href="{{route('testPage')}}">ดาวน์โหลดแบบฟอร์ม</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        {{-- <div class="container d-flex flex-wrap justify-content-evenly">
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
    </div> --}}
    </div>
    @include('layouts.components.header')

    @yield('content')



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
