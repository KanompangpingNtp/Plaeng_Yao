<?php
// $procurement = [
//     [
//         'title_name' => 'จัดซื้อวัสดุสำนักงานปี 2025',
//         'date' => '12-01-2025',
//         'pdfs' => [['post_pdf_file' => 'procurement_2025_1.pdf'], ['post_pdf_file' => 'procurement_2025_2.pdf']],
//     ],
//     [
//         'title_name' => 'จัดซื้อเครื่องมือแพทย์',
//         'date' => '11-01-2025',
//         'pdfs' => [['post_pdf_file' => 'medical_tools_2025.pdf']],
//     ],
//     [
//         'title_name' => 'จัดซื้อรถบรรทุกน้ำ',
//         'date' => '10-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $procurementResults = [
//     [
//         'title_name' => 'ประกาศผลจัดซื้อวัสดุสำนักงาน',
//         'date' => '09-01-2025',
//         'pdfs' => [['post_pdf_file' => 'result_procurement_2025.pdf']],
//     ],
//     [
//         'title_name' => 'ผลจัดซื้อเครื่องมือแพทย์',
//         'date' => '08-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $average = [
//     [
//         'title_name' => 'ราคากลางวัสดุสำนักงาน',
//         'date' => '07-01-2025',
//         'pdfs' => [['post_pdf_file' => 'average_price_office_2025.pdf']],
//     ],
//     [
//         'title_name' => 'ราคากลางเครื่องมือแพทย์',
//         'date' => '06-01-2025',
//         'pdfs' => [],
//     ],
// ];

// $revenue = [
//     [
//         'title_name' => 'งานเก็บรายได้ปี 2025',
//         'date' => '05-01-2025',
//         'pdfs' => [['post_pdf_file' => 'procurementPlan_2025_1.pdf'], ['post_pdf_file' => 'procurementPlan_2025_2.pdf']],
//     ],
// ];
// $announcement = [
//     [
//         'title_name' => 'งานเก็บรายได้ปี 2025',
//         'date' => '05-01-2025',
//         'pdfs' => [['post_pdf_file' => 'winnerAnnouncement_2025_1.pdf'], ['post_pdf_file' => 'winnerAnnouncement_2025_2.pdf']],
//     ],
// ];
?>
<style>
    .bg-page7 {
        background-image: url('{{ asset('images/section-7/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;

    }

    .bg-egp {
        background-color: #f3f3f3;
        border-radius: 20px;
    }

    .bg-menu-egp {
        background-image: url('{{ asset('images/section-7/bg-in.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 20px;
        gap: 0.6rem 0;
    }

    .bg-menu-egp div {
        text-decoration: none;
        color: #ffffff;
        font-size: 25px;
        cursor: pointer;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
        /* ขนาดตัวอักษรปกติ */
        transition: all 0.3s ease-in-out;
    }

    @media (max-width: 991px) {

        /* เมื่อหน้าจอมีความกว้างน้อยกว่าหรือเท่ากับ 991px */
        .bg-menu-egp div {
            font-size: 23px;
            border-radius: 20px;
            /* ปรับขนาดตัวอักษรให้เล็กลง */
        }
    }

    .bg-menu-egp div:hover {
        color: black;
        background: #f3f3f3;
    }

    .bg-menu-egp .active {
        color: black;
        background: #f3f3f3;
    }

    .egp-card {
        background-color: transparent !important;
        border: 1px solid black;
        border-radius: 20px;
        transition: all 0.3s ease-in-out;
        /* ให้เอฟเฟกต์เปลี่ยนสีพื้นหลังนุ่มนวล */
    }

    .egp-card:hover {
        background-color: rgba(0, 0, 0, 0.5) !important;
        /* พื้นหลังสีดำโปร่งแสงเมื่อ hover */
        color: white;
        /* เปลี่ยนสีตัวอักษรเป็นสีขาวเพื่อให้อ่านง่ายขึ้น */
    }

    .egp-card:hover .card-text {
        color: #f1f1f1;
        /* เปลี่ยนสีข้อความเมื่อ hover */
    }

    .bg-link-button7 {
        background: linear-gradient(to left, #508607, #c2e461, #508607);
        box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.9);
        border-radius: 20px;
        text-decoration: none;
        color: #000000;
        transition: all 0.3s ease;
        /* เพิ่มการเปลี่ยนแปลงที่นุ่มนวล */
    }

    .bg-link-button7:hover {
        background: linear-gradient(to left, #c2e461, #508607, #c2e461);
        /* เปลี่ยนสีเมื่อ hover */
        box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.7);
        /* ทำให้เงาลึกขึ้น */
        transform: scale(1.05);
        /* ขยายขนาดเล็กน้อย */
    }
</style>
<main class="d-flex flex-column align-items-center justify-content-center bg-page7">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="lh-1 fw-bold w-100 ms-2 mb-4">
                <span
                    style="font-size:50px; text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px white, 0 0 40px white;">ประกาศของคลัง</span>
                <img src="{{ asset('images/section-7/hired.png') }}" alt="icon" height="50"> <br>
                <span class="fs-4 ">องค์การบริหารส่วนตำบลแปลงยาว</span>
            </div>
            <div class="row bg-egp justify-content-center shadow-lg w-100">
                <div
                    class="col-lg-4 d-flex flex-column justify-content-start align-items-center bg-menu-egp  ps-0 ps-lg-3 py-2 py-lg-5 fw-bold pe-0">
                    <div id="btnProcurement" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('ProcurementDetail', ['id' => ':id']) }}">
                        ประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnProcurementResults"
                        onclick="changeContent('ผลประกาศจัดซื้อจัดจ้างประจำปี', {{ json_encode($procurementResults) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('ProcurementResultsDetail', ['id' => ':id']) }}">
                        ผลประกาศจัดซื้อจัดจ้างประจำปี
                    </div>
                    <div id="btnAverage" onclick="changeContent('สรุปผลการจัดซื้อจัดจ้าง', {{ json_encode($average) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('RevenueDetail', ['id' => ':id']) }}">
                        สรุปผลการจัดซื้อจัดจ้าง</div>
                    <div id="btnProcurementPlan"
                        onclick="changeContent('แผนการจัดซื้อจัดจ้าง', {{ json_encode($revenue) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('ProcurementPlanDetail', ['id' => ':id']) }}">
                        แผนการจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnWinnerAnnouncement"
                        onclick="changeContent('ประกาศผู้ชนะการเสนอราคา', {{ json_encode($announcement) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('AveragePriceDetail', ['id' => ':id']) }}">
                        ประกาศผู้ชนะการเสนอราคา</div>
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center px-3 py-5 "
                    style="gap: 1rem 0;" id="contentArea">

                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center w-100 me-2 mt-2">
                <a href="{{route('TreasuryAnnouncementData')}}" class="bg-link-button7 px-4 py-1 my-1 ">
                    ดูทั้งหมด
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-3 mt-sm-5">
        <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-7/รางวัลแห่งความภาคภูมิใจ.png') }}" alt="icon"
                            style="width: 60px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        อาสาสมัครป้องกันภัย<br class="d-none d-sm-block">ฝ่ายพลเรือน
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-7/อาสาสมัครป้องกันภัยฝ่ายพลเรือน.png') }}" alt="icon"
                            style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        รางวัลแห่งความ<br class="d-none d-sm-block">ภาคภูมิใจ
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#" class="banner-section-2 d-flex lh-1 p-0">
                    <div class="bg-inbanner">
                        <img src="{{ asset('images/section-7/พรบ.อำนวยความสะดวก.png') }}" alt="icon"
                            style="width: 65px;">
                    </div>
                    <div class="m-auto py-3 py-sm-2">
                        พรบ.อำนวย<br class="d-none d-sm-block">ความสะดวก
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // กำหนดข้อมูลเริ่มต้นของปุ่ม
        let initialData = {
            'จัดซื้อจัดจ้าง': @json($procurement),
            'ผลประกาศจัดซื้อจัดจ้างประจำปี': @json($procurementResults),
            'สรุปผลการจัดซื้อจัดจ้าง': @json($average),
            'แผนการจัดซื้อจัดจ้าง': @json($revenue),
            'ประกาศผู้ชนะการเสนอราคา': @json($announcement)
        };

        // ตั้งค่าลิงก์เริ่มต้นให้ปุ่มทั้งหมด
        for (let [key, value] of Object.entries(initialData)) {
            if (value.length > 0) {
                let firstId = value[0]?.id || 1;
                let button = document.querySelector(`[onclick*="changeContent('${key}'"]`);
                if (button) {
                    let link = button.getAttribute('data-link').replace(':id', firstId);
                    button.setAttribute('data-link', link);
                }
            }
        }

        // โหลดหมวดหมู่แรกสุดที่มีข้อมูล
        for (let [topic, data] of Object.entries(initialData)) {
            if (data.length > 0) {
                changeContent(topic, data);
                break;
            }
        }
    });

    function changeContent(topic, data) {
    allItems = data;

    if (data.length > 0) {
        let firstId = data[0].id;
        let activeButton = document.querySelector(`[onclick*="changeContent('${topic}'"]`);

        if (activeButton) {
            let linkTemplate = activeButton.getAttribute('data-link');
            baseLink = linkTemplate.replace(':id', firstId);
        }
    } else {
        baseLink = "#";
    }

    displayItems();
    setActiveButton(topic);
}


    function setActiveButton(topic) {
        const buttons = ['btnProcurement', 'btnProcurementResults', 'btnAverage', 'btnProcurementPlan',
            'btnWinnerAnnouncement'
        ];
        const topics = ['จัดซื้อจัดจ้าง', 'ผลประกาศจัดซื้อจัดจ้างประจำปี', 'สรุปผลการจัดซื้อจัดจ้าง',
            'แผนการจัดซื้อจัดจ้าง', 'ประกาศผู้ชนะการเสนอราคา'
        ];

        buttons.forEach(buttonId => document.getElementById(buttonId).classList.remove('active'));

        const activeButtonIndex = topics.indexOf(topic);
        if (activeButtonIndex !== -1) {
            document.getElementById(buttons[activeButtonIndex]).classList.add('active');
        }
    }

    let currentPage = 1;
    const itemsPerPage = 6;
    let allItems = [];
    let baseLink = "#";
    const bookmarkIcon = "{{ asset('images/section-7/bookmark.png') }}";
    const timeIcon = "{{ asset('images/section-7/fast-time.png') }}";

    function displayItems() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = currentPage * itemsPerPage;
    const itemsToDisplay = allItems.slice(startIndex, endIndex);

    let contentArea = document.getElementById('contentArea');
    contentArea.innerHTML = '';

    itemsToDisplay.forEach((item) => {
        let newContent = document.createElement('a');

        // ใช้ baseLink ที่ตั้งไว้จาก changeContent() แล้วแทนค่า :id ด้วย item.id
        let itemLink = baseLink.replace(/\d+$/, item.id);

        newContent.href = itemLink;
        newContent.className = "w-100";
        newContent.style.textDecoration = "none";

        newContent.innerHTML = `
            <div class="card p-3 egp-card text-black w-100">
                <div class="d-flex align-items-center">
                    <img src="${bookmarkIcon}" alt="รูปภาพ"
                        class="rounded me-3" style="width: 45px; height: 45px; object-fit: contain;">
                    <div class="flex-grow-1">
                        <div class="card-text lh-1">
                            ${truncateText(item.title_name, 180)}
                        </div>
                        <div class="card-text text-muted">
                            <img src="${timeIcon}" alt="icon"
                                class="me-1" width="18">
                            ${item.date}
                        </div>
                    </div>
                </div>
            </div>`;

        contentArea.appendChild(newContent);
    });
}


    function truncateText(text, maxLength) {
        return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
    }
</script>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log('start fun');

        let procurementData = @json($procurement);
        console.log('Loaded Data:', procurementData);

        changeContent('จัดซื้อจัดจ้าง', procurementData);
    });
</script> --}}
