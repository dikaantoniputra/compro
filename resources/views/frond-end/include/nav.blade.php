<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="container">
            <div class="navbar navbar-expand-lg">
                <!-- Logo Start -->
                <a class="navbar-brand" href="index-2.html" style="display: flex; align-items: center; gap: 10px;">
                    <img src="images/logo-news.png" alt="Logo"
                        style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                    <span style="color: white;">Ruang Bagus</span>
                </a>


                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About Us</a>
                            <li class="nav-item"><a class="nav-link" href="{{ url('layanan-kami') }}">Layanan Kami</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('projects') }}">Projects</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li> --}}

                            <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Header Btn Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="contact.html" class="btn-default">Hubungi Kami</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
