@extends('frond-end.layout.app')


@push('after-style')
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Services</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Services Section Start -->
    <div class="page-services">
        <div class="container">
            <div class="row">

                <!-- Layanan: Interior Hunian -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Desain Interior Hunian</a></h3>
                            <p>Kami menciptakan ruang tinggal yang personal dan fungsional sesuai gaya hidup Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Layanan: Interior Komersial -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Desain Interior Komersial</a></h3>
                            <p>Meningkatkan ruang bisnis Anda agar tampil profesional, efisien, dan berestetika.</p>
                        </div>
                    </div>
                </div>

                <!-- Layanan: Pemilihan Furnitur -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Pemilihan Furnitur & Dekorasi</a></h3>
                            <p>Tim kami membantu memilih furnitur dan dekorasi terbaik sesuai gaya interior Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Layanan: Desain Pencahayaan -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-4.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Pembangunan Ruang Berkualitas</a></h3>
                            <p>PT. Ruangbagus menghadirkan pembangunan ruang yang fungsional dan estetis untuk kebutuhan
                                hunian maupun bisnis Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Layanan: Konsultasi Warna -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-5.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Renovasi Interior Profesional</a></h3>
                            <p>Transformasi ruang lama menjadi baru dengan sentuhan desain modern dan pengerjaan yang
                                presisi dari tim ahli kami.</p>
                        </div>
                    </div>
                </div>

                <!-- Layanan: Visualisasi 3D -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="Lihat">
                                <figure class="image-anime">
                                    <img src="images/service-6.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="service-btn">
                            <a href="service-single.html"><img src="images/arrow-white.svg" alt=""></a>
                        </div>
                        <div class="service-content">
                            <h3><a href="service-single.html">Konstruksi Bangunan Terintegrasi</a></h3>
                            <p>Mulai dari perencanaan hingga penyelesaian, kami membangun gedung, rumah, dan kantor sesuai
                                standar terbaik.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Our Services Section End -->

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
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Solusi profesional dari <span>PT.
                                    Ruangbagus</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Kami menghadirkan layanan desain dan pembangunan
                                dengan pendekatan menyeluruh — dari ide hingga realisasi — untuk hasil yang fungsional,
                                estetis, dan berkualitas tinggi.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Why Choose Item List Start -->
                        <div class="why-choose-item-list">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.4s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-1.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Solusi Desain yang Disesuaikan</h3>
                                    <p>Kami menawarkan layanan desain interior dan konstruksi yang dirancang khusus sesuai
                                        kebutuhan dan gaya hidup Anda.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.6s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-2.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Manajemen Proyek Terpadu</h3>
                                    <p>Kami mengelola seluruh proses proyek secara profesional, mulai dari perencanaan
                                        hingga pelaksanaan, untuk memastikan hasil tepat waktu dan efisien.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.8s">
                                <!-- Icon Box Start -->
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-3.svg" alt="">
                                </div>
                                <!-- Icon Box End -->

                                <!-- Why Choose Item Content Start -->
                                <div class="why-choose-item-content">
                                    <h3>Kolaborasi Berbasis Klien</h3>
                                    <p>Setiap keputusan kami ambil berdasarkan komunikasi terbuka dengan Anda, agar setiap
                                        proyek benar-benar mencerminkan keinginan dan visi Anda.</p>
                                </div>
                                <!-- Why Choose Item Content End -->
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                        <!-- Why Choose Item List End -->
                    </div>
                    <!-- Why Choose Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- Why Choose Images Images Start -->
                    <div class="why-choose-images">
                        <!-- Why Choose Box 1 Start -->
                        <div class="why-choose-img-box-1">
                            <!-- Why Choose img 1 Start -->
                            <div class="why-choose-img-1">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-1.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 1 End -->

                            <!-- Why Choose img 2 Start -->
                            <div class="why-choose-img-2">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-2.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 2 End -->
                        </div>
                        <!-- Why Choose Box 1 End -->

                        <!-- Why Choose Box 2 Start -->
                        <div class="why-choose-img-box-2">
                            <!-- Why Choose img 3 Start -->
                            <div class="why-choose-img-3">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-3.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 3 End -->

                            <!-- Why Choose img 4 Start -->
                            <div class="why-choose-img-4">
                                <figure class="image-anime reveal">
                                    <img src="images/why-choose-img-4.jpg" alt="">
                                </figure>
                            </div>
                            <!-- Why Choose img 4 End -->
                        </div>
                        <!-- Why Choose Box 2 End -->
                    </div>
                    <!-- Why Choose Images Images End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section End -->

    <!-- Our Skill Start -->
    <div class="our-skill">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Konten Keahlian Kami -->
                    <div class="our-skill-content">
                        <!-- Judul Section -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">keahlian kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Keahlian yang membentuk <span>hunian
                                    impian</span> Anda</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tim desainer kami bekerja secara kolaboratif untuk memahami visi Anda dan mewujudkannya
                                dengan perhatian mendetail dan pendekatan profesional.
                            </p>
                        </div>
                        <!-- Akhir Judul Section -->

                        <!-- Skill Bar -->
                        <div class="our-skillbar">

                            <!-- Skill: Perencanaan Ruang -->
                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="95%">
                                    <div class="skill-data">
                                        <div class="skill-title">Perencanaan Ruang & Tata Letak</div>
                                        <div class="skill-no">95%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Skill: Tantangan Proyek -->
                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="85%">
                                    <div class="skill-data">
                                        <div class="skill-title">Tantangan Proyek & Solusi</div>
                                        <div class="skill-no">85%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Skill: Ramah Lingkungan -->
                            <div class="skills-progress-bar">
                                <div class="skillbar" data-percent="75%">
                                    <div class="skill-data">
                                        <div class="skill-title">Fitur Ramah Lingkungan & Berkelanjutan</div>
                                        <div class="skill-no">75%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Akhir Skill Bar -->
                    </div>
                    <!-- Akhir Konten Keahlian -->
                </div>

                <div class="col-lg-6">
                    <!-- Gambar Keahlian -->
                    <div class="our-skill-image">
                        <div class="our-skill-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="our-skill-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <div class="our-skill-img-3">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-3.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Akhir Gambar Keahlian -->
                </div>
            </div>
        </div>
    </div>

    <!-- Our Skill End -->
@endsection

@push('after-script')
@endpush
