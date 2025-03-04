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
            <div class="fs-1 fw-bold mb-4 text-center">ข่าวประชาสัมพันธ์</div>

            <div>
                <form action="{{route('PressReleaseSearchData')}}" method="GET" class="d-flex justify-content-end">
                    <div class="input-group mb-3" style="width: 50%;">
                        <input type="text" class="form-control" placeholder="ค้นหาข้อมูล..." name="query" value="{{ request()->query('query') }}">
                        <button class="btn btn-success" type="submit">ค้นหา</button>
                    </div>
                </form>
            </div>

            <!-- ผลลัพธ์การค้นห -->
            @if (request()->query('query'))
            <p>ผลการค้นหาสำหรับ: <strong>{{ request()->query('query') }}</strong></p>
            @else
            <p>แสดงข้อมูลทั้งหมด</p>
            @endif

            <div class="row">
                @foreach ($pressRelease as $index => $post)
                @php
                // กำหนดคลาสพื้นหลังสลับสี
                $cardBackgroundClass = ($index % 2 == 0) ? 'bg-blue-card-section-6' : 'bg-pink-card-section-6';
                @endphp
                <div class="col-lg-6 p-2">
                    <a href="{{ route('PressReleaseShowDetails', $post->id) }}" class="text-decoration-none">
                        <div class="d-flex align-items-center p-3 {{ $cardBackgroundClass }}" style="height: 150px; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); display: block;">

                            <!-- รูปภาพด้านซ้าย -->
                            <div style="flex: 0 0 100px; height: 100px; overflow: hidden; border-radius: 10px;">
                                {{-- <img src="{{ asset('storage/' . ($post->photos->first()->post_photo_file ?? 'images/default.jpg')) }}" alt="Image {{ $index + 1 }}" style="width: 100%; height: 100%; object-fit: cover;"> --}}
                                <img src="{{
                                    $post->photos->first() && $post->photos->first()->post_photo_file
                                    ? asset('storage/' . $post->photos->first()->post_photo_file)
                                    : asset('images/navbar/Logo-601.png')
                                }}" alt="Image {{ $index + 1 }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- ข้อความด้านขวา -->
                            <div class="ms-3 bg-white h-100 rounded p-1" style="flex: 1; position: relative; height: 100%;">
                                <div class="card-text text-dark">
                                    {{ Str::limit($post->title_name ?? 'No Title', 60, '...') }}
                                </div>
                                <div class="card-date d-flex align-items-center">
                                    <img src="{{ asset('images/hourglass.png') }}" alt="icon" width="15" height="20" class="me-2">
                                    <div class="card-text text-dark">
                                        {{ \Carbon\Carbon::parse($post->date)->format('d-m-Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            @if($pressRelease && $pressRelease->count() > 0)
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <!-- Previous button -->
                    <li class="page-item {{ $pressRelease->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $pressRelease->previousPageUrl() }}">ก่อนหน้า</a>
                    </li>

                    <!-- Page number buttons -->
                    @foreach ($pressRelease->getUrlRange(1, $pressRelease->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $pressRelease->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Next button -->
                    <li class="page-item {{ !$pressRelease->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $pressRelease->nextPageUrl() }}">ต่อไป</a>
                    </li>
                </ul>
            </nav>
            @endif

        </div>

    </div>
</div>
</div>
@endsection
