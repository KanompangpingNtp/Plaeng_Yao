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

</style>
<main class="d-flex align-items-center justify-content-center bg-page6">
    <div class="container">
        <div class="row" style="gap: 1rem 0;">
            <div class="col-xl-7 d-flex flex-column">
                <div class="p-3 d-flex justify-content-between align-items-center gap-2" style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9));
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
                    <a href="#" class="btn btn-light fs-4 px-4" style="text-decoration: none; border-radius: 15px;">ดูทั้งหมด</a>
                </div>
                <div class="px-3 pb-5 pt-2" style="background: linear-gradient(to left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
            border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

                    @foreach($pressRelease->take(4) as $post)
                    @php
                    // ตรวจสอบว่ามีรูปภาพที่อัปโหลดมาหรือไม่
                    $imagePath = $post->photos->first()->post_photo_file ?? 'images/section-6/logo.png';
                    $imageToShow = asset('storage/' . $imagePath);
                    @endphp

                    <a href="#" style="text-decoration: none;">
                        <div class="card p-3 press-card text-black">
                            <div class="d-flex align-items-center">
                                <!-- รูปภาพด้านซ้าย -->
                                <img src="{{ $imageToShow }}" alt="รูปภาพ" class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">

                                <!-- ข้อความด้านขวา -->
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
                <div class="px-2 py-3 " style="background: linear-gradient(to left, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9));
                border-radius: 20px; ">
                    <div class="bg-white py-3 px-5 lh-1 text-center fw-bold" style="border-radius: 20px;">
                        <span class="fs-2">แบบสำรวจความคิดเห็น</span><br>
                        <span class="fs-4">องค์การบริหารส่วนตำบลแปลงยาว</span><br>

                        <!-- ตัวเลือก Radio Button เรียงลง -->
                        <div class="my-1 text-start ps-1">
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
                        <a href="#" class="bg-link-button px-4 py-1 my-1">
                            ดูทั้งหมด
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
