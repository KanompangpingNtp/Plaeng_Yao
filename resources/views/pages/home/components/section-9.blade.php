<style>
    .bg-page9 {
        background-image: url('{{ asset('images/section-9/พื้นหลัง.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 0;
        min-height: 20vh;
        padding: 5rem 0px;

    }

    .map-container {
        position: relative;
    }

    .location {
        position: absolute;
        top: 0;
        /* ปรับตามสถานที่แต่ละอัน */
        left: 0;
    }

    .location-image {
        width: 140px;
        height: auto;
        cursor: pointer;
        position: relative;
        z-index: 2;
        transition: all 0.3s ease;
    }

    .pin-image {
        position: absolute;
        top: -20px;
        left: 50px;
        width: 40px;
        height: auto;
        z-index: 4;
        animation: floatUpDown 2s ease-in-out infinite;
        transition: all 0.3s ease;
    }

    .card-image {
        position: absolute;
        top: -50%;
        left: 110%;
        width: 300px;
        height: auto;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 5;
    }

    .location:hover .location-image {
        filter: drop-shadow(0 0 10px white);
    }

    .location:hover .pin-image {
        filter: drop-shadow(0 0 10px white);
        transform: scale(1.2);
    }

    .location:hover .card-image {
        opacity: 1;
        visibility: visible;
    }

    .card-image-right {
        position: absolute;
        top: -50%;
        right: 110%;
        width: 300px;
        height: auto;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 5;
    }

    .location:hover .card-image-right {
        opacity: 1;
        visibility: visible;
    }


    @keyframes floatUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
            /* ขยับขึ้น 10px */
        }
    }

    .cloude-left {
        position: absolute;
        top: 5rem;
        left: 5rem;
        animation: move-left-small 5s ease-in-out infinite;
    }

    .cloude-center-left {
        position: absolute;
        bottom: 10rem;
        left: 25rem;
        animation: move-left-big 7s ease-in-out infinite;
    }

    .bollune-left {
        position: absolute;
        bottom: 10rem;
        left: 5rem;
        animation: move-left-wave 6s ease-in-out infinite;
    }

    .cloude-right {
        position: absolute;
        top: 15rem;
        right: 15rem;
        width: 250px;
        animation: move-right-big 6s ease-in-out infinite;
    }

    .cloude-center-right {
        position: absolute;
        bottom: 2rem;
        right: 15rem;
        animation: move-right-small 5s ease-in-out infinite;
    }

    .cloude-front {
        position: absolute;
        bottom: 0rem;
        left: 0rem;
        animation: move-left-small 8s ease-in-out infinite;
    }

    .bollune-right {
        position: absolute;
        top: 14rem;
        right: 5rem;
        animation: move-right-wave 7s ease-in-out infinite;
    }


    /* ฝั่งซ้าย: มีก้อนเมฆขยับไม่เหมือนกัน */
    @keyframes move-left-small {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(-5px);
        }
    }

    @keyframes move-left-big {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(-15px);
        }
    }

    @keyframes move-left-wave {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(-10px);
        }

        75% {
            transform: translateX(-5px);
        }
    }

    /* ฝั่งขวา: มีก้อนเมฆขยับแตกต่างกันเหมือนกัน */
    @keyframes move-right-small {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(8px);
        }
    }

    @keyframes move-right-big {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(18px);
        }
    }

    @keyframes move-right-wave {

        0%,
        100% {
            transform: translateX(0);
        }

        25% {
            transform: translateX(10px);
        }

        75% {
            transform: translateX(5px);
        }
    }


    .location-1 {
        top: 3rem;
        left: 4rem;
    }

    .location-2 {
        top: 6rem;
        left: 15rem;
    }

    .location-3 {
        top: 8rem;
        left: 29rem;
    }

    .location-4 {
        top: 18rem;
        left: 21rem;
    }

    .location-5 {
        top: 13rem;
        left: 40rem;
    }

    .location-6 {
        top: 20rem;
        left: 41rem;
    }

    .location-7 {
        top: 22rem;
        left: 53rem;
    }

    .location-8 {
        top: 20rem;
        left: 66rem;
    }


    .location-9 {
        top: 16rem;
        left: 58rem;
    }

    .location-10 {
        top: 11rem;
        left: 50rem;
    }

    @media (max-width: 1400px) {
        .cloude-center-left {
            bottom: 7rem;
            left: 10rem;
            width: 300px;
        }

        .location-image {
            width: 110px;
        }

        .pin-image {
            top: -20px;
            left: 50px;
            width: 35px;
        }

        .card-image {
            top: -50%;
            left: 110%;
            width: 250px;
        }

        .card-image-right {
            top: -50%;
            right: 110%;
            width: 250px;
        }

        .location-1 {
            top: 3rem;
            left: 4rem;
        }

        .location-2 {
            top: 5.5rem;
            left: 13rem;
        }

        .location-3 {
            top: 8.5rem;
            left: 23rem;
        }

        .location-4 {
            top: 16rem;
            left: 18rem;
        }

        .location-5 {
            top: 12rem;
            left: 35rem;
        }

        .location-6 {
            top: 18rem;
            left: 36rem;
        }

        .location-7 {
            top: 19rem;
            left: 46rem;
        }

        .location-8 {
            top: 18rem;
            left: 57rem;
        }


        .location-9 {
            top: 14rem;
            left: 51rem;
        }

        .location-10 {
            top: 10rem;
            left: 43rem;
        }
    }

    @media (max-width: 1200px) {
        .cloude-front{
            width: 80%;
        }
        .location-image {
            width: 90px;
        }

        .pin-image {
            top: -20px;
            left: 50px;
            width: 30px;
        }

        .card-image {
            top: -50%;
            left: 110%;
            width: 200px;
        }

        .card-image-right {
            top: -50%;
            right: 110%;
            width: 200px;
        }

        .location-1 {
            top: 2rem;
            left: 4rem;
        }

        .location-2 {
            top: 5rem;
            left: 11rem;
        }

        .location-3 {
            top: 7rem;
            left: 20rem;
        }

        .location-4 {
            top: 13rem;
            left: 15rem;
        }

        .location-5 {
            top: 10rem;
            left: 29rem;
        }

        .location-6 {
            top: 15rem;
            left: 30rem;
        }

        .location-7 {
            top: 16rem;
            left: 39rem;
        }

        .location-8 {
            top: 15rem;
            left: 48rem;
        }


        .location-9 {
            top: 12rem;
            left: 42rem;
        }

        .location-10 {
            top: 8rem;
            left: 36rem;
        }
    }

    @media (max-width: 991px) {

        .cloude-center-left {
            bottom: 7rem;
            left: 10rem;
            width: 0px;
        }
        .cloude-center-right {
            bottom: 7rem;
            right: 4rem;
            width: 150px;
        }
        .cloude-right {
            top: 2rem;
            right: 1rem;
            width: 300px;
        }

        .bollune-left{
            bottom: 5rem;
            left: 3rem;
            width: 100px;
        }
        .location-image {
            width: 70px;
        }

        .pin-image {
            top: -10px;
            left: 20px;
            width: 25px;
        }

        .card-image {
            top: -50%;
            left: 110%;
            width: 150px;
        }

        .card-image-right {
            top: -50%;
            right: 110%;
            width: 150px;
        }

        .location-1 {
            top: 2rem;
            left: 2rem;
        }

        .location-2 {
            top: 3.5rem;
            left: 8rem;
        }

        .location-3 {
            top: 5.2rem;
            left: 14rem;
        }

        .location-4 {
            top: 9.5rem;
            left: 11.5rem;
        }

        .location-5 {
            top: 7rem;
            left: 22rem;
        }

        .location-6 {
            top: 11rem;
            left: 22rem;
        }

        .location-7 {
            top: 12rem;
            left: 29rem;
        }

        .location-8 {
            top: 11rem;
            left: 36rem;
        }


        .location-9 {
            top: 9rem;
            left: 31rem;
        }

        .location-10 {
            top: 6rem;
            left: 27rem;
        }
    }

    @media (max-width: 768px) {
        .cloude-left{
            top: 2rem;
            left: 4rem;
            width: 150px;
        }
        .cloude-right{
            top: 2rem; 
            right: 4rem;
            width: 150px;
        }
        .cloude-center-right {
            bottom: 3rem;
            right: 2rem;
            width: 150px;
        }

        .bollune-right{
            top: 12rem;
            right: 4rem;
            width: 50px;
        }
        .location-image {
            width: 50px;
        }

        .pin-image {
            top: -10px;
            left: 20px;
            width: 20px;
        }

        .card-image {
            top: -50%;
            left: 110%;
            width: 130px;
        }

        .card-image-right {
            top: -50%;
            right: 110%;
            width: 130px;
        }

        .location-1 {
            top: 1rem;
            left: 2rem;
        }

        .location-2 {
            top: 2.5rem;
            left: 6rem;
        }

        .location-3 {
            top: 3.8rem;
            left: 10.5rem;
        }

        .location-4 {
            top: 7rem;
            left: 8.5rem;
        }

        .location-5 {
            top: 5rem;
            left: 16rem;
        }

        .location-6 {
            top: 8rem;
            left: 17rem;
        }

        .location-7 {
            top: 9rem;
            left: 22rem;
        }

        .location-8 {
            top: 8.1rem;
            left: 26.5rem;
        }


        .location-9 {
            top: 6rem;
            left: 24rem;
        }

        .location-10 {
            top: 4rem;
            left: 20rem;
        }
    }

    @media (max-width: 575px) {
        .bollune-left{
            bottom: 2rem;
            left: 4rem;
            width: 70px;
        }
        .bollune-right{
            top: 1rem;
            right: 4rem;
            width: 30px;
        }

        .map-area {
            height: 163px;
            width: 346px;
        }

        .location-image {
            width: 45px;
        }

        .pin-image {
            top: -10px;
            left: 20px;
            width: 15px;
        }

        .card-image {
            top: -50%;
            left: 110%;
            width: 130px;
        }

        .card-image-right {
            top: -50%;
            right: 110%;
            width: 130px;
        }

        .location-1 {
            top: 5px;
            left: 10px;
        }

        .location-2 {
            top: 1.3rem;
            left: 4rem;
        }

        .location-3 {
            top: 2rem;
            left: 7rem;
        }

        .location-4 {
            top: 4.5rem;
            left: 6rem;
        }

        .location-5 {
            top: 3rem;
            left: 10rem;
        }

        .location-6 {
            top: 5.5rem;
            left: 10.5rem;
        }

        .location-7 {
            top: 6rem;
            left: 14rem;
        }

        .location-8 {
            top: 5rem;
            left: 17.5rem;
        }


        .location-9 {
            top: 4rem;
            left: 15rem;
        }

        .location-10 {
            top: 2.5rem;
            left: 13rem;
        }
    }
</style>

<main class="bg-page9 d-flex">
    <div class="container d-flex flex-column justify-content-start align-items-center">
        <img src="{{ asset('images/section-9/แลนด์มาร์ค.png') }}" alt="title" class="img-fluid ms-auto ">
        <div class="map-container">
            <img src="{{ asset('images/section-9/แผนที่.png') }}" alt="แผนที่" class="img-fluid map-area">
            <div class="location location-1">
                <img src="{{ asset('images/section-9/เทศบาลแปลงยาว.png') }}" alt="เทศบาลแปลงยาว" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/องค์การบริหาร.png') }}" alt="card" class="card-image">
            </div>

            <div class="location location-2">
                <img src="{{ asset('images/section-9/วัดเนินไร่.png') }}" alt="วัดเนินไร่" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/วัดเนินไร่ (1).png') }}" alt="card" class="card-image">
            </div>

            <div class="location location-3">
                <img src="{{ asset('images/section-9/ศูนย์พัฒนาเด็กเล็กบ้านเนินไร่.png') }}"
                    alt="ศูนย์พัฒนาเด็กเล็กบ้านเนินไร่" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/ศูนย์พัฒนาเด็กบ้านเนินไร่.png') }}" alt="card"
                    class="card-image">
            </div>

            <div class="location location-4">
                <img src="{{ asset('images/section-9/บริษัท เหลี่ยงชิ.png') }}" alt="บริษัท เหลี่ยงชิ"
                    class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/บริษัท เหลี่ยงชิ (1).png') }}" alt="card" class="card-image">
            </div>

            <div class="location location-5">
                <img src="{{ asset('images/section-9/บริษัท จองติ่ง ฟรีซิชั่นเทคโนโลยี.png') }}"
                    alt="บริษัท จองติ่ง ฟรีซิชั่นเทคโนโลยี" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/บริษัท จองติ่ง .png') }}" alt="card" class="card-image">
            </div>

            <div class="location location-6">
                <img src="{{ asset('images/section-9/เลซซอล จำกัด.png') }}" alt="เลซซอล จำกัด" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/บริษัท เลซซอล จำกัด.png') }}" alt="card" class="card-image">
            </div>

            <div class="location location-7">
                <img src="{{ asset('images/section-9/วัดคลองหนึ่ง.png') }}" alt="วัดคลองหนึ่ง" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/วัดคลองหนึ่ง (1).png') }}" alt="card"
                    class="card-image-right">
            </div>

            <div class="location location-8">
                <img src="{{ asset('images/section-9/ศูนย์พัฒนาเด็กเล็กบ้านคลองหนึ่ง.png') }}"
                    alt="ศูนย์พัฒนาเด็กเล็กบ้านคลองหนึ่ง" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/ศูนย์พัฒนาเด็ก.png') }}" alt="card" class="card-image-right">
            </div>

            <div class="location location-9">
                <img src="{{ asset('images/section-9/เรโนจำกัด.png') }}" alt="เรโนจำกัด" class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/บริษัท ไรโน ประเทศไทยจำกัด.png') }}" alt="card"
                    class="card-image-right">
            </div>
            <div class="location location-10">
                <img src="{{ asset('images/section-9/บริษัทไอทีเนเชอรัล.png') }}" alt="บริษัทไอทีเนเชอรัล"
                    class="location-image">
                <img src="{{ asset('images/section-9/หมุด.png') }}" alt="pin" class="pin-image">
                <img src="{{ asset('images/section-9/บริษัท ไอ.พี.เนเชอรัล โปรดักส์.png') }}" alt="card"
                    class="card-image-right">
            </div>

            <!-- เพิ่มกี่อันก็แค่ copy div.location -->
        </div>


    </div>
    <img src="{{ asset('images/section-9/เมฆซ้าย.png') }}" alt="cloude-left" class="cloude-left">
    <img src="{{ asset('images/section-9/เมฆกลางซ้าย.png') }}" alt="cloude-center-left" class="cloude-center-left">
    <img src="{{ asset('images/section-9/เมฆขวา.png') }}" alt="cloude-right" class="cloude-right">
    <img src="{{ asset('images/section-9/เมฆกลางขวา.png') }}" alt="cloude-center-right" class="cloude-center-right">
    <img src="{{ asset('images/section-9/เมฆหน้าสุด.png') }}" alt="cloude-front" class="cloude-front">

    <img src="{{ asset('images/section-9/บอลลูนซ้าย.png') }}" alt="บอลลูนซ้าย" class="bollune-left">
    <img src="{{ asset('images/section-9/บอลลูนขวา.png') }}" alt="บอลลูนขวา" class="bollune-right">

</main>
