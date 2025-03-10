@extends('admin.layout.layout')
@section('admin_content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

@php
use Carbon\Carbon;
@endphp

<style>

    .ck-editor__editable {
        min-height: 300px !important;
        height: 300px !important;
        resize: none !important;
    }

</style>

<h3 class="text-center">การประเมินคุณธรรม และความโปร่งใส (ITA) พ.ศ.{{ Carbon::now()->year + 543 }} <br>
    หัวข้อ<span class="text-primary">{{$ITAType->type_name}}</span>
</h3><br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างหัวข้อ ITA
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างหัวข้อ ITA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('ITACreate',$ITAType->id)}}" method="POST">
                @csrf
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title_name" class="form-label">ชื่อหัวข้อ</label>
                        <input type="text" class="form-control" id="title_name" name="title_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="url_name" class="form-label">ชื่อลิงค์</label>
                        <input type="text" class="form-control" id="url_name" name="url_name">
                    </div>

                    <div class="mb-3">
                        <label for="url_link" class="form-label">แนบลิงค์</label>
                        <input type="text" class="form-control" id="url_link" name="url_link">
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="รายละเอียด" id="detail" name="detail"></textarea>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<table class="table table-bordered" id="data_table">
    <thead>
        <tr>
            <th>#</th>
            <th class="text-center">หัวข้อ</th>
            <th class="text-center">URL</th>
            <th class="text-center">รายละเอียด</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ITADetails as $index => $detail)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $detail->title_name ?? 'ยังไม่มีข้อมูล' }}</td>
            <td><a href="{{ $detail->url_link }}" target="_blank" style="text-decoration: none;">{{ $detail->url_name ?? '' }} <br> {{ $detail->url_link }}</a></td>
            {{-- <td>{!! $detail->detail ?? 'N/A' !!}</td> --}}
            <td style="max-width: 300px; overflow: auto; white-space: normal;">
                {!! $detail->detail ?? 'ยังไม่มีข้อมูล' !!}
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $detail->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>
                <form action="{{ route('ITADelete', $detail->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($ITADetails as $postDetail)
<div class="modal fade" id="editModal{{ $postDetail->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <form action="{{ route('ITAUpdate', $postDetail->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $postDetail->id }}">แก้หัวข้อ ITA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="title_name" class="form-label">ชื่อหัวข้อ</label>
                        <input type="text" class="form-control" id="title_name" name="title_name" value="{{ $postDetail->title_name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="url_name" class="form-label">ชื่อลิงค์</label>
                        <input type="text" class="form-control" id="url_name" name="url_name" value="{{ $postDetail->url_name }}">
                    </div>

                    <div class="mb-3">
                        <label for="url_link" class="form-label">แนบลิงค์</label>
                        <input type="text" class="form-control" id="url_link" name="url_link" value="{{ $postDetail->url_link }}">
                    </div>

                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="รายละเอียด" id="editdetail" name="detail">{{ $postDetail->detail }}</textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector("#detail"))
            .then(editor => {
                const editable = editor.ui.view.editable.element;
                editable.style.resize = "none";
                editable.style.overflow = "auto";
            })
            .catch(error => {
                console.error("CKEditor error:", error);
            });
    });

    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector("#editdetail"))
            .then(editor => {
                const editable = editor.ui.view.editable.element;
                editable.style.resize = "none";
                editable.style.overflow = "auto";
            })
            .catch(error => {
                console.error("CKEditor error:", error);
            });
    });

</script>

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
