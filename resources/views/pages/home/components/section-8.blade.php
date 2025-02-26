<style>
    .bg-page8 {
        background-image: url('{{ asset('images/section-8/แปรงยาว.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .link-8{
        text-decoration: none;
        background: linear-gradient(to bottom, rgba(74, 131, 0, 0.9), rgba(74, 131, 0, 0.9));
        color: #ffffff;
        font-size: 25px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .link-8.active {
        background: linear-gradient(to bottom, rgba(163, 245, 12, 0.9), rgba(74, 131, 0, 0.9));
        box-shadow: 0 0 10px white, 0 0 15px white, 0 0 15px white, 0 0 15px white;
    }

    .link-8:hover{
        background: linear-gradient(to bottom, rgba(163, 245, 12, 0.9), rgba(74, 131, 0, 0.9));
        box-shadow: 0 0 10px white, 0 0 15px white, 0 0 15px white, 0 0 15px white;
    }

    .link-dowload img {
        transition: transform 0.3s ease, filter 0.3s ease;
    }

    .link-dowload:hover img {
        transform: scale(1.1);  /* ขยายขนาดภาพเมื่อ hover */
        filter: brightness(0.8);  /* ลดความสว่างเมื่อ hover */
    }
    .link-all {
    text-decoration: none;
    background: linear-gradient(to bottom, rgba(163, 245, 12, 0.9), rgba(74, 131, 0, 0.9));
    color: black;
    font-size: 1.5rem; /* เทียบเท่ากับ fs-4 */
    padding: 0.7rem 1.25rem;
    margin: 0;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    transition: all 0.3s ease-in-out;
    display: inline-block;
}

.link-all:hover {
    background: linear-gradient(to bottom, rgba(74, 131, 0, 0.9), rgba(163, 245, 12, 0.9));
    color: white;
    box-shadow: 0 0 10px white, 0 0 15px white;
}
</style>

<main class="d-flex align-items-center justify-content-center bg-page8">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="lh-1 fw-bold w-100 ms-2 mb-4 text-white">
                <span style="font-size:50px;">หนังสือราชการ</span>
                <img src="{{ asset('images/section-8/open-book.png') }}" alt="icon" height="50"> <br>
                <span class="fs-4 ">องค์การบริหารส่วนตำบลแปลงยาว</span>
            </div>
            <div class="d-flex flex-column-reverse flex-md-row justify-content-center align-items-center gap-sm-2">
                <a href="#" class="link-8 py-2 px-4 active" onclick="setActive(this)">
                    จากกรมส่งเสริมการปกครองท้องถิ่น
                </a>
                <a href="#" target="_blank" class="link-8 py-2 px-4" onclick="setActive(this)">
                    จากท้องถิ่นจังหวัด
                </a>
            </div>
            
            <div class="p-2" style="background: linear-gradient(to bottom, rgba(74, 131, 0, 0.9),rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9)); border-radius:20px;">
                <div class="bg-white px-4 pt-4 pb-0 d-flex flex-column justify-content-center align-items-center " style="border-radius: 20px; gap: 1rem 0;">
                    <?php
                    for ($i = 1; $i <= 6; $i++): 
                    ?>
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <div class="d-flex flex-column justify-content-center align-items-center ">
                            <div class="p-1 lh-1 text-center fw-bold" style="background: linear-gradient(to bottom, rgba(163, 245, 12, 0.9),rgba(74, 131, 0, 0.9)); border-radius:20px;">
                                <span class="fs-2 text-black"><?php echo $i; ?></span> <br>
                                <span class="fs-5 text-white" style="white-space: nowrap;">ม.ค. 2568</span>
                            </div>
                            <a href="#" class="link-dowload  d-block d-sm-none mt-1">
                                <img src="{{asset('images/section-8/download.png')}}" alt="icon-dowload" height="55">
                            </a>
                        </div>
                        <div class="lh-1 p-2" style="background-color: #e4e4e4;">
                            <?php
                                        $text = 'This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.This is card number ' . $i . ' with sample text.'; // สร้างข้อความให้แตกต่างกันตามลูป
                                        echo mb_strimwidth($text, 0, 180, '...');
                                        ?>
                        </div>
                        <a href="#" class="link-dowload  d-none d-sm-block">
                            <img src="{{asset('images/section-8/download.png')}}" alt="icon-dowload" height="55">
                        </a>
                    </div>
                    <?php endfor; ?>
                    <a href="#" class="link-all">ดูทั้งหมด</a>
                </div>
                
            </div>
        </div>
    </div>
</main>

<script>
    function setActive(element) {
        // ลบคลาส active จากทุกลิงก์
        const links = document.querySelectorAll('.link-8');
        links.forEach(link => link.classList.remove('active'));

        // เพิ่มคลาส active ให้กับลิงก์ที่คลิก
        element.classList.add('active');
    }
</script>
