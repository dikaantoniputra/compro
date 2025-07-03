@extends('frond-end.layout.app')


@push('after-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
@endpush

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie" id="tentang-kami">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Box Judul Halaman -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Tentang Kami</h1>

                    </div>
                    <!-- End Box Judul -->
                </div>
            </div>
        </div>
    </div>

    <!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us page-about-us" id="tentang-ruangbagus">
        <div class="container">
            <div class="row align-items-center">
                <!-- Gambar Tentang Kami -->
                <div class="col-lg-6">
                    <div class="about-us-images">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/about-img-1.jpg" loading="lazy"
                                    alt="Desain interior PT. Ruangbagus dalam pengerjaan">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/about-img-2.jpg" loading="lazy"
                                    alt="Tim PT. Ruangbagus menyelesaikan proyek">
                            </figure>

                            <!-- Pengalaman -->
                            <div class="experience-counter">
                                <h3><span class="counter">15</span>+</h3>
                                <p>Tahun Pengalaman</p>
                            </div>
                        </div>

                        <!-- Feedback Positif -->
                        <div class="feedback-counter">
                            <p><span class="counter">95</span>%</p>
                            <h3>Umpan Balik Positif</h3>
                        </div>
                    </div>
                </div>

                <!-- Konten Tentang Kami -->
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Tentang Kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Semangat dalam desain, <span>visi Anda kami
                                    wujudkan</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                PT. Ruangbagus adalah perusahaan yang berfokus pada desain interior, pembuatan furnitur
                                custom, dan pembangunan ruang yang inovatif. Kami bekerja sama dengan klien untuk
                                menghadirkan solusi yang fungsional, estetik, dan sesuai kebutuhan.
                            </p>
                        </div>

                        <div class="about-us-content-body">
                            <div class="about-us-content-info">
                                <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                    <ul>
                                        <li>Keahlian Desain Kreatif</li>
                                        <li>Pendekatan Berorientasi Klien</li>
                                    </ul>
                                </div>

                                <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                    <a href="contact.html" class="btn-default">Hubungi Kami</a>
                                </div>
                            </div>

                            <div class="about-us-contact-list">
                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="about-contact-content">
                                        <p>Butuh Bantuan?</p>
                                        <h3>+62 812 3456 7890</h3>
                                    </div>
                                </div>

                                <div class="about-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="icon-box">
                                        <figure class="image-anime">
                                            <img src="images/author-1.jpg" loading="lazy"
                                                alt="Leslie Alexander - Co Founder PT Ruangbagus">
                                        </figure>
                                    </div>
                                    <div class="about-contact-content">
                                        <h3>Leslie Alexander</h3>
                                        <p>Co-Founder</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fasilitas Perusahaan -->
                <div class="col-lg-12">
                    <div class="about-facility-list">
                        <div class="about-facility-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-about-facility-1.svg" alt="Harga Terjangkau - PT Ruangbagus">
                            </div>
                            <div class="about-facility-content">
                                <h3>Harga Terjangkau</h3>
                                <p>Kami memproduksi furnitur berkualitas untuk semua kalangan dengan harga yang kompetitif.
                                </p>
                            </div>
                        </div>

                        <div class="about-facility-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-about-facility-2.svg" alt="Desain Eksklusif - PT Ruangbagus">
                            </div>
                            <div class="about-facility-content">
                                <h3>Desain Eksklusif</h3>
                                <p>Kami memadukan imajinasi, pengalaman, dan profesionalisme dalam setiap hasil desain.</p>
                            </div>
                        </div>

                        <div class="about-facility-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-about-facility-2.svg" alt="Tim Profesional - PT Ruangbagus">
                            </div>
                            <div class="about-facility-content">
                                <h3>Tim Profesional</h3>
                                <p>Kami bangga dengan tim kami yang ramah, berpengalaman, dan terus berkembang.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section End -->

    <!-- Vision Mission Start -->
    <div class="vision-mission" id="visi-misi">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Judul Seksi -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Visi & Misi</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Pandangan mendalam tentang <span>PT. Ruangbagus</span>
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Deskripsi Singkat -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Portofolio kami mencerminkan beragam proyek—dari ruang hunian yang nyaman hingga interior
                            komersial yang fungsional dan bergaya, dirancang untuk memenuhi kebutuhan klien secara
                            menyeluruh.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Box Visi & Misi -->
                    <div class="vision-mission-box">
                        <!-- Visi -->
                        <div class="vision-mission-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-our-vision.svg" alt="Ikon Visi PT Ruangbagus">
                            </div>
                            <div class="vision-mission-content">
                                <h3>Visi Kami</h3>
                                <p>
                                    Visi kami berakar pada keyakinan bahwa ruang yang dirancang dengan cermat dapat mengubah
                                    kehidupan—meningkatkan kenyamanan, produktivitas, dan koneksi antar manusia.
                                    Kami berkomitmen menciptakan interior yang mencerminkan identitas unik setiap klien,
                                    memadukan kenyamanan, fungsionalitas, dan keindahan.
                                    Dengan menggabungkan desain yang tak lekang oleh waktu dan inovasi modern, kami
                                    menciptakan ruang yang memukau secara visual dan praktis.
                                </p>
                            </div>
                        </div>

                        <!-- Misi -->
                        <div class="vision-mission-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-our-mission.svg" alt="Ikon Misi PT Ruangbagus">
                            </div>
                            <div class="vision-mission-content">
                                <h3>Misi Kami</h3>
                                <p>
                                    Misi kami adalah menghadirkan desain interior yang luar biasa, meningkatkan kualitas
                                    hidup melalui kenyamanan, fungsi, dan estetika.
                                    Kami bertujuan untuk menciptakan ruang yang tidak hanya menarik secara visual tetapi
                                    juga disesuaikan dengan kebutuhan dan keinginan spesifik setiap klien.
                                    Dengan menjunjung tinggi inovasi desain, setiap proyek mencerminkan keseimbangan
                                    sempurna antara gaya dan tujuan.
                                </p>
                            </div>
                        </div>
                        <!-- End Misi -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision Mission End -->

    <!-- Best Seeling Start -->
    <div class="best-selling" id="material-unggulan">
        <div class="container">
            <div class="row">
                <!-- Konten Kiri -->
                <div class="col-lg-6">
                    <div class="best-selling-content">
                        <!-- Gambar Konten -->
                        <div class="best-selling-content-img">
                            <figure class="image-anime reveal">
                                <img src="images/best-selling-img-1.jpg" loading="lazy"
                                    alt="Material finishing berkualitas dari PT Ruangbagus">
                            </figure>
                        </div>

                        <!-- Judul Seksi -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Finishing Terlaris</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Kami hanya menggunakan material dari <span>supplier terpercaya</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Finishing gloss, matte, tekstur kayu, lebih dari 200 pilihan warna. Semua bahan ramah
                                lingkungan dan bersertifikat — menjamin keindahan serta keamanan untuk ruang Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Gambar Kanan -->
                <div class="col-lg-6">
                    <div class="best-selling-iamge">
                        <figure class="image-anime reveal">
                            <img src="images/best-selling-img-2.jpg" loading="lazy"
                                alt="Contoh finishing furniture interior modern dari PT Ruangbagus">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">meet our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Creative minds always <span>think
                                something</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">We offer a range of bespoke interior design services
                            tailored to your unique needs. From concept development to final installation.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-1.jpg" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>harry R. blackston</h3>
                                <p>co-founder & CEO</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item Start -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-2.jpg" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>alexa brook</h3>
                                <p>human resoures manager</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item Start -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="team-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-3.jpg" alt="">
                                </figure>
                            </a>

                            <!-- Team Readmore Button Start -->
                            <div class="team-readmore-btn">
                                <a href="#"><img src="images/arrow-white.svg" alt=""></a>
                            </div>
                            <!-- Team Readmore Button End -->
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3>suzen hilly</h3>
                                <p>civil engineering</p>
                            </div>
                            <!-- Team Content End -->

                            <!-- Team Social List Start -->
                            <div class="team-social-list">
                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Social List End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item Start -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- How We Work Start -->
    <div class="how-we-work" id="cara-kerja">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Judul Seksi -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Proses Kerja Kami</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Dari konsep hingga penyelesaian <span>proyek ruang Anda</span>
                        </h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Deskripsi Singkat -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Pendekatan komprehensif kami membimbing Anda melalui setiap tahap proses desain dan pembangunan
                            — mulai dari brainstorming awal hingga serah terima akhir ruang.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Daftar Tahapan Kerja -->
                    <div class="how-we-work-list">
                        <!-- Langkah 1 -->
                        <div class="how-we-work-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-1.svg" alt="Konsultasi Awal">
                            </div>
                            <div class="how-we-work-content">
                                <h3>01. Konsultasi Awal</h3>
                                <p>Kami memulai dengan pertemuan tatap muka untuk memahami visi, preferensi, dan kebutuhan
                                    Anda secara detail.</p>
                            </div>
                        </div>

                        <!-- Langkah 2 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-2.svg" alt="Perencanaan Desain Interior">
                            </div>
                            <div class="how-we-work-content">
                                <h3>02. Perencanaan Desain</h3>
                                <p>Kami memilih material, menentukan tata letak, furnitur, serta menyusun visualisasi 3D
                                    untuk memberikan gambaran nyata sebelum pelaksanaan.</p>
                            </div>
                        </div>

                        <!-- Langkah 3 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-3.svg" alt="Pelaksanaan Proyek">
                            </div>
                            <div class="how-we-work-content">
                                <h3>03. Pelaksanaan Proyek</h3>
                                <p>Dengan desain yang telah disepakati, tim kami akan mengelola dan mengoordinasikan seluruh
                                    proses pembangunan dengan standar tinggi.</p>
                            </div>
                        </div>

                        <!-- Langkah 4 -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-4.svg" alt="Tinjauan & Serah Terima">
                            </div>
                            <div class="how-we-work-content">
                                <h3>04. Tinjauan & Serah Terima</h3>
                                <p>Setelah proyek selesai, kami melakukan evaluasi bersama Anda untuk memastikan semua
                                    elemen sesuai ekspektasi dan siap digunakan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Logo Perusahaan Pendukung -->
                    <div class="how-work-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-1.svg" alt="Mitra Ruangbagus">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-2.svg" alt="Partner Interior">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-3.svg" alt="Supplier Furnitur">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-4.svg" alt="Kontraktor Profesional">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-5.svg" alt="Mitra Strategis Ruangbagus">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Slider Logo -->
                </div>
            </div>
        </div>
    </div>

    <!-- How We Work End -->

    <!-- Our Faqs Stat -->
    <div class="our-faqs" id="faq">
        <div class="container">
            <div class="row align-items-center">
                <!-- Konten FAQ -->
                <div class="col-lg-7">
                    <div class="our-faqs-content">
                        <!-- Judul Seksi -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Pertanyaan Umum</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Punya pertanyaan? <span>Lihat di sini</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                Tim profesional kami siap membantu Anda dalam setiap proses — dari desain, pemilihan
                                furnitur, hingga pembangunan ruang secara menyeluruh.
                            </p>
                        </div>

                        <!-- FAQ Accordion -->
                        <div class="faq-accordion" id="accordion">
                            <!-- Item 1 -->
                            <div class="accordion-item wow fadeInUp">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                        <span>1.</span> Bagaimana proses awal memulai proyek desain di PT. Ruangbagus?
                                    </button>
                                </h2>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Kami memulai dengan konsultasi untuk memahami kebutuhan, selera, dan tujuan
                                            ruang Anda. Setelah itu kami lanjutkan dengan perencanaan, presentasi desain,
                                            dan pelaksanaan proyek.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        <span>2.</span> Berapa lama waktu pengerjaan proyek interior biasanya?
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Lama waktu proyek bergantung pada kompleksitas dan skala pekerjaan. Rata-rata
                                            proyek desain interior kami selesai antara 4 hingga 12 minggu, termasuk proses
                                            perencanaan dan implementasi.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        <span>3.</span> Apakah saya bisa menggunakan furnitur lama dalam desain baru?
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Tentu saja. Kami dengan senang hati mengintegrasikan furnitur favorit Anda ke
                                            dalam konsep desain baru, selama sesuai dengan estetika dan fungsionalitas ruang
                                            yang dirancang.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        <span>4.</span> Apa saja yang dibahas saat sesi konsultasi awal?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>
                                            Dalam konsultasi awal, kami akan membahas gaya desain yang Anda sukai, fungsi
                                            ruang, kebutuhan keluarga/perusahaan, serta anggaran dan timeline proyek yang
                                            diinginkan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                    </div>
                </div>

                <!-- Gambar FAQ -->
                <div class="col-lg-5">
                    <div class="our-faqs-image">
                        <figure class="image-anime reveal">
                            <img src="images/faqs-image.jpg" alt="FAQ PT Ruangbagus - Interior & Pembangunan Ruang">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Faqs End -->

    <!-- Our Clients Start -->
    <div class="our-clients" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="our-clients-box">
                        <!-- Judul Seksi -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Klien Kami</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Telah menata lebih dari <span>1000+ ruang</span> dengan desain personal
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                                PT. Ruangbagus telah dipercaya untuk mengerjakan lebih dari 100+ proyek interior dan
                                pembangunan ruang —
                                mulai dari hunian pribadi hingga ruang komersial. Kami fokus pada perpaduan estetika,
                                fungsionalitas,
                                dan karakter unik dari setiap klien.
                            </p>
                        </div>

                        <!-- Slider Logo Klien -->
                        <div class="our-client-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <!-- Logo Klien -->
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="images/client-logo-1.svg" alt="Logo Klien 1">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="images/client-logo-2.svg" alt="Logo Klien 2">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="images/client-logo-3.svg" alt="Logo Klien 3">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="images/client-logo-4.svg" alt="Logo Klien 4">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-logo">
                                            <img src="images/client-logo-5.svg" alt="Logo Klien 5">
                                        </div>
                                    </div>
                                    <!-- Tambahkan lebih banyak logo sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Slider Logo Klien -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Clients End -->
@endsection

@push('after-script')
@endpush
