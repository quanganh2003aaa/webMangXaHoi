<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
            <i class="bi bi-fingerprint"></i>
            <h1>HopeSo</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{route('home')}}" class="active">Trang chủ</a></li>
                <li><a href="{{route('indexFriend')}}">Bạn bè</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
