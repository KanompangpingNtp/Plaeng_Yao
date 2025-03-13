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

    .title-section {
        font-size: 60px;
        font-weight: bold;
        color: white;
        text-shadow:
            2px 2px 0px rgba(0, 0, 0, 0.8),
            4px 4px 5px rgba(0, 0, 0, 0.5);
    }

    .img-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .img-hover:hover {
        transform: scale(1.1);
    }

</style>
<div class="bg">
    <div class="container custom-gradient-shadow">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="fs-1 fw-bold mb-4 mt-5">โครงสร้างองค์กร</div>

            <div class="row justify-content-center mt-2">
                <div class="col-12 col-md-8 mb-4 text-center">
                    <img src="{{ asset('images/personnel_chart/1.png') }}" class="img-fluid" alt="โครงสร้างองค์กร 1">
                </div>

                <div class="col-12 col-md-8 mb-4 text-center">
                    <img src="{{ asset('images/personnel_chart/2.png') }}" class="img-fluid" alt="โครงสร้างองค์กร 2">
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
