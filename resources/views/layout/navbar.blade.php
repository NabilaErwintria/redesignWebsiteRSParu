<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        /* CSS Navbar */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .top-bar {
            background-color: #2C2A5D;
            color: white;
            padding: 20px 0;
            font-size: 14px;
            width: 100%;
        }

        .top-bar .container, .main-navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .top-bar .social-icons a {
            color: white;
            margin-left: 20px; 
            padding: 0; 
        }

        .main-navbar {
            background-color: white;
            box-shadow: 0px 4px 2px -2px gray;
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 10px 0;
        }

        .main-navbar .nav-links a {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .main-navbar .nav-links a:hover {
            color: #007bff;
        }

        .search-box {
            display: flex;
            align-items: center;
            margin-left: auto; 
            position: relative;
        }

        .search-box input {
            padding: 5px 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            margin-right: 0px;
            width: 200px;
        }

        .search-box button {
            padding: 5px 15px;
            margin-left: 10px;
            border: none;
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            cursor: pointer;
            height: auto;
        }

        .search-icon {
            position: absolute; 
            right: 10px;
            top: 50%; 
            transform: translateY(-50%); 
            color: #888;
            cursor: pointer; 
        }

        /* CSS untuk slider */
        .slider {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            color: white;
        }

        #home { background-color: #3498db; }
        #about { background-color: #2ecc71; }
        #services { background-color: #e74c3c; }
        #contact { background-color: #f1c40f; }

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
    </style>
</head>
<body>

    <!-- Baris Pertama -->
    <div class="top-bar">
        <div class="container">
            <div class="left-info">
                <i class="fas fa-phone-alt"></i> IGD 24 Jam (+62) 882 1768 0398
            </div>
            <div class="social-icons">
                <a href="https://facebook.com/people/Rumah-Sakit-Paru-Jember/pfbid0AmA8DhuGzajXDBEfiU3SDRnRt52xBYEJSRFcdEjVA4zoJxsvPx6Hv8Gs1HeWR6sKl/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/rsparujember_provjatim/?hl=id"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/watch?v=jzGtJYEPA0A&t=176s"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Baris Kedua -->
    <div class="main-navbar">
        <div class="container">
            <div class="logo">
                <a href="#"><img src="{{ asset('assets/Logo.png') }}" alt="Logo" width="50"></a>
            </div>
            <div class="nav-links">
                <a href="/">Beranda</a>
                <a href="#">Profil</a>
                <a href="#">Berita</a>
                <a href="#">Pelayanan</a>
                <a href="#">Informasi</a>
                <a href="#">PPID</a>
                <a href="#">Forum</a>
                <a href="formKonsultasi">Pendaftaran Online</a>
                <a href="#">Dokter </a>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Cari di sini">
                <span class="search-icon"><i class="fas fa-search"></i></span>

            </div>
        </div>
    </div>

    @yield('content')

</body>
</html>
