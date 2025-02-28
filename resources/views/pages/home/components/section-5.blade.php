<style>
    .bg-page5 {
        background-image: url('{{ asset('images/section-5/bg-6.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.6);
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: rgba(231, 231, 231, 0.9);
    }

    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        transform: translateY(-50%);
        width: 60px;
        height: 60px;
    }

    .carousel-control-prev-icon::before,
    .carousel-control-next-icon::before {
        font-size: 30px;
        font-weight: bold;
    }

    .carousel-control-prev {
        left: -20px;
    }

    .carousel-control-next {
        right: -20px;
    }

    @media (max-width: 768px) {

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
        }

        .carousel-control-prev-icon::before,
        .carousel-control-next-icon::before {
            font-size: 20px;
        }

    }

    .img-container {
        width: 100%;
        height: 270px;
        overflow: hidden;
        background-color: #ffff;
        border-radius: 20px;

    }

    .img-container img {
        width: 100%;
        /* ปรับให้รูปกว้างเต็ม container */
        height: 100%;
        /* ปรับให้รูปสูงเต็ม container */
        object-fit: cover;
        /* ให้รูปพอดีกับ container โดยไม่บิดเบือน */
        object-position: center;
        /* ตำแหน่งของรูปภายใน container */
    }

    .bg-card-section-5 {
        background: linear-gradient(to top, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8), rgba(5, 143, 0, 0.8));
        box-shadow: 2px 2px 8px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        text-decoration: none;
        color: #000;
        padding: 1rem;
        transition: all 0.3s ease;
    }

    .bg-card-section-5:hover {
        transform: scale(1.02);
    }

    .bg-card-section-5 img {
        transition: all 0.3s ease;
    }

    .bg-card-section-5:hover img {
        transform: rotate(5deg) scale(1.01);
    }

    .bg-link-button {
        background: linear-gradient(to top, rgba(5, 143, 0, 0.8), rgba(135, 255, 36, 0.8));
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
        border-radius: 20px;
        text-decoration: none;
        color: #ffffff;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .bg-link-button:hover {
        background: linear-gradient(to top, rgba(0, 100, 0, 0.8), rgba(255, 255, 0, 0.8));
        /* เปลี่ยนสีเมื่อ hover */
        box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.7);
        /* ทำให้เงาลึกขึ้น */
        transform: scale(1.05);
        /* ขยายขนาดเล็กน้อย */
    }

    .carousel-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        max-width: 600px;
        /* กำหนดขนาดคอนเทนเนอร์ */
        margin: auto;
    }

    .carousel-image {
        width: 100%;
        /* ปรับความกว้างของรูปให้เท่ากับคอนเทนเนอร์ */
        height: 400px;
        /* กำหนดความสูงของรูป */
        object-fit: cover;
        /* ปรับรูปภาพให้พอดีคอนเทนเนอร์ */
        border-radius: 10px;
        /* ทำให้มุมมน (ถ้าต้องการ) */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        /* เพิ่มเงา */
    }

    .carousel-buttons {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        background-color: #ffffff;
        border-radius: 30px;
    }

    .carousel-button {
        background: transparent;
        border: none;
        cursor: pointer;
        font-size: 2rem;
        /* ขนาดไอคอน */
        color: rgba(5, 143, 0, 0.8);
        /* สีไอคอน */
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .carousel-button:hover {
        color: rgba(135, 255, 36, 0.8);
        /* เปลี่ยนสีเมื่อ hover */
        transform: scale(1.1);
        /* ขยายขนาดไอคอนเมื่อ hover */
    }

    #carousel-caption {
        font-size: 2rem;
        text-align: center;
        color: #000000;
        /* สีข้อความ */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page5">
    <div class="container py-5">
        <div class="d-flex flex-column align-items-start justify-content-center mb-3  lh-1"
            style="text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);">
            <div class=" fs-1 fw-bold text-light ">
                ข่าวกิจกรรม <img src="{{ asset('images/section-5/news.png') }}" alt="icon">
            </div>
            <div class="fs-3  text-light">
                องค์การบริหารส่วนตำบลแปลงยาว
            </div>
        </div>
        <div class="container d-flex align-items-start justify-content-center ">
            <div class="d-flex flex-column align-items-center justify-content-center ">
                <div id="cardCarousel1" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">

                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @foreach ($activity->chunk(3) as $key => $chunkedActivities)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }} py-2 px-5">
                                <div class="row">
                                    @foreach ($chunkedActivities as $post)
                                        <div class="col-4" id="card-carousel">
                                            <a href="#" class="text-decoration-none text-dark">
                                                <div class="card bg-card-section-5">
                                                    <div class="img-container">
                                                        <?php
                                                        $imageToShow = $post->photos->isNotEmpty()
                                                            ? asset('storage/' . $post->photos->first()->post_photo_file)
                                                            : asset('images/section-5/logo.png');
                                                        ?>
                                                        <img src="{{ $imageToShow }}" class="card-img-top" alt="Post Image">
                                                    </div>
                                                    <div class="card-body bg-white mt-2" style="border-radius: 20px;">
                                                        <h5 class="card-title" style="font-size: 18px;">
                                                            {{ $post->title_name }}
                                                        </h5>
                                                        <p class="card-text text-muted" style="font-size: 16px;">
                                                            {{ Str::limit($post->details, 90, '...') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel1" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div id="cardCarousel2" class="carousel slide d-none d-md-block d-lg-none" data-bs-ride="carousel">

                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @for ($i = 0; $i < 3; $i++) <!-- จำนวนหน้าสไลด์ที่ต้องการ -->
                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }} py-2 px-3">
                                <div class="row">
                                    @for ($j = 1; $j <= 2; $j++) <!-- จำนวนการ์ดที่ต้องการแสดงในแต่ละสไลด์ -->
                                        <div class="col-6" id="card-carousel"> <!-- เปลี่ยนจาก col-4 เป็น col-6 -->
                                            <a href="#" class="text-decoration-none text-dark">
                                                <div class="card bg-card-section-5">
                                                    <div class="img-container">
                                                        <?php
                                                        $imagePath = public_path('images/section-5/logo.png'); // ไฟล์ที่ต้องการตรวจสอบ
                                                        $defaultImage = asset('images/section-5/logo.png'); // ไฟล์สำรอง
                                                        $imageToShow = file_exists($imagePath) ? asset('images/section-5/logo.png') : $defaultImage;
                                                        ?>
                                                        <img src="{{ $imageToShow }}" class="card-img-top" alt="Default Image">
                                                    </div>

                                                    <div class="card-body bg-white mt-2" style=" border-radius: 20px;">
                                                        <h5 class="card-title" style="font-size: 18px;">
                                                            {{ $i * 2 + $j }} <!-- เปลี่ยนเลขให้แสดงผลเหมาะสม -->
                                                            <?php
                                                            $text = 'This is card number with sample text. This text might be too long for the card.';
                                                            echo mb_strimwidth($text, 0, 50, '...');
                                                            ?>
                                                        </h5>
                                                        <p class="card-text text-muted" style="font-size: 16px;">
                                                            <?php
                                                            $text = 'This is card number with sample text. This text might be too long for the card.';
                                                            echo mb_strimwidth($text, 0, 90, '...');
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div id="cardCarousel3" class="carousel slide d-md-none" data-bs-ride="carousel">
                    <!-- Carousel Items -->
                    <div class="carousel-inner">
                        @for ($i = 0; $i < 3; $i++)
                            <!-- จำนวนหน้าสไลด์ที่ต้องการ -->
                            <div class="carousel-item {{ $i === 0 ? 'active' : '' }} py-2 px-5">
                                <div class="row justify-content-center">
                                    <!-- จำนวนการ์ดที่ต้องการแสดงในแต่ละสไลด์ = 1 การ์ด -->
                                    <div class="col-12 col-md-4" id="card-carousel">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <div class="card bg-card-section-5">
                                                <div class="img-container">
                                                    <?php
                                                    $imagePath = public_path('images/section-5/logo.png'); // ไฟล์ที่ต้องการตรวจสอบ
                                                    $defaultImage = asset('images/section-5/logo.png'); // ไฟล์สำรอง
                                                    $imageToShow = file_exists($imagePath) ? asset('images/section-5/logo.png') : $defaultImage;
                                                    ?>
                                                    <img src="{{ $imageToShow }}" class="card-img-top" alt="Default Image">
                                                </div>

                                                <div class="card-body bg-white mt-2" style=" border-radius: 20px;">
                                                    <h5 class="card-title" style="font-size: 18px;">
                                                        {{ $i * 1 + 1 }} <!-- แสดงการ์ดเดียว -->
                                                        <?php
                                                        $text = 'This is card number  with sample text. This text might be too long for the card.';
                                                        echo mb_strimwidth($text, 0, 50, '...');
                                                        ?>
                                                    </h5>
                                                    <p class="card-text text-muted" style="font-size: 16px;">
                                                        <?php
                                                        $text = 'This is card number with sample text. This text might be too long for the card.';
                                                        echo mb_strimwidth($text, 0, 90, '...');
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="d-flex align-items-center justify-content-end mt-3 fs-3 fw-bold w-100">
                    <a href="#" class="bg-link-button px-4 py-1">
                        ดูทั้งหมด
                    </a>
                </div>
            </div>

        </div>
        <hr style=" border: none; border-top: 2px solid white; margin: 1rem 0;  width: 100%;">
        <div class="container d-flex flex-column flex-lg-row ">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column align-items-start justify-content-center mb-3  lh-1"
                    style="text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);">
                    <div class=" fs-1 fw-bold text-light ">
                        แนะนำสถานที่ <img src="{{ asset('images/section-5/branch.png') }}" alt="icon">
                    </div>
                    <div class="fs-3  text-light">
                        องค์การบริหารส่วนตำบลแปลงยาว
                    </div>
                    <div class="d-flex align-items-center justify-content-start mt-3 fs-3 fw-bold w-100">
                        <a href="#" class="bg-link-button px-4 py-1">
                            ดูสถานที่ทั้งหมด
                        </a>
                    </div>
                </div>

            </div>
            {{-- <div class="carousel-container">
                <img id="carousel-image" class="carousel-image" src="{{ asset('images/section-5/image1.png') }}"
                    alt="Image 1">

                <div class="carousel-buttons mt-3">
                    <button class="carousel-button prev-button mt-2" onclick="prevImage()">
                        <i class="fa-solid fa-circle-chevron-left"></i>
                    </button>

                    <div id="carousel-caption">บ้านใหญ่</div>

                    <button class="carousel-button next-button mt-2" onclick="nextImage()">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>

            </div> --}}
            <div class="carousel-container">
                {{-- @php
                    $firstPlace = $recommendPlaces->first();
                    $firstImage = $firstPlace && $firstPlace->photos->isNotEmpty()
                        ? asset('storage/' . $firstPlace->photos->first()->post_photo_file)
                        : asset('images/default.png');
                    $firstCaption = $firstPlace->topic_name ?? 'No Caption';
                @endphp --}}
                @php
$firstPlace = $recommendPlaces->first();
$firstImage = $firstPlace && $firstPlace->photos->isNotEmpty()
    ? asset('storage/' . $firstPlace->photos->first()->post_photo_file)
    : asset('images/navbar/Logo-601.png');
$firstCaption = $firstPlace->topic_name ?? 'No Caption';
@endphp

<img id="carousel-image" class="carousel-image" src="{{ $firstImage }}" alt="{{ $firstCaption }}">

                <div class="carousel-buttons mt-3">
                    <button class="carousel-button prev-button mt-2" onclick="prevImage()">
                        <i class="fa-solid fa-circle-chevron-left"></i>
                    </button>

                    <div id="carousel-caption">{{ $firstCaption }}</div>

                    <button class="carousel-button next-button mt-2" onclick="nextImage()">
                        <i class="fa-solid fa-circle-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const images = @json($recommendPlaces->map(function ($place) {
            return [
                'src' => $place->photos->isNotEmpty()
                    ? asset('storage/' . $place->photos->first()->post_photo_file)
                    : asset('images/navbar/Logo-601.png'), // ใช้ภาพเริ่มต้นถ้าไม่มีรูป
                'caption' => $place->topic_name ?? 'No Caption',
            ];
        })->toArray()); // ใช้ toArray() เพื่อให้ JavaScript ใช้งานได้

        let currentIndex = 0;

        function updateCarousel() {
            const imageElement = document.getElementById('carousel-image');
            const captionElement = document.getElementById('carousel-caption');

            if (images.length > 0) {
                imageElement.src = images[currentIndex].src || '{{ asset('images/navbar/Logo-601.png') }}'; // ป้องกันค่าที่ว่าง
                imageElement.alt = images[currentIndex].caption || 'No Caption';
                captionElement.textContent = images[currentIndex].caption || 'No Caption';
            } else {
                // กรณีไม่มีข้อมูลเลย ใช้ภาพเริ่มต้น
                imageElement.src = '{{ asset('images/navbar/Logo-601.png') }}';
                imageElement.alt = 'No Caption';
                captionElement.textContent = 'No Caption';
            }
        }

        function prevImage() {
            if (images.length > 0) {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateCarousel();
            }
        }

        function nextImage() {
            if (images.length > 0) {
                currentIndex = (currentIndex + 1) % images.length;
                updateCarousel();
            }
        }

        window.onload = updateCarousel; // โหลดภาพแรกให้แน่ใจว่าแสดงจากลำดับที่กำหนด
    </script>

    {{-- <script>
        const images = @json($recommendPlaces->map(function ($place) {
            return [
                'src' => asset('storage/' . ($place->photos->first()->post_photo_file ?? 'images/default.png')),
                'caption' => $place->topic_name,
            ];
        }));

        let currentIndex = 0;

        function updateCarousel() {
            const imageElement = document.getElementById('carousel-image');
            const captionElement = document.getElementById('carousel-caption');

            if (images.length > 0) {
                imageElement.src = images[currentIndex].src;
                imageElement.alt = images[currentIndex].caption;
                captionElement.textContent = images[currentIndex].caption;
            }
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateCarousel();
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        }

        // โหลดภาพแรกให้แน่ใจว่าแสดงจากลำดับที่กำหนด
        window.onload = updateCarousel;
    </script> --}}

    {{-- <script>
        const images = [{
                src: "{{ asset('images/section-5/image1.png') }}",
                caption: "บ้านใหญ่"
            },
            {
                src: "{{ asset('images/section-5/image2.png') }}",
                caption: "ยักดำพวงมาลัยแดง"
            },
            {
                src: "{{ asset('images/section-5/image3.png') }}",
                caption: "ศาลา"
            },
            {
                src: "{{ asset('images/section-5/image4.png') }}",
                caption: "พระเรืองแสง"
            }
        ];
        let currentIndex = 0;

        function updateCarousel() {
            const imageElement = document.getElementById('carousel-image');
            const captionElement = document.getElementById('carousel-caption');

            imageElement.src = images[currentIndex].src;
            imageElement.alt = images[currentIndex].caption;
            captionElement.textContent = images[currentIndex].caption;
        }

        function prevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateCarousel();
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        }
    </script> --}}
</main>
