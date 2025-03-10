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
            0 0 50px -10px rgba(158, 255, 3, 0.8),
            0 0 50px -10px rgba(72, 255, 0, 0.8);
        background-color: #ffffff;
    }

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center p-5 ">
            <div class="fs-1 fw-bold text-center">ข้อมูลสภาพทั่วไป</div>

            <style>
                .a4-size {
                    width: 894px;
                    height: 1123px;
                    object-fit: contain;
                }
            </style>

            <div class="d-flex justify-content-center align-items-center vh-100">
                <img src="{{ asset('images/test/messageImage_1741588119967.jpg') }}" class="a4-size" alt="">
            </div>


        </div>
    </div>
</div>
@endsection
