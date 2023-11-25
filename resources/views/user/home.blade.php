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
        <a href="#" class="navbar-logo">Kopi<span>NiceTry</span>.</a>

        <div class="navbar-nav">
            <a href="home">Home</a>
            <a href="about">About</a>
            <a href="menu">Menu</a>
            <a href="contact">Contact</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').
            submit();"
            id="log-out"><i data-feather="log-out"></i></a>

        
</div>

</nav>
<!-- Navbar End -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>

    <!-- Hero Selection Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Mari Nikmati Secangkir Kopi<span>NiceTry</span></h1>
            <p>Rumah bagi yang sering Nice Try mulu.</p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>
    <!-- Hero Selection end -->

    <script>
        feather.replace()
    </script>

    {{-- my java scrip --}}
    <script src="js/script.js"></script>
</body>
</html>