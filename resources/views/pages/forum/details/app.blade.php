@extends('layouts.sub-layout')
@section('title', 'Forum')
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

        .forum-card {
            border: 1px solid #1dac01;
            /* กำหนดเส้นขอบที่ถูกต้อง */
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            /* ลบขีดเส้นใต้ */
            color: inherit;
            /* ให้สีตัวอักษรไม่เปลี่ยน */
            display: block;
            /* ทำให้คลิกได้เต็มพื้นที่ */
        }


        .forum-card:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .forum-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
        }

        .hidden-img {
            display: none;
        }
    </style>

    <div class="bg py-5">
        <div class="container py-5 custom-gradient-shadow">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3">
                <p class="fs-2 fw-bold text-center mb-0">หัวข้อ</p> <!-- แก้ไข mb-0 เพื่อไม่ให้มี margin ด้านล่าง -->
            </div>


        </div>
    </div>
@endsection
