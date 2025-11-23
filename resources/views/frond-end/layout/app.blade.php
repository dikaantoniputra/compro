<!DOCTYPE html>

<html lang="en">

<head>
    @stack('before-style')
    @include('frond-end.include.head')
    @stack('after-style')
</head>


<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/logo-news.png" alt=""
                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;"></div>
        </div>
    </div>
    <!-- Preloader End -->

    @include('frond-end.include.nav')

    @yield('content')
    @include('frond-end.include.footer')



    @stack('before-script')
    @include('frond-end.include.script')
    @stack('after-script')
    </div>
</body>

</html>
