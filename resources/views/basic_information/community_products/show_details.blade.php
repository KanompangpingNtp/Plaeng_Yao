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
        <div class=" d-flex flex-column justify-content-center p-5">
            <div class="fs-1 fw-bold mb-4 text-center">ผลิตภัณฑ์ชุมชน/OTOP</div>


                    <h5 class="card-title"><strong>ชื่อผลิตภัณฑ์</strong> {{ $listDetail->list_details_name }}</h5>
                    <p class="card-text">{!! $listDetail->details ?? 'ไม่มีข้อมูล' !!}</p>

                    @if ($listDetail->images->isNotEmpty())
                        <div class="row">
                            @foreach ($listDetail->images as $image)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $image->images_file) }}" class="img-fluid rounded">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted"></p>
                    @endif
        </div>
    </div>
</div>


@endsection
