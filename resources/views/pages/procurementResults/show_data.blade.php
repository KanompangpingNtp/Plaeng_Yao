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
            <div class="fs-1 fw-bold mb-4 text-center">ผลประกาศจัดซื้อจัดจ้างประจำปี</div>

            <div class="mt-5">
                <form action="{{route('ProcurementResultsSearchData')}}" method="GET" class="d-flex justify-content-end">
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

            <style>
                .table td:hover {
                    background-color: #28a745;
                    color: white;
                }

                table {
                    border-collapse: collapse;
                }

                table td,
                table th {
                    border: none;
                }

                table tr:nth-child(odd) {
                    background-color: #dcf5bc;
                }

                table tr:nth-child(even) {
                    background-color: #ffffff;
                }

                a {
                    text-decoration: none;
                    color: #333;
                }

            </style>

            <table class="table">
                @foreach($ProcurementResults as $detail)
                <tr>
                    <td><a href="{{route('ProcurementResultsDetail',$detail->id)}}">{{ $detail->title_name }}</a></td>
                </tr>
                @endforeach
            </table>

            @if($ProcurementResults && $ProcurementResults->count() > 0)
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <!-- Previous button -->
                    <li class="page-item {{ $ProcurementResults->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $ProcurementResults->previousPageUrl() }}">ก่อนหน้า</a>
                    </li>

                    <!-- Page number buttons -->
                    @foreach ($ProcurementResults->getUrlRange(1, $ProcurementResults->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $ProcurementResults->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Next button -->
                    <li class="page-item {{ !$ProcurementResults->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $ProcurementResults->nextPageUrl() }}">ต่อไป</a>
                    </li>
                </ul>
            </nav>
            @endif

        </div>
    </div>
</div>
@endsection
