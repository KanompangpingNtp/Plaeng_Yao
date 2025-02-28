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
</style>
<main class="d-flex align-items-center justify-content-center bg-page7">
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
                    class="col-lg-4 d-flex flex-column justify-content-center align-items-center bg-menu-egp  ps-0 ps-lg-3 py-2 py-lg-5 fw-bold pe-0">
                    <div id="btnProcurement" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})"
                        class="w-100 text-center text-lg-start px-4 py-1" data-link="/procurement/detail/">
                        ประกาศจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnProcurementResults"
                        onclick="changeContent('ผลประกาศจัดซื้อจัดจ้างประจำปี', {{ json_encode($procurementResults) }})"
                        class="w-100 text-center text-lg-start px-4 py-1"
                        data-link="{{ route('procurementResults.detail', ['id' => '']) }}">
                        ผลประกาศจัดซื้อจัดจ้างประจำปี
                    </div>
                    <div id="btnAverage" onclick="changeContent('สรุปผลการจัดซื้อจัดจ้าง', {{ json_encode($average) }})"
                        class="w-100 text-center text-lg-start px-4 py-1" data-link="/average/detail/">
                        สรุปผลการจัดซื้อจัดจ้าง</div>
                    <div id="btnProcurementPlan"
                        onclick="changeContent('แผนการจัดซื้อจัดจ้าง', {{ json_encode($revenue) }})"
                        class="w-100 text-center text-lg-start px-4 py-1" data-link="/revenue/detail/">
                        แผนการจัดซื้อจัดจ้าง
                    </div>
                    <div id="btnWinnerAnnouncement"
                        onclick="changeContent('ประกาศผู้ชนะการเสนอราคา', {{ json_encode($announcement) }})"
                        class="w-100 text-center text-lg-start px-4 py-1" data-link="/announcement/detail/">
                        ประกาศผู้ชนะการเสนอราคา</div>
                </div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center px-3 py-5 "
                    style="gap: 1rem 0;" id="contentArea">

                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center w-100 me-2 mt-2">
                <a href="#" class="bg-link-button px-4 py-1 my-1 ">
                    ดูทั้งหมด
                </a>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let procurementData = @json($procurement) || [];

        if (procurementData.length > 0) {
            changeContent('จัดซื้อจัดจ้าง', procurementData);
        }
    });
    // ฟังก์ชันที่ใช้แสดงเนื้อหา
    function changeContent(topic, data) {
        allItems = data;

        // ดึง data-link จากปุ่มที่ถูกคลิก
        let activeButton = document.querySelector(`[onclick*="changeContent('${topic}'"]`);
        baseLink = activeButton ? activeButton.getAttribute('data-link') : "#";

        displayItems();
        setActiveButton(topic);
    }

    function setActiveButton(topic) {
        // กำหนดชื่อปุ่มตามหัวข้อ
        const buttons = ['btnProcurement', 'btnProcurementResults', 'btnAverage', 'btnProcurementPlan',
            'btnWinnerAnnouncement'
        ];
        const topics = ['จัดซื้อจัดจ้าง', 'ผลประกาศจัดซื้อจัดจ้างประจำปี', 'สรุปผลการจัดซื้อจัดจ้าง',
            'แผนการจัดซื้อจัดจ้าง', 'ประกาศผู้ชนะการเสนอราคา'
        ];

        // รีเซ็ตสถานะ active ของทุกปุ่ม
        buttons.forEach(buttonId => document.getElementById(buttonId).classList.remove('active'));

        // ทำให้ปุ่มที่ถูกเลือกมีสถานะ active
        const activeButtonIndex = topics.indexOf(topic);
        if (activeButtonIndex !== -1) {
            document.getElementById(buttons[activeButtonIndex]).classList.add('active');
        }
    }

    let currentPage = 1;
    const itemsPerPage = 6;
    let allItems = [];
    let baseLink = "#"; // เก็บ URL พื้นฐานจากปุ่มที่ถูกคลิก
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

        // ดึง data-link จากปุ่มที่ active
        let activeButton = document.querySelector('.bg-menu-egp .active');
        let baseLink = activeButton ? activeButton.getAttribute('data-link') : "#";
        baseLink = baseLink.replace(/\/$/, ''); // ลบ `/` ท้าย URL ถ้ามี

        newContent.href = baseLink + '/' + item.id; // เติม ID ของรายการ
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


    // ฟังก์ชันตัดข้อความ
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
