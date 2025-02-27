<style>
    .bg-page9 {
        background-image: url('{{ asset('images/section-9/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 20vh;
        padding: 2rem 0px;

    }

    /* ให้ container เป็นจุดอ้างอิงสำหรับ absolute */
    .container {
        position: relative;

    }

    /* ปรับตำแหน่งของ .map-container */

    /* ทำให้รูปแผนที่ขยายเต็ม container */
    .map-image {
        width: 80%;
        height: auto;
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    /* เมื่อหน้าจอขนาดเล็กกว่า lg (น้อยกว่า 992px) */
    @media (max-width: 1400px) {
        .map-image {
            width: 60%;
        }
    }

    .map-image:hover {
        transform: scale(1.05);
        filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.8));
    }

    /* ปรับตำแหน่งและเพิ่ม animation ของหมุด */
    .pin {
        position: absolute;
        width: 60px;
        height: auto;
        bottom: 0%;
        left: -10%;
        transition: transform 0.3s ease, filter 0.3s ease;
        animation: bounce 1s infinite ease-in-out;
        filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.8));
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }
    }



    /* แสดง tooltip เมื่อ hover ที่หมุด */
    .map-container-1:hover .pin-tooltip-1,
    .map-container-2:hover .pin-tooltip-2,
    .map-container-3:hover .pin-tooltip-3,
    .map-container-4:hover .pin-tooltip-4,
    .map-container-5:hover .pin-tooltip-5,
    .map-container-6:hover .pin-tooltip-6,
    .map-container-7:hover .pin-tooltip-7,
    .map-container-8:hover .pin-tooltip-8,
    .map-container-9:hover .pin-tooltip-9 {
        opacity: 1;
        transform: translateX(50%);
    }

    .pin-tooltip-1,
    .pin-tooltip-2,
    .pin-tooltip-3,
    .pin-tooltip-4,
    .pin-tooltip-5,
    .pin-tooltip-6,
    .pin-tooltip-7,
    .pin-tooltip-9 {
        position: absolute;
        bottom: 30%;
        right: 5%;
        background-color: white;
        padding: 5px 22px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        white-space: nowrap;
        font-weight: bold;
        font-size: 35px;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .pin-tooltip-8 {
        position: absolute;
        bottom: 10%;
        right: 50%;
        background-color: white;
        padding: 5px 22px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        white-space: nowrap;
        font-weight: bold;
        font-size: 35px;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .map-container-1 {
        position: absolute;
        top: 30%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 25%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }


    .map-container-2 {
        position: absolute;
        top: 43%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 41%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-3 {
        position: absolute;
        top: 55%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 15%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-4 {
        position: absolute;
        top: 50%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 59%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-5 {
        position: absolute;
        top: 56%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 76%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-6 {
        position: absolute;
        top: 65%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 40%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-7 {
        position: absolute;
        top: 75%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 60%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-8 {
        position: absolute;
        top: 68%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 82%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .map-container-9 {
        position: absolute;
        top: 88%;
        /* ปรับตำแหน่งจากด้านบน */
        left: 80%;
        /* ปรับตำแหน่งจากด้านซ้าย */
        transform: translate(-50%, -50%);
        /* ให้ศูนย์กลางอยู่ตรงจุดที่ต้องการ */
        display: inline-block;
    }

    .img-map {
    transition: transform 0.5s ease, filter 0.3s ease;
}

.img-map:hover {
    transform: scale(1.05); /* ซูมภาพ */
    filter: drop-shadow(0 0 15px rgba(255, 255, 255, 0.8)); /* เพิ่มเงาเพื่อให้ภาพเด่น */
}
</style>

<main class="bg-page9">
    <div class="container d-flex flex-column justify-content-center align-items-center align-items-lg-start">
        <img src="{{ asset('images/section-9/ป้ายหัวข้อ.png') }}" alt="icon" class="mb-5">
        <div class="d-none d-xl-flex  justify-content-center ">
            <img src="{{ asset('images/section-9/map.png') }}" alt="map" class="img-fluid w-100">

            <!-- map-container อยู่บน map -->
            <div class="map-container-1">
                <img src="{{ asset('images/section-9/1.png') }}" alt="วัดเนินไร่" class="map-image ">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-1 lh-1">วัดเนินไร่</div>
            </div>
            <div class="map-container-2">
                <img src="{{ asset('images/section-9/2.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-2 lh-1">ศูนย์พัฒนาเด็กเล็ก<br> บ้านเนินไร่</div>
            </div>
            <div class="map-container-3">
                <img src="{{ asset('images/section-9/3.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-3 lh-1">บริษัท เหลี่ยงชิ <br> อุตสาหกรรมประเทศไทยจำกัด</div>
            </div>
            <div class="map-container-4">
                <img src="{{ asset('images/section-9/4.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-4 lh-1">บริษัท ไรโน่ <br> ประเทศไทยจำกัด</div>
            </div>
            <div class="map-container-5">
                <img src="{{ asset('images/section-9/5.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-5 lh-1">บริษัท ไอ.ที.เนเชอรัล <br> โปรดักส์ จำกัด</div>
            </div>
            <div class="map-container-6">
                <img src="{{ asset('images/section-9/6.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-6 lh-1">บริษัท เลซซอล จำกัด</div>
            </div>
            <div class="map-container-7">
                <img src="{{ asset('images/section-9/7.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-7 lh-1">วัดคลองหนึ่ง</div>
            </div>
            <div class="map-container-8">
                <img src="{{ asset('images/section-9/8.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-8 lh-1">บริษัท จองติ่ง ฟรีซิชั่นเทคโนโลยี <br> ประเทศไทยจำกัด</div>
            </div>
            <div class="map-container-9">
                <img src="{{ asset('images/section-9/9.png') }}" alt="วัดเนินไร่" class="map-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="หมุด" class="pin">
                <div class="pin-tooltip-9 lh-1">ศูนย์พัฒนาเด็กเล็ก<br> บ้านคลองหนึ่ง</div>
            </div>
        </div>
    
        <img src="{{ asset('images/section-9/รวมแผนที่.png') }}" alt="map" class="img-fluid w-100 d-block d-xl-none img-map">
    </div>
</main>
