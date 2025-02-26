<style>
    .bg-page6 {
        background-image: url('{{ asset('images/section-6/bg-7.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }
</style>
<main class="d-flex align-items-center justify-content-center bg-page6">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column">
                <div class="p-3 d-flex justify-content-between align-items-center gap-2" 
                    style="background: linear-gradient(to top, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9)); 
                           border-top-left-radius: 50px; border-top-right-radius: 50px;">
                    
                    <!-- ส่วนข้อความและโลโก้ -->
                    <div class="d-flex align-items-center lh-1 ps-4 pe-5 py-2" 
                        style="background: linear-gradient(to left, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.8)); 
                               border-radius: 50px;">
                        
                        <div class="fw-bold d-flex flex-column justify-content-center align-items-start">
                            <span class="fs-2 fw-bold">ข่าวประชาสัมพันธ์</span>
                            <span class="fs-4">องค์การบริหารส่วนตำบลแปลงยาว</span>
                        </div>
                        
                        <img src="{{ asset('images/section-6/public-relations.png') }}" 
                             alt="logo" class="ms-2" style="width: 50px; height: auto;">
                    </div>
                    
                    <!-- ปุ่มดูทั้งหมด -->
                    <a href="#" class="btn btn-light fs-4 px-4" 
                       style="text-decoration: none; border-radius: 15px;">ดูทั้งหมด</a>
                </div>
                <div class="px-3" style="background: linear-gradient(to left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));
                border-bottom-left-radius: 50px; border-bottom-right-radius: 50px;">
                    <div class="card p-3 shadow-lg">
                        <div class="d-flex align-items-center">
                            <!-- รูปภาพด้านซ้าย -->
                            <img src="{{ asset('images/section-6/logo.png') }}" alt="รูปภาพ" 
                                 class="rounded me-3" style="width: 100px; height: 100px; object-fit: cover;">
                            
                            <!-- ข้อความด้านขวา -->
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold">หัวข้อข่าว</h5>
                                <p class="card-text text-muted">รายละเอียดสั้นๆ เกี่ยวกับข่าวหรือข้อมูลที่ต้องการนำเสนอ...</p>
                                <a href="#" class="btn btn-primary btn-sm">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-lg-6">
                text
            </div>
        </div>
    </div>
    
    

</main>
