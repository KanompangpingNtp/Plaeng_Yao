@extends('layouts.sub-layout')
@section('content')
<style>
    .bg {
        background-image: url('{{ asset('images/section-3/bg-4.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .custom-gradient-shadow {
        border-radius: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2),
            0 0 40px -10px rgba(0, 100, 0, 0.6),
            /* เงาสีเขียวเข้ม */
            0 0 40px -10px rgba(50, 205, 50, 0.6);
        /* เงาสีเขียวอ่อน */
        background-color: #ffffff;
    }

    /* ปรับแต่งการ์ด */
    .custom-card {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        cursor: pointer;
    }

    /* Hover Effect: ทำให้เด่นขึ้น */
    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* กำหนดขนาดรูปภาพให้เท่ากัน */
    .image-container {
        width: 100%;
        height: 220px;
        /* ปรับความสูงที่ต้องการ */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* ให้รูปภาพเต็มพื้นที่และตัดส่วนที่เกิน */
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* Hover Effect: ซูมรูปภาพเบาๆ */
    .custom-card:hover .image-container img {
        transform: scale(1.1);
    }

    /* ปรับแต่งเนื้อหาในการ์ด */
    .card-body {
        background: #fff;
        padding: 15px;
        border-top: 2px solid #46c700;
        /* เส้นสีฟ้าที่ด้านบน */
    }

    .card-title {
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-bottom: 0;
        transition: color 0.3s ease;
    }

    /* Hover Effect: เปลี่ยนสีข้อความ */
    .custom-card:hover .card-title {
        color: #77b329;
    }

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center p-5">
            <div class="fs-1 fw-bold mb-4 text-center" style="color: #77b329;">ข่าวประชาสัมพันธ์ <br><span class="fs-3">{{$pressRelease->title_name}}</div>

            <p class="text-muted">วันที่เผยแพร่: {{ \Carbon\Carbon::parse($pressRelease->date)->format('d-m-Y') }}</p>

            <div class="mb-4">
                <h5 class="text-secondary">รายละเอียด</h5>
                <p>{{ $pressRelease->details ?? 'ไม่มีรายละเอียด' }}</p>
            </div>

            @php
            // รีเซ็ต index ให้แน่นอน
            $photos = $pressRelease->photos->where('post_photo_status', '2')->values();
            @endphp

            @if ($photos->count() > 0)
            <h5 class="text-secondary">รูปภาพ</h5>
            <div class="row">
                @foreach ($photos as $index => $photo)
                <div class="col-lg-1 col-md-2 col-sm-3 col-4 mb-3 text-center">
                    <img src="{{ asset('storage/' . $photo->post_photo_file) }}" class="img-thumbnail rounded shadow-sm" alt="รูปแนบ" style="max-width: 100px; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#photoModal" data-bs-slide-to="{{ $index }}">
                </div>
                @endforeach
            </div>

            <!-- Modal แสดงภาพแบบ Carousel -->
            <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div id="carouselPhotos" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($photos as $index => $photo)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ asset('storage/' . $photo->post_photo_file) }}" class="d-block w-100 rounded">
                                    </div>
                                    @endforeach
                                </div>

                                <!-- ปุ่ม Previous -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhotos" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                                </button>

                                <!-- ปุ่ม Next -->
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselPhotos" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(100%);"></span>
                                </button>

                                <!-- ปรับสไตล์ปุ่ม -->
                                <style>
                                    .carousel-control-prev,
                                    .carousel-control-next {
                                        width: 40px;
                                        /* ความกว้างของปุ่ม */
                                        height: 40px;
                                        /* ความสูงของปุ่ม */
                                        background-color: #007bff;
                                        /* พื้นหลังปุ่ม */
                                        border-radius: 5px;
                                        /* มุมปุ่มสี่เหลี่ยมมน */
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        border: none;
                                        /* เอาขอบปุ่มออก */
                                        position: absolute;
                                        top: 50%;
                                        transform: translateY(-50%);
                                        z-index: 1050;
                                    }

                                    .carousel-control-prev {
                                        left: 10px;
                                        /* ระยะห่างจากซ้าย */
                                    }

                                    .carousel-control-next {
                                        right: 10px;
                                        /* ระยะห่างจากขวา */
                                    }

                                    .carousel-control-prev-icon,
                                    .carousel-control-next-icon {
                                        width: 20px;
                                        /* ขนาดไอคอน */
                                        height: 20px;
                                        /* ขนาดไอคอน */
                                    }

                                    /* เปลี่ยนสีเมื่อ hover */
                                    .carousel-control-prev:hover,
                                    .carousel-control-next:hover {
                                        background-color: #0056b3;
                                        /* เปลี่ยนสีพื้นหลังเมื่อ hover */
                                    }

                                    /* เปลี่ยนสีเมื่อ active */
                                    .carousel-control-prev:active,
                                    .carousel-control-next:active {
                                        background-color: #003f7f;
                                        /* เปลี่ยนสีพื้นหลังเมื่อ active */
                                    }

                                </style>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- ไฟล์แนบ: PDF -->
            @if ($pressRelease->pdfs->count() > 0)
            <h5 class="text-secondary mt-4">ไฟล์เอกสาร</h5>
            @foreach ($pressRelease->pdfs as $pdf)
            <div class="mb-3">
                <iframe src="{{ asset('storage/' . $pdf->post_pdf_file) }}" width="100%" height="700px"></iframe>
            </div>
            @endforeach
            @endif

            <!-- วิดีโอแนบ -->
            @if ($pressRelease->videos->count() > 0)
            <h5 class="text-secondary mt-4">วิดีโอ</h5>
            @foreach ($pressRelease->videos as $video)
            <div class="mb-4">
                <video width="500" height="300" controls>
                    <source src="{{ asset('storage/' . $video->post_video_file) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</div>
@endsection
