<style>
    .bg-page8 {
        background-image: url('{{ asset('images/section-8/แปรงยาว.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .circle {
        width: 20px;
        height: 20px;
        background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9));
        /* สีของวงกลม */
        border-radius: 50%;
        /* ทำให้เป็นวงกลม */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .link-button-section8 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        background: linear-gradient(to left, rgba(255, 255, 255, 0.226), rgba(163, 245, 12, 0.9));
        border-radius: 20px;
        padding: 8px 16px;
        color: black;
        transition: all 0.3s;
    }

    /* เมื่อ Hover */
    .link-button-section8:hover {
        background: linear-gradient(to left, rgba(163, 245, 12, 1), rgba(255, 255, 255, 0.4));
        transform: translateY(-3px); /* ยกปุ่มขึ้นเล็กน้อย */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* เพิ่มเงา */
    }

    /* เอฟเฟกต์ให้ไอคอนขยับ */
    .link-button-section8:hover .arrow-icon {
        transform: translateX(-5px); /* ขยับไอคอนลูกศรไปทางซ้าย */
        transition: all 0.3s;
    }

    .link-button-section8:hover .home-icon {
        transform: scale(1.1); /* ขยายขนาดไอคอนบ้าน */
        transition: all 0.3s;
    }
</style>

<main class="d-flex align-items-center justify-content-center bg-page8">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" >
            <div class="lh-1 fw-bold w-100 ms-2 mb-4 text-white">
                <span style="font-size:50px;">หนังสือราชการ</span>
                <img src="{{ asset('images/section-8/open-book.png') }}" alt="icon" height="50"> <br>
                <span class="fs-4 ">องค์การบริหารส่วนตำบลแปลงยาว</span>
            </div>
            <div class="row w-100" >
                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-start mb-3 p-0" >
                    <div class="p-3 w-100"
                        style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9));  border-top-right-radius:20px; border-top-left-radius:20px; box-shadow: 3px 4px 20px rgba(255, 255, 255, 0.9);">
                        <div class="py-2 px-4 bg-white d-flex justify-content-center align-items-center fw-bold" style="border-radius: 20px;">
                            <div class="circle me-2"></div>
                            จากกรมส่งเสริมการปกครองท้องถิ่น
                        </div>
                    </div>
                    <div class="p-3 w-100" style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9));  border-bottom-right-radius:20px; border-bottom-left-radius:20px; box-shadow: 3px 4px 20px rgba(255, 255, 255, 0.9);">
                        <div class="py-2 px-2 bg-white d-flex flex-column justify-content-center align-items-center fw-bold" style="border-radius: 20px;">
                            <a href="https://www.dla.go.th/index.jsp" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องซ้าย/ลูกศรน้ำเงิน.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    หน้าแรก
                                </div>
                                <img src="{{asset('images/section-8/กล่องซ้าย/home.png')}}" alt="icon" class="home-icon" width="23">
                            </a>
                            <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=2&isSbpac=N" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องซ้าย/ลูกศรน้ำเงิน.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    หนังสือราชการของ สถ.
                                </div>
                                <img src="{{asset('images/section-8/กล่องซ้าย/agenda.png')}}" alt="icon" class="agenda-icon" width="23">
                            </a>
                            <a href="https://www.dla.go.th/servlet/LawServlet?regType=1" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องซ้าย/ลูกศรน้ำเงิน.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    กฏหมาย ระเบียบ และมติ ก.กลาง
                                </div>
                                <img src="{{asset('images/section-8/กล่องซ้าย/auction.png')}}" alt="icon" class="auction-icon me-0 me-md-2" width="23">
                            </a>
                            <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=4" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องซ้าย/ลูกศรน้ำเงิน.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    บทความที่น่าสนใจ
                                </div>
                                <img src="{{asset('images/section-8/กล่องซ้าย/article.png')}}" alt="icon" class="article-icon me-0 me-md-2" width="23">
                            </a>
                            <a href="https://www.dla.go.th/visit/it_royal.jsp" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องซ้าย/ลูกศรน้ำเงิน.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    พรบ. และประกาศเกี่ยวกับ<br>เทคโนโลยีสารสนเทศ
                                </div>
                                <img src="{{asset('images/section-8/กล่องซ้าย/it-service.png')}}" alt="icon" class="it-service-icon" width="23">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-start pe-0 pb-1">
                    <div class="p-3  w-100 "
                        style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9));  border-top-right-radius:20px; border-top-left-radius:20px; box-shadow: 3px 4px 20px rgba(255, 255, 255, 0.9);">
                        <div class="py-2 px-4 bg-white d-flex justify-content-center align-items-center fw-bold" style="border-radius: 20px;">
                            <div class="circle me-2"></div>
                            จากท้องถิ่นจังหวัด
                        </div>
                    </div>
                    <div class="p-3 w-100" style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9));  border-bottom-right-radius:20px; border-bottom-left-radius:20px; box-shadow: 3px 4px 20px rgba(255, 255, 255, 0.9);">
                        <div class="py-3 px-2 bg-white d-flex flex-column justify-content-center align-items-center fw-bold" style="border-radius: 20px;">
                            <a href="https://www.chacheongsaolocal.go.th/frontpage" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องขวา/next.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    หน้าแรก
                                </div>
                                <img src="{{asset('images/section-8/กล่องขวา/home.png')}}" alt="icon" class="home-icon" width="23">
                            </a>
                            <a href="https://www.chacheongsaolocal.go.th/news/cate/2" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องขวา/next.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    ข่าวประชาสัมพันธ์
                                </div>
                                <img src="{{asset('images/section-8/กล่องขวา/announcement.png')}}" alt="icon" class="announcement-icon" width="23">
                            </a>
                            <a href="https://www.chacheongsaolocal.go.th/order" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องขวา/next.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    หนังสือสั่งราชการ
                                </div>
                                <img src="{{asset('images/section-8/กล่องขวา/open-book.png')}}" alt="icon" class="open-book-icon" width="23">
                            </a>
                            <a href="https://www.chacheongsaolocal.go.th/webboard" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องขวา/next.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    กระดานข่าว
                                </div>
                                <img src="{{asset('images/section-8/กล่องขวา/bulletin-board.png')}}" alt="icon" class="bulletin-board-icon" width="23">
                            </a>
                            <a href="https://www.chacheongsaolocal.go.th/contactus" class="link-button-section8 w-100 mb-2" target="_blank">
                                <div class="d-flex justify-content-start align-items-center lh-1">
                                    <img src="{{asset('images/section-8/กล่องขวา/next.png')}}" alt="arrow-left" class="arrow-icon me-0 me-md-2" width="30">
                                    ติดต่อหน่วยงาน
                                </div>
                                <img src="{{asset('images/section-8/กล่องขวา/customer-service.png')}}" alt="icon" class="customer-service-icon" width="23">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
