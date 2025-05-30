@extends('admin.layout.layout')
@section('admin_content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<h3 class="text-center">จัดการข่าวประชาสัมพันธ์</h3>

<br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างข่าวประชาสัมพันธ์
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างข่าวประชาสัมพันธ์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PressReleaseCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" name="post_type_id" value="{{ $postTypes->firstWhere('type_name', 'ข่าวประชาสัมพันธ์')->id }}">
                        <label for="date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="title_name" class="form-label">ชื่อเรื่อง</label>
                        <input type="text" class="form-control" id="title_name" name="title_name">
                    </div>

                    <div class="mb-3">
                        <label for="topic_name" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="topic_name" name="topic_name">
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">รายละเอียด</label>
                        <input type="text" class="form-control" id="details" name="details">
                    </div>

                    <div class="mb-3">
                        <label for="title_image" class="form-label">รูปหัวข้อ</label>
                        <input type="file" class="form-control" id="title_image[]" name="title_image">
                    </div>

                    <div class="mb-3">
                        <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                        <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                        <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
                        <!-- แสดงรายการไฟล์ที่แนบ -->
                        <div id="file-list" class="mt-1">
                            <div class="d-flex flex-wrap gap-3"></div>
                        </div>
                    </div>

                    <div>
                        <label for="file_video" class="form-label">แนบไฟล์วิดีโอ</label>
                        <input type="file" class="form-control" id="file_video" name="file_video">
                        <small class="text-muted">ขนาดไฟล์ต้องไม่เกิน 50MB และรองรับเฉพาะไฟล์ .mp4, .avi, .mov, .wmv</small>
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

<table class="table table-bordered text-center" id="data_table">
    <thead>
        <tr>
            <th>#</th>
            <th>วันที่</th>
            <th>ชื่อเรื่อง</th>
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($postDetails as $index => $postDetail)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $postDetail->date ?? 'N/A' }}</td>
            <td>{{ $postDetail->title_name ?? 'N/A' }}</td>
            <td>{{ $postDetail->topic_name ?? 'N/A' }}</td>
            <td>{{ $postDetail->details ?? 'N/A' }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#showFile-{{ $postDetail->id }}">
                    <i class="bi bi-database"></i>
                </button>

                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-{{ $postDetail->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="{{ route('PressReleaseDelete', $postDetail->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($postDetails as $postDetail)
<div class="modal fade" id="editModal-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel-{{ $postDetail->id }}">แก้ไขข่าวประชาสัมพันธ์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('PressReleaseUpdate', $postDetail->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="date-{{ $postDetail->id }}" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date-{{ $postDetail->id }}" name="date" value="{{ $postDetail->date }}">
                    </div>
                    <div class="mb-3">
                        <label for="title_name-{{ $postDetail->id }}" class="form-label">ชื่อเรื่อง</label>
                        <input type="text" class="form-control" id="title_name-{{ $postDetail->id }}" name="title_name" value="{{ $postDetail->title_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="topic_name-{{ $postDetail->id }}" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="topic_name-{{ $postDetail->id }}" name="topic_name" value="{{ $postDetail->topic_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="details-{{ $postDetail->id }}" class="form-label">รายละเอียด</label>
                        <textarea class="form-control" id="details-{{ $postDetail->id }}" name="details">{{ $postDetail->details }}</textarea>
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
@endforeach

@foreach ($postDetails as $postDetail)
<div class="modal fade" id="showFile-{{ $postDetail->id }}" tabindex="-1" aria-labelledby="showFileLabel-{{ $postDetail->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="showFileLabel-{{ $postDetail->id }}">แสดงไฟล์</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('updateFile', $postDetail->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- ถ้าเป็นการแก้ไขข้อมูล -->

                    <div class="modal-body">
                        <!-- แสดงรูปภาพ -->
                        <h5>รูปภาพ</h5>
                        @if($postDetail->photos->isNotEmpty())
                        <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            @foreach($postDetail->photos as $photo)
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                <img src="{{ asset('storage/' . $photo->post_photo_file) }}" alt="Image" style="width:100px; height:100px; object-fit:cover; margin-bottom:10px;">
                                <label for="delete_photo_{{ $photo->id }}">ลบ</label>
                                <input type="checkbox" name="delete_photo[]" id="delete_photo_{{ $photo->id }}" value="{{ $photo->id }}">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p>ไม่มีรูปภาพ</p>
                        @endif

                        <br>

                        <!-- แสดงวิดีโอ -->
                        <h5>วิดีโอ</h5>
                        @if($postDetail->videos->isNotEmpty())
                        <div>
                            @foreach($postDetail->videos as $video)
                            <div>
                                <video width="320" height="240" controls>
                                    <source src="{{ asset('storage/' . $video->post_video_file) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <label for="delete_video_{{ $video->id }}">ลบ</label>
                                <input type="checkbox" name="delete_video[]" id="delete_video_{{ $video->id }}" value="{{ $video->id }}">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <p>ไม่มีวิดีโอ</p>
                        @endif

                        <br>

                        <!-- แสดงไฟล์ PDF -->
                        <h5>ไฟล์ PDF</h5>
                        @if($postDetail->pdfs->isNotEmpty())
                        <ul>
                            @foreach($postDetail->pdfs as $pdf)
                            <li>
                                <a href="{{ asset('storage/' . $pdf->post_pdf_file) }}" target="_blank">{{ basename($pdf->post_pdf_file) }}</a>
                                <label for="delete_pdf_{{ $pdf->id }}">ลบ</label>
                                <input type="checkbox" name="delete_pdf[]" id="delete_pdf_{{ $pdf->id }}" value="{{ $pdf->id }}">
                            </li>
                            @endforeach
                        </ul>
                        @else
                        <p>ไม่มีไฟล์ PDF</p>
                        @endif

                        <br>

                        <!-- ฟอร์มอัปโหลดไฟล์ใหม่ -->
                        <h4 class="text-center">อัปโหลดไฟล์ใหม่ (หากต้องการเปลี่ยนไฟล์เดิมให้เลือกไฟล์ที่มีอยู่แล้วตรงนี้ และอัพโหลดไฟล์ใหม่)</h4>
                        <div class="mb-3">
                            <label for="file_post" class="form-label">แนบไฟล์ภาพและPDF</label>
                            <input type="file" class="form-control" id="file_post" name="file_post[]" multiple>
                            <small class="text-muted">ประเภทไฟล์ที่รองรับ: jpg, jpeg, png, pdf (ขนาดไม่เกิน 10MB)</small>
                            <!-- แสดงรายการไฟล์ที่แนบ -->
                            <div id="file-list" class="mt-1">
                                <div class="d-flex flex-wrap gap-3"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="file_video" class="form-label">อัปโหลดวิดีโอ</label>
                            <input type="file" class="form-control" id="file_video" name="file_video">
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
</div>
@endforeach


<script src="{{ asset('js/multipart_files.js') }}"></script>
<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
