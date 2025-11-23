@extends('frond-end.layout.app')


@push('after-style')
@endpush

@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-video">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myVideo">
                <source src="https://demo.awaikenthemes.com/assets/videos/inspaire-video.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Solusi Interior & Konstruksi</h3>
                            <h1 class="text-anime-style-2" data-cursor="-opaque">
                                Mewujudkan Ruang & Bangunan Impian Anda
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Kami ahli dalam desain interior, pembuatan furnitur custom, dan pembangunan hunian maupun
                                komersial, sesuai gaya dan kebutuhan Anda.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Button Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="{{ url('about') }}" class="btn-default">tentang kami</a>
                            <a href="{{ url('projects') }}" class="btn-default btn-highlighted">lihat proyek</a>
                        </div>
                        <!-- Hero Button End -->
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->


    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/about-img-1.jpg" alt="Interior Design Project">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/about-img-2.jpg" alt="Construction and Furniture">
                            </figure>

                            <!-- Experience Counter Start -->
                            <div class="experience-counter">
                                <h3><span class="counter">15</span>+</h3>
                                <p>Tahun pengalaman</p>
                            </div>
                            <!-- Experience Counter End -->
                        </div>
                        <!-- About Image 2 End -->

                        <!-- Feedback Counter Start -->
                        <div class="feedback-counter">
                            <p><span class="counter">95</span>%</p>
                            <h3>kepuasan pelanggan</h3>
                        </div>
                        <!-- Feedback Counter End -->
                    </div>
                    <!-- About Us Images End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">tentang kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Komitmen Kami Mewujudkan <span>Ruang dan Bangunan Impian Anda</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Kami adalah tim profesional di bidang desain interior, pembuatan furnitur, dan konstruksi
                                bangunan. Dengan pendekatan personal dan perhatian pada detail, kami menghadirkan solusi
                                yang estetis, fungsional, dan sesuai kebutuhan Anda — dari ruang tinggal hingga proyek
                                komersial.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Content Body Start -->
                        <div class="about-us-content-body">
                            <!-- About Content Info Start -->
                            <div class="about-us-content-info">
                                <!-- About Us Content List Start -->
                                <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Desain kreatif & fungsional</li>
                                        <li>Pelayanan berorientasi klien</li>
                                    </ul>
                                </div>
                                <!-- About Us Content List End -->

                                <!-- About Us Content Button Start -->
                                <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="{{ url('layanan-kami') }}" class="btn-default">selengkapnya</a>
                                </div>
                                <!-- About Us Content Button End -->
                            </div>
                            <!-- About Content Info End -->

                            <!-- About Content Contact List Start -->
                            <div class="about-us-contact-list">
                                <!-- Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Butuh bantuan?</p>
                                        <h3>087712152690</h3>
                                    </div>
                                </div>
                                <!-- Contact Item End -->

                                <!-- Contact Item Start -->
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box">
                                        <figure class="image-anime">
                                            <img src="images/logo-news.png" alt="Founder">
                                        </figure>
                                    </div>
                                    <div class="about-contact-content">
                                        <h3>Dika Antoni Putra</h3>
                                        <p>Manager Marketing</p>
                                    </div>
                                </div>
                                <!-- Contact Item End -->
                            </div>
                            <!-- About Content Contact List End -->
                        </div>
                        <!-- About Us Content Body End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->


    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Why Choose Content Start -->
                    <div class="why-choose-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">mengapa memilih kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Dedikasi & Kualitas dalam <span>Setiap
                                    Proyek</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Dari konsep hingga penyelesaian, kami menghadirkan solusi interior, furnitur, dan
                                pembangunan yang inovatif dan berkelas, dengan kolaborasi menyeluruh dan hasil terbaik.
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list">
                            <!-- Item 1 -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-1.svg" alt="Desain Unik">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Solusi Desain yang Disesuaikan</h3>
                                    <p>Kami menghadirkan desain interior dan furnitur yang dirancang khusus untuk
                                        mencerminkan gaya dan kebutuhan unik Anda.</p>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-2.svg" alt="Manajemen Proyek">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Manajemen Proyek Terpadu</h3>
                                    <p>Proyek Anda kami kelola secara menyeluruh — dari perencanaan, desain, produksi,
                                        hingga pembangunan — dengan hasil yang terukur dan efisien.</p>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-3.svg" alt="Kolaborasi Klien">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Kolaborasi Berbasis Klien</h3>
                                    <p>Kami menjadikan masukan Anda sebagai kunci dalam proses desain dan pembangunan agar
                                        hasil benar-benar sesuai harapan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Why Choose Item List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Why Choose Images Start -->
                    <div class="why-choose-images">
                        <div class="why-choose-img-box-1">
                            <div class="why-choose-img-1">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-1.jpg" alt="Interior Design">
                                </figure>
                            </div>
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-2.jpg" alt="Furniture Manufacturing">
                                </figure>
                            </div>
                        </div>

                        <div class="why-choose-img-box-2">
                            <div class="why-choose-img-3">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-3.jpg" alt="Construction Work">
                                </figure>
                            </div>
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-4.jpg" alt="Finished Projects">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!-- Why Choose Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->


    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">layanan kami</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Layanan desain & konstruksi
                            <span>inovatif</span>
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Kami menyediakan berbagai layanan desain interior, pembuatan furnitur, dan pembangunan yang
                            disesuaikan dengan kebutuhan Anda — dari ide hingga realisasi.
                        </p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ url('layanan-kami') }}" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-1.jpg" alt="Desain Interior Hunian">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ url('layanan-kami') }}"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ url('layanan-kami') }}">Desain Interior Hunian</a></h3>
                            <p>Kami menciptakan ruang tinggal yang personal dan fungsional sesuai gaya hidup Anda.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ url('layanan-kami') }}" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-2.jpg" alt="Desain Interior Komersial">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ url('layanan-kami') }}"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ url('layanan-kami') }}">Desain Interior Komersial</a></h3>
                            <p>Meningkatkan suasana ruang usaha Anda secara profesional, fungsional, dan menarik secara
                                visual.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="{{ url('layanan-kami') }}" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-3.jpg" alt="Pemilihan Furnitur dan Dekorasi">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->

                        <!-- Service Button Start -->
                        <div class="service-btn">
                            <a href="{{ url('layanan-kami') }}"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <!-- Service Button End -->

                        <!-- Service Content Start -->
                        <div class="service-content">
                            <h3><a href="{{ url('layanan-kami') }}">Furnitur & Dekorasi</a></h3>
                            <p>Tim kami membantu Anda memilih furnitur dan dekorasi yang selaras dengan konsep dan gaya
                                ruangan Anda.</p>
                        </div>
                        <!-- Service Content End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- All Services Button Start -->
                    <div class="all-services-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="{{ url('layanan-kami') }}" class="btn-default">lihat semua layanan</a>
                    </div>
                    <!-- All Services Button End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- How We Work Start -->
    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Judul Bagian -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Cara Kami Bekerja</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Dari konsep hingga penyelesaian dalam <span>setiap proyek</span>
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Deskripsi Bagian -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Pendekatan menyeluruh kami membimbing Anda melalui setiap tahap proses desain, mulai dari
                            brainstorming awal hingga perwujudan konsep.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Daftar Proses Kerja -->
                    <div class="how-we-work-list">

                        <!-- Langkah 1 -->
                        <div class="how-we-work-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-1.svg" alt="Konsultasi Awal">
                            </div>
                            <div class="how-we-work-content">
                                <h3>01. Konsultasi Awal</h3>
                                <p>Kami memulai dengan pertemuan langsung untuk memahami visi, preferensi, dan kebutuhan
                                    Anda.</p>
                            </div>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-2.svg" alt="Perencanaan Desain">
                            </div>
                            <div class="how-we-work-content">
                                <h3>02. Perencanaan Desain</h3>
                                <p>Meliputi pemilihan material, tata letak, furnitur, serta pembuatan visualisasi 3D.</p>
                            </div>
                        </div>

                        <!-- Langkah 3 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-3.svg" alt="Pelaksanaan Proyek">
                            </div>
                            <div class="how-we-work-content">
                                <h3>03. Pelaksanaan Proyek</h3>
                                <p>Dengan rencana desain yang telah disusun, kami mengelola dan mengoordinasikan seluruh
                                    aspek proyek.</p>
                            </div>
                        </div>

                        <!-- Langkah 4 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-4.svg" alt="Tinjauan Akhir">
                            </div>
                            <div class="how-we-work-content">
                                <h3>04. Tinjauan Akhir</h3>
                                <p>Setelah proyek selesai, kami melakukan peninjauan menyeluruh bersama Anda untuk
                                    memastikan semua sesuai harapan.</p>
                            </div>
                        </div>
                    </div>

                    {{-- <!-- Slider Logo Perusahaan -->
                    <div class="how-work-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-1.svg" alt="Logo Mitra 1">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-2.svg" alt="Logo Mitra 2">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-3.svg" alt="Logo Mitra 3">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-4.svg" alt="Logo Mitra 4">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-5.svg" alt="Logo Mitra 5">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-1.svg" alt="Logo Mitra 1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Slider Logo --> --}}
                </div>
            </div>
        </div>
    </div>


    <!-- Our Project Start -->
    <div class="our-project">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">proyek terbaru</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Proyek kreatif yang mencerminkan <span>gaya
                                kami</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Portofolio kami menampilkan berbagai proyek inspiratif — mulai dari hunian elegan hingga ruang
                            komersial yang fungsional dan penuh gaya.
                        </p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>


            {{-- <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".architecture">architecture</a></li>
                            <li><a href="#" data-filter=".interior">interior</a></li>
                            <li><a href="#" data-filter=".bedroom">bedroom</a></li>
                            <li><a href="#" data-filter=".furniture">furniture</a></li>
                            <li><a href="#" data-filter=".kitchen">kitchen</a></li>
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>

                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-6 project-item-box architecture bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-1.jpg" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>residential spaces</h3>
                                    <h2><a href="project-single.html">urban retreat: modern design meets comfort</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box interior kitchen">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-2.jpg" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>luxury homes</h3>
                                    <h2><a href="project-single.html">luxurious loft: industrial chic for living</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box furniture architecture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-3.jpg" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>outdoor living spaces</h3>
                                    <h2><a href="project-single.html">coastal vibes: serenity by the sea</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box kitchen bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-4.jpg" alt="">
                                        </figure>
                                    </div>

                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="project-content">
                                    <h3>modern designs</h3>
                                    <h2><a href="project-single.html">minimalist haven: simple, clean, inviting spaces</a>
                                    </h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Our Project End -->


    <!-- How We Work End -->

    <!-- Our Skill Start -->
    <div class="our-skill">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Konten Keahlian Kami -->
                    <div class="our-skill-content">
                        <!-- Judul Seksi -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Keahlian Kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Keahlian yang mewujudkan <span>rumah impian</span> Anda
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tim desainer kami yang berdedikasi bekerja sama dengan Anda untuk memahami visi Anda dan
                                mewujudkannya dengan perhatian penuh terhadap detail.
                            </p>
                        </div>

                        <!-- SkillBar -->
                        <div class="our-skillbar">
                            <!-- Item Keahlian -->
                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="95%">
                                    <div class="skill-data">
                                        <div class="skill-title">Perencanaan Ruang dan Tata Letak</div>
                                        <div class="skill-no">95%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="95%">
                                    <div class="skill-data">
                                        <div class="skill-title">Tantangan Proyek & Solusi</div>
                                        <div class="skill-no">95%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="95%">
                                    <div class="skill-data">
                                        <div class="skill-title">Bahan Ramah Lingkungan & Awet</div>
                                        <div class="skill-no">95%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End SkillBar -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Gambar Keahlian -->
                    <div class="our-skill-image">
                        <div class="our-skill-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-1.jpg"
                                    alt="Desain interior modern yang dikerjakan oleh tim kami">
                            </figure>
                        </div>

                        <div class="our-skill-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-2.jpg"
                                    alt="Proses pengerjaan proyek interior dengan detail">
                            </figure>
                        </div>

                        <div class="our-skill-img-3">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-3.jpg"
                                    alt="Hasil akhir interior rumah dengan konsep ramah lingkungan">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Skill End -->

    <!-- Our Testimonial Start -->
    {{-- <section class="our-testimonials" id="testimoni-klien">
        <div class="container-fluid">
            <div class="row no-gutters">
                <!-- Gambar Testimoni -->
                <div class="col-lg-6">
                    <div class="our-testimonials-image">
                        <figure class="image-anime">
                            <img src="images/testimonial-img.jpg" loading="lazy"
                                alt="Klien puas setelah renovasi interior rumahnya">
                        </figure>
                    </div>
                </div>

                <!-- Konten Testimoni -->
                <div class="col-lg-6">
                    <div class="our-testimonial-content">
                        <!-- Judul Seksi -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Testimoni Klien</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Dipercaya oleh ribuan <span>individu & perusahaan</span>
                            </h2>
                        </div>

                        <!-- Slider Testimoni -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Geser">
                                    <!-- Testimoni 1 -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Saya sangat senang dengan transformasi rumah saya! Sejak konsultasi
                                                    pertama, tim ini benar-benar memahami visi dan preferensi saya.</p>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-1.jpg" loading="lazy"
                                                            alt="Foto klien Arlene McCoy">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Arlene McCoy</h3>
                                                    <p>Co-Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimoni 2 -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <div class="testimonial-content">
                                                <p>Transformasi rumah saya benar-benar luar biasa! Tim benar-benar
                                                    mendengarkan dan memberikan hasil yang sesuai dengan impian saya.</p>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-1.jpg" loading="lazy"
                                                            alt="Foto klien Arlene McCoy">
                                                    </figure>
                                                </div>
                                                <div class="author-content">
                                                    <h3>Arlene McCoy</h3>
                                                    <p>Co-Founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tambahkan testimoni tambahan di sini jika diperlukan -->
                                </div>
                            </div>
                        </div>

                        <!-- Rating Total -->
                        <div class="testimonial-rating-counter">
                            <div class="rating-counter">
                                <h2><span class="counter">4.82</span></h2>
                            </div>
                            <div class="testimonial-rating-content">
                                <div class="testimonial-client-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>2.488 ulasan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Our Testimonial End -->

    {{-- <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest news</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your guide to</span> inspired interiors
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Your journey to inspired interiors begins here. Our
                            blog offers a wealth of resources, including design tips, trend analyses.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">How Does One Go About a Buying Furniture?</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">Innovative Décor Ideas Shaping Homes Today</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">Design Industry Updates You Should Know About</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Our Blog Footer Start -->
                    <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
                        <a href="blog.html" class="btn-default">See All Blogs</a>
                    </div>
                    <!-- Our Blog Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End --> --}}
@endsection

@push('after-script')
@endpush
