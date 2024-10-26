@extends('layout.navbar')

@section('title', 'Landing Page')

@section('content')
    <style>
        /* CSS untuk slider */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height : 100%
        }

        .slider {
            position: relative;
            width: 100%;
            height: 75vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slider img {
            width: 100%;
            height: auto;
            object-fit: contain; 
        }

        .slides {
            display: flex;
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            color: white;
        }

        button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            font-size: 2em;
            cursor: pointer;
        }

        .prev {
            left: 20px;
        }

        .next {
            right: 20px;
        }

        .info-row {
            display: flex;                     
            justify-content: space-around;      
            width: 90%;           
            margin-left: 60px;            
        }

        .info-box {
            flex: 1;                      
            margin: 0 10px;                  
            padding: 20px;
            border-radius: 8px;         
            text-align: left;                 
        }

        .info-box h3 {
            margin: 0 0 10px;             
        }

        .info-box h3 i {
            margin-right: 15px;               
            font-size: 1.5em;              
        }

        .info-box p {
            margin: 0;  
            color: #7f8c8d;                 
        }

        .info-box a {
            color: orange;                  
            text-decoration: none;        
            transition: color 0.3s;       
            margin-top: 15px;              
            display: inline-block;           
        }

        /* CSS untuk bagian layanan unggulan */
        .new-section {
            padding: 40px;
        }

        .new-section h2 {
            color: orange;                 
            font-weight: bold;               
            text-align: left;                
            margin-bottom: 20px;          
        }

        .horizontal-container {
            display: flex;                    
            justify-content: space-between;    
            background-color: white;
        }

        .horizontal-item {
            flex: 1;                          
            margin: 0 5px;                   
            padding: 20px;
            display: flex;                   
            align-items: center;              
            text-align: left;               
        }

        .horizontal-item img {
            width: 150px;                    
            height: auto;                    
            border-radius: 8px;               
            margin-left: 20px;                
        }

        .horizontal-item a {
            color: orange;                     
            text-decoration: underline;       
            transition: color 0.3s;           
        }

        .horizontal-item a:hover {
            color: darkorange;                 
        }

        /* CSS untuk slider informasi klinik */
        .clinic-slider {
            overflow: hidden;                
            max-width: 100%;           
            position: relative;             
            background-color: #EBF5F5
        }

        .clinic-box {
            width: 100%;              
            margin: 0 10px;                 
            padding: 20px;
            border-radius: 8px;              
            background-color: #ffffff;       
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .clinic-box h3 {
            display: flex;              
            align-items: center;            
            margin-bottom: 10px;              
        }

        .clinic-box p {
            color: #7f8c8d;             
            margin: 0;                     
        }

        .clinic-box a {
            color: orange;                 
            text-decoration: none;        
            margin-top: 10px;               
            display: inline-block;           
        }

        .footer {
            display: flex;                        
            justify-content: space-between;      
            padding: 20px;
            background-color: #2C2A5D;          
            border-top: 1px solid #ccc;        
        }

        .footer-column {
            flex: 1;                             
            margin: 0 10px;                    
            padding-left : 50px;
        }

        .footer-column h3 {
            margin-bottom: 10px;                 
            color: white;                      
        }

        .footer-column p,
        .footer-column ul {
            margin: 10px 0;  
            color: white;                   
            font-size : 13px
        }

        .footer-column ul {
            list-style-type: none;               
            padding: 0;                         
        }

        .footer-column .nav-links a {
            text-decoration: none;
            margin: 0 15px;
            color: white;                    
            font-size : 13px
        }

        .footer-column .nav-links a:hover {
            color: darkorange;
        }

        .social-media {
            display: flex;                       
            gap: 10px;                          
        }

        .social-icon {
            color: white;                      
            text-decoration: none;               
            transition: color 0.3s;            
            font-size: 20px;
        }

        .social-icon:hover {
            color: darkorange;                   
        }


    </style>

    <div class="slider">
        <div class="slides">
            <section id="home" class="slide active">
                <img src="{{ asset('assets/SLIDER WEBSITE.jpg') }}" alt="bg  Slide" class="slider img" />
            </section>
            <section id="about" class="slide">
                <img src="{{ asset('assets/bg1.png') }}" alt="bg1 Slide" />
            </section>
            <section id="services" class="slide">
                <img src="{{ asset('assets/bg3.png') }}" alt="bg1 Slide" />
            </section>
            <section id="contact" class="slide">
                <img src="{{ asset('assets/sliderzi.jpg') }}" alt="bg1 Slide" />
            </section>
        </div>
        <button class="prev" onclick="changeSlide(-1)">❮</button>
        <button class="next" onclick="changeSlide(1)">❯</button>
    </div>

    <div class="info-row">
        <div class="info-box">
            <h3><i class="fas fa-user-plus"></i>Pendaftaran Online</h3>
            <p>- Chat only, tidak menerima telepon</p>
            <p>- Pendaftaran H-1</p>
            <p>- Pendaftaran online jam 15.00-19.00 WIB</p>
            <a href="#">Selengkapnya</a>
        </div>
        <div class="info-box">
            <h3><i class="fas fa-calendar-alt"></i>Jadwal Dokter</h3>
            <p>Rumah sakit paru memiliki dokter yang sudah berpengalaman dan kompeten dalam bidang masing-masing. Dokter kami siap untuk melayani anda.</p>
            <a href="#">Selengkapnya</a>
        </div>
        <div class="info-box">
            <h3><i class="fas fa-bullhorn"></i>Pengumuman</h3>
            <p>Pembaruan atau informasi yang ditujukan kepada orang banyak dan bersifat umum.</p>
            <a href="#">Selengkapnya</a>
        </div>
        <div class="info-box">
            <h3><i class="fas fa-calendar-check"></i>Daftar Cuti Pegawai</h3>
            <p>Pemberitahuan atau informasi yang ditujukan kepada orang banyak dan bersifat umum.</p>
            <a href="#">Selengkapnya</a>
        </div>
    </div>

    <div class="new-section">
        <h2>PELAYANAN UNGGULAN</h2>
        <div class="horizontal-container">
            <div class="horizontal-item">
                <div>
                    <h3>HYPERBARIK OXYGEN</h3>
                    <p>Terapi hiperbarik adalah metode pengobatan yang dilakukan dengan menghirup oksigen murni dalam ruang bertekanan tinggi. Tujuannya adalah meningkatkan kadar oksigen dalam darah, plasma, dan jaringan.</p>
                    <a href="#">Selengkapnya</a>
                </div>
                <img src="{{ asset('assets/hbo.png') }}" alt="Gambar 1">
            </div>
            <div class="horizontal-item">
                <div>
                    <h3>LAYANAN AESTHETIC</h3>
                    <p>Kulit yang sehat dan terawat tentu menjadi dambaan semua orang, oleh karena itu RS Paru Jember mengembangkan layanan dan produk perawatan kulit dengan standar medis untuk membantu mewujudkan keinginan tersebut.</p>
                    <a href="#">Selengkapnya</a>
                </div>
                <img src="{{ asset('assets/estetic.png') }}" alt="Gambar 2">
            </div>
        </div>
    </div>

    <div class="new-section clinic-slider">
        <h2>KLINIK RS PARU JEMBER</h2>
        <div class="slides">
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik mata.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Mata
                </h3>
                <p>Klinik ini menyediakan layanan kesehatan umum dan spesialis.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik anak.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Anak
                </h3>
                <p>Klinik ini fokus pada kesehatan jantung dan pembuluh darah.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik jantung.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Jantung
                </h3>
                <p>Klinik ini menawarkan layanan perawatan penyakit dalam.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik kandungan.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Kandungan
                </h3>
                <p>Klinik ini khusus untuk perawatan ibu dan anak.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik kecantikan.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Kecantikan
                </h3>
                <p>Klinik ini khusus untuk perawatan ibu dan anak.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik Paru.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Paru
                </h3>
                <p>Klinik ini khusus untuk perawatan ibu dan anak.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik saraf.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Saraf
                </h3>
                <p>Klinik ini khusus untuk perawatan ibu dan anak.</p>
                <a href="#">Selengkapnya</a>
            </div>
            <div class="clinic-box">
                <h3>
                    <img src="{{ asset('assets/klinik urologi.png') }}" alt="Image 10 Icon" style="width: 100px; height: auto; margin-right: 50px;">
                    Klinik Urologi
                </h3>
                <p>Klinik ini khusus untuk perawatan ibu dan anak.</p>
                <a href="#">Selengkapnya</a>
            </div>
        </div>
        <button class="prev" onclick="changeClinicSlide(-1)">❮</button>
        <button class="next" onclick="changeClinicSlide(1)">❯</button>
    </div>

    <div class="footer">
    <div class="footer-column">
        <h3>Alamat</h3>
        <p>Jl. Nusa Indah No. 28 Kode Pos 68118 Jember</p>
        <h3>Telepon</h3>
        <p>Sekertariat  : (0331) 421078</p>
        <p>HBOT        : (0331) 481520</p>
        <p>IGD          : (0331) 487255</p>
        <p>Humas (WA) : +62 811 3164 200</p>
        <p>IGD (WA) : +62 882 1768 0398</p>
        <h3>Email</h3>
        <p>rspjember@jatimprov.go.id</p>
    </div>
    <div class="footer-column">
        <h3>Layanan</h3>
        <div class="nav-links">
            <p><a href="#">Dokter Kami</a></p>
            <p><a href="#">Pendaftaran Online</a></p>
            <p><a href="#">Pelayanan Unggulan</a></p>
            <p><a href="#">Pengumuman Informasi</a></p>
            <p><a href="#">Klinik</a></p>
        </div>
    </div>
    <div class="footer-column">
        <h3>Tentang Kami</h3>
        <div class="nav-links">
            <p><a href="#">Sejarah</a></p>
            <p><a href="#">Visi dan Misi</a></p>
            <p><a href="#">Profil Organisasi</a></p>
            <p><a href="#">Jajaran Direksi</a></p>
        </div>
    </div>
    <div class="footer-column">
            <h3>Sosial Media</h3>
            <div class="social-media">
                <a href="https://facebook.com/people/Rumah-Sakit-Paru-Jember/pfbid0AmA8DhuGzajXDBEfiU3SDRnRt52xBYEJSRFcdEjVA4zoJxsvPx6Hv8Gs1HeWR6sKl/" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/rsparujember_provjatim/?hl=id" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/watch?v=jzGtJYEPA0A&t=176s" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
    </div>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.slide');
            if (index >= slides.length) {
                currentSlide = 0; 
            } else if (index < 0) {
                currentSlide = slides.length - 1; 
            } else {
                currentSlide = index;
            }
            const offset = -currentSlide * 100;
            document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
        }

        function changeSlide(direction) {
            showSlide(currentSlide + direction);
        }

        setInterval(() => {
            changeSlide(1);
        }, 5000);

        let currentClinicSlide = 0;

        function changeClinicSlide(direction) {
            showClinicSlide(currentClinicSlide + direction);
        }

        function showClinicSlide(index) {
            const clinicSlides = document.querySelectorAll('.clinic-box');
            const totalSlides = clinicSlides.length;

            if (index > totalSlides) {
                currentClinicSlide = 0; 
            } else if (index < 0) {
                currentClinicSlide = totalSlide-1; 
            } else {
                currentClinicSlide = index;
            }

            const offset = -currentClinicSlide * 100;
            document.querySelector('.clinic-slider .slides').style.transform = `translateX(${offset}px)`;
        }

        setInterval(() => {
            changeClinicSlide(1);
        }, 5000);
    </script>

@endsection
