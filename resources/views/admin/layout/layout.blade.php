<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: '{{ $message }}'
        , })

    </script>
    @endif

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">ระบบจัดการข้อมูล</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!" title="Toggle sidebar">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">ระบบ</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts1">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการแถบเมนูหลัก
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('ManagePersonnel')}}">จัดการบุคลากร</a>
                                <a class="nav-link" href="{{route('AuthorityAdmin')}}">จัดการอำนาจหน้าที่</a>
                                <a class="nav-link" href="{{route('PerformanceResultsType')}}">จัดการผลการดำเนินงาน</a>
                                <a class="nav-link" href="{{route('OperationalPlanType')}}">จัดการแผนงานพัฒนาท้องถิ่น</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{route('PressReleaseHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการข่าวประชาสัมพันธ์
                        </a>
                        <a class="nav-link" href="{{route('ActivityHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i></div>
                            จัดการกิจกรรม
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            ประกาศของคลัง
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('ProcurementResultsHome')}}">ผลประกาศจัดซื้อจัดจ้างประจำปี</a>
                                <a class="nav-link" href="{{route('ProcurementHome')}}">ประกาศจัดซื้อจัดจ้าง</a>
                                <a class="nav-link" href="{{route('AveragePriceHome')}}">ประกาศผู้ชนะการเสนอราคา</a>
                                <a class="nav-link" href="{{route('RevenueHome')}}">สรุปผลการจัดซื้อจัดจ้าง</a>
                                <a class="nav-link" href="{{route('ProcurementPlanHome')}}">แผนการจัดซื้อจัดจ้าง</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{route('AwardsofPrideHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            รางวัลแห่งความภาคภูมิใจ
                        </a>
                        <a class="nav-link" href="{{route('NoticeBoardHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            ป้ายประกาศ
                        </a>
                        <a class="nav-link" href="{{route('RecommendPlacesHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            แนะนำสถานที่
                        </a>
                        <a class="nav-link" href="{{route('OfficialDocumentsHome')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            หนังสือราชการ
                        </a>
                        <a class="nav-link" href="{{route('AdminITAType')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i></div>
                            จัดการการประเมินคุณธรรม(ITA)
                        </a>
                        {{-- <a class="nav-link" href="{{route('ManagePersonnel')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i>
                            </div>
                            จัดการบุคลากร
                        </a>
                        <a class="nav-link" href="{{route('AuthorityAdmin')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i></div>
                            จัดการอำนาจหน้าที่
                        </a>
                        <a class="nav-link" href="{{route('PerformanceResultsType')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i></div>
                            จัดการผลการดำเนินงาน
                        </a>
                        <a class="nav-link" href="{{route('OperationalPlanType')}}">
                            <div class="sb-nav-link-icon">
                                <i class="bi bi-database-add"></i></div>
                            จัดการแผนงานพัฒนาท้องถิ่น
                        </a> --}}

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="mt-5">
                        @yield('admin_content')
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; บริษัท GM SKY สงวนสิทธิ์ 2024</div>
                        {{-- <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
