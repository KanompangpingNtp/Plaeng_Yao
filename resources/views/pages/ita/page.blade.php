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

@php
    use Carbon\Carbon;
@endphp

<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center align-items-center p-5 ">
            <div class="fs-1 fw-bold mb-4 text-center">การประเมินคุณธรรม และความโปร่งใส (ITA) พ.ศ.{{ Carbon::now()->year + 543 }} </div><br>

            <table class="table table-bordered table-striped" style="font-size: 16px;">
                <thead>
                    @foreach($showITA as $type)
                        <!-- แสดงหัวข้อหลักตาม type_name -->
                        <tr>
                            <th colspan="4" class="text-center bg-success"><span style="color: white;">{{ $type->type_name ?? 'ไม่มีข้อมูล' }}</span></th>
                        </tr>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">ข้อ</th>
                            <th class="text-center">URL</th>
                            <th class="text-center">คำอธิบาย</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach($type->itADetails as $index => $detail)
                    {{-- @forelse ($ITADetails as $index => $detail) --}}
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $detail->title_name ?? 'N/A' }}</td>
                            <td class="col-md-4"><a href="{{ $detail->url_link ?? '#' }}" target="_blank" style="text-decoration: none;">{{ $detail->url_name ?? '' }} <br> {{ $detail->url_link }}</a></td>
                            <td style="max-width: 300px; overflow: auto; white-space: normal;">
                                {!! $detail->detail ?? 'N/A' !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @endforeach
            </table>

            <style>
                /* ปรับขนาดแถบเลื่อนในแนวนอน */
                td::-webkit-scrollbar {
                    height: 8px; /* ความสูงของแถบเลื่อนแนวนอน */
                }

                td::-webkit-scrollbar-thumb {
                    background-color: #888; /* สีของแถบเลื่อน */
                    border-radius: 10px; /* มุมโค้งของแถบเลื่อน */
                }

                td::-webkit-scrollbar-thumb:hover {
                    background-color: #46c700; /* สีแถบเลื่อนเมื่อเมาส์ชี้ไป */
                }

                td::-webkit-scrollbar-track {
                    background: #f1f1f1; /* สีพื้นหลังของแทร็กแถบเลื่อน */
                    border-radius: 10px;
                }
            </style>

        </div>
    </div>
</div>
@endsection
