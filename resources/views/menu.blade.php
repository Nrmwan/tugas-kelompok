<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kopi NiceTry</title>

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Fashion<span>Heaven</span>.</a>

        <div class="navbar-nav">
            <a href="/">Home</a>
            {{-- <a href="aboute">About</a> --}}
            <a href="menue">Menu</a>
            {{-- <a href="contacte">Contact</a> --}}
        </div>

        <div class="navbar-extra">
            {{-- <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> --}}
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            @if (Route::has('login'))
            <div class="icon">
                    <a href="#" id="search"><i data-feather="search"></i></a>
                    @auth
                        <a href="{{ url('/home') }}" class="icon">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="icon"><i data-feather="log-in"></i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="icon ">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

</nav>
<!-- Navbar End -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

    <!-- Menu Selection Start -->
<section id="menu" class="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Menu kami cuma ada Espresso karena biar menambah citarasa NiceTry kalian.</p>

    <div class="row">
        <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/3.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/3.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/3.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="img/menu/2.jpg" alt="Espresso" class="menu-card-img">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
    </div>

</section>
<!-- Menu Selection End -->


    <script>
        feather.replace()
    </script>

    {{-- my java scrip --}}
    <script src="js/script.js"></script>
</body>
</html>