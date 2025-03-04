<style>
    .bg-page6 {
        background-image: url('{{ asset('images/section-6/bg-7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .press-card {
        background-color: transparent !important;
        border: 0px solid black;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        /* ให้เอฟเฟกต์เปลี่ยนสีพื้นหลังนุ่มนวล */
    }

    .press-card:hover {
        background-color: rgba(0, 0, 0, 0.5) !important;
        /* พื้นหลังสีดำโปร่งแสงเมื่อ hover */
        color: white;
        /* เปลี่ยนสีตัวอักษรเป็นสีขาวเพื่อให้อ่านง่ายขึ้น */
    }

    .press-card:hover .card-text {
        color: #f1f1f1;
        /* เปลี่ยนสีข้อความเมื่อ hover */
    }

    .bg-link-button6 {
        background: linear-gradient(to bottom, #d0f06d, #4f8506);
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.9);
        border-radius: 5px;
        text-decoration: none;
        color: #ffffff;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .bg-link-button6:hover {
        background: linear-gradient(to top, #4f8506, #d0f06d);
        /* เปลี่ยนสีเมื่อ hover */
        box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.7);
        /* ทำให้เงาลึกขึ้น */
        transform: scale(1.05);
        /* ขยายขนาดเล็กน้อย */
    }
</style>
<main class="d-flex align-items-center justify-content-center bg-page6">
    <div class="container">
        <div class="row" style="gap: 1rem 0;">
            <div class="col-xl-7 d-flex flex-column">
                <div class="p-3 d-flex flex-column flex-md-row justify-content-between align-items-center gap-2" style="background: linear-gradient(to bottom, #d1f26d, #4c8305);
                           border-top-left-radius: 30px; border-top-right-radius: 30px;">

                    <!-- ส่วนข้อความและโลโก้ -->
                    <div class="d-flex align-items-center lh-1 ps-4 pe-5 py-2" style="background: linear-gradient(to left, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.8));
                               border-radius: 50px;">

                        <div class="fw-bold d-flex flex-column justify-content-center align-items-start">
                            <span class="fs-2 fw-bold">ข่าวประชาสัมพันธ์</span>
                            <span class="fs-4">องค์การบริหารส่วนตำบลแปลงยาว</span>
                        </div>

                        <img src="{{ asset('images/section-6/public-relations.png') }}" alt="logo" class="ms-2" style="width: 50px; height: auto;">
                    </div>

                    <!-- ปุ่มดูทั้งหมด -->
                    <a href="{{route('PressReleaseShowData')}}" class="btn btn-light fs-5 px-3" style="text-decoration: none; border-radius: 15px;">ดูทั้งหมด</a>
                </div>
                <div class="px-3 pb-5 pt-2" style="background: linear-gradient(to left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
            border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

                    @foreach($pressRelease->take(4) as $post)
                    {{-- @php
                    $imagePath = $post->photos->first()->post_photo_file ?? 'images/section-6/logo.png';
                    $imageToShow = asset('storage/' . $imagePath);
                    @endphp --}}

                    <a href="{{route('PressReleaseShowDetails',$post->id)}}" style="text-decoration: none;">
                        <div class="card p-3 press-card text-black">
                            <div class="d-flex align-items-center">

                                <img src="{{ isset($post->photos->first()->post_photo_file) ? asset('storage/' . $post->photos->first()->post_photo_file) : asset('images/navbar/Logo-601.png') }}"
                                    alt="รูปภาพ" class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">

                                <div class="flex-grow-1">
                                    <div class="card-text">
                                        {{ Str::limit($post->title_name, 120, '...') }}
                                    </div>
                                    <div class="card-text text-muted">
                                        <img src="{{ asset('images/section-6/clock.png') }}" alt="icon" class="me-1" width="18">
                                        {{ \Carbon\Carbon::parse($post->date)->format('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>

            <div class="col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <div class="px-2 py-3 " style="background: linear-gradient(to top, #497f01, #92b428, #497f01);
                border-radius: 20px; ">
                    <div class="bg-white py-3 px-5 lh-1 text-center fw-bold" style="border-radius: 20px;">
                        <span class="fs-2">แบบสำรวจความคิดเห็น</span><br>
                        <span class="fs-4">องค์การบริหารส่วนตำบลแปลงยาว</span><br>

                        <!-- ตัวเลือก Radio Button เรียงลง -->
                        <div class="mt-2 mb-3 text-start ps-1">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="survey" value="option1">
                                <label class="form-check-label pt-1">ตัวเลือกที่ 1</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="survey" value="option2">
                                <label class="form-check-label pt-1">ตัวเลือกที่ 2</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="survey" value="option3">
                                <label class="form-check-label pt-1">ตัวเลือกที่ 3</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="survey" value="option4">
                                <label class="form-check-label pt-1">ตัวเลือกที่ 4</label>
                            </div>
                        </div>
                        <a href="#" class="bg-link-button6 px-4 py-1 my-3">
                            กดโหวต
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center mt-3" style="gap: 1rem 0;">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{asset('images/section-6/ช่องทางติดต่อกองคลัง.png')}}" alt="xx">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{asset('images/section-6/ช่องทางชำระค่าทำเนียม.png')}}" alt="xx">
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{asset('images/section-6/ช่องทางline.png')}}" alt="xx">
                    </div>
                </div>

            </div>
        </div>
    </div>



</main>
