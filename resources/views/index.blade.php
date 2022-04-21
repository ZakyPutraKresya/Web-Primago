@extends('layouts.app')

@section('content')
<!-- ======= Header ======= -->
@include('components.navbar')
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active"
                style="background-image: url({{asset('template')}}/img/slide/slide-1.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>Primago</span></h2>
                        <p class="animate__animated animate__fadeInUp">PRIMAGO hadir dengan konsep bimbingan belajar yang berbeda dari bimbel lainnya, dengan lebih mengutamakan aspek pembentukan karakter, Akhlaq, Iman dan Ilmu ketimbang nilai diatas kertas.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{asset('template')}}/img/slide/slide-2.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Visi Primago</h2>
                        <p class="animate__animated animate__fadeInUp">Menjadi Sekolah islam yang mampu mencetak kader-kader pemimpin ummat, berkarakter,cakap dan terampil, menjadi tempat ibadah dan sumber ilmu pengetahuan agama dan umum yang berasaskan pada nilai -nilai pesantren.</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{asset('template')}}/img/slide/slide-3.jpg)">
                <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Misi Primago</h2>
                        <p class="animate__animated animate__fadeInUp">Mempersiapkan generasi yang unggul dan berkualitas menuju terbentuknya khairuummah yang siap belajar di pesantren, dan masih banyak lagi.</p>
                    </div>
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row content">
                <div class="col-lg-6">
                    <h2>Primago School</h2>
                    <h3>Best Bridge to Gontor</h3>
                    <img src="{{asset('template')}}/img/logo.png" alt="" width="300">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <br>
                    <p>
                        Visi dari Primago adalah menjadi Sekolah islam yang mampu mencetak kader-kader pemimpin ummat, berkarakter,cakap dan terampil, menjadi tempat ibadah dan sumber ilmu pengetahuan agama dan umum yang berasaskan pada nilai -nilai pesantren.
                    </p>
                    <p>
                        Pada dasarnya, pendidikan yang akan dilaksanakan Yayasan Pendidikan Primago Indonesia adalah masih satu kesatuan pendidikan untuk memberikan landasan yang kuat pada anak dalam hal kepribadian untuk dapat “Learn How to Learn” (Belajar Bagaimana Belajar), sehingga ia mampu menyempurnakan pemahaman “Learn How to Learn” (Belajar Bagaimana Belajar).
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="bi bi-graph-up"></i>
                        <h4><a href="#">Generasi Berkualitas</a></h4>
                        <p>Mempersiapkan generasi yang unggul dan berkualitas menuju terbentuknya khairuummah yang siap belajar di pesantren gontor.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-moon-stars"></i>
                        <h4><a href="#">Pendidikan Integral</a></h4>
                        <p>Menyelenggarakan pendidikan yang integral melalui 5 (Lima) Panca Jiwa yaitu, Religius, Keikhlasan, Nasionalis, Berwawasan Global, dan Cakap Teknologi Informasi.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-lightbulb"></i>
                        <h4><a href="#">Generasi Intelektual</a></h4>
                        <p>Mengajarkan ilmu pengetahuan agama dan umum secara seimbang menuju terbentuknya generasi yang intelektual.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-person-check"></i>
                        <h4><a href="#">Generasi Beriman & Bertaqwa</a></h4>
                        <p>Mempersiapkan generasi berkepribadian indonesia yang beriman dan bertaqwa kepada Allah Swt.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-journal-arrow-up"></i>
                        <h4><a href="#">Pendidikan Berkualitas</a></h4>
                        <p>Menyelenggarakan pendidikan yang berkualitas guna membentuk kepribadian yang agamis, berakhlak mulia, cerdas dan berbudaya.</p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-building"></i>
                        <h4><a href="#">Life Skill</a></h4>
                        <p>Menjadi Lembaga pesantren yang memberikan bekal keterampilan (life skill) dan berkarakter.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="team" class="portfolio">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-teachers">Teachers</li>
                        <li data-filter=".filter-students">Students</li>
                        <li data-filter=".filter-others">Others</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Zidni</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/1.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Zidni"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-students">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/students/1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Jafa</h4>
                            <p>Student</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/students/1.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Jafa (DEPOK)"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Emi</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/2.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Emi"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-students">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/students/2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Azka</h4>
                            <p>Student</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/students/2.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Azka (Jakarta)"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Abid</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/3.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Abid"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-students">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/students/3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Fikri</h4>
                            <p>Student</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/students/3.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fikri (Tangerang)"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Rasyid</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/4.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Rasyid"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-students">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/students/4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Zibran</h4>
                            <p>Student</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/students/4.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Zibran (Jakbar)"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Iqbal</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/5.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Iqbal"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-students">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/students/5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>The Finalist</h4>
                            <p>Students</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/students/5.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="The Finalist"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Muhaimin</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/6.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Muhaimin"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Awal</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/7.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Awal"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Kresna</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/8.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Kresna"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Ghozel</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/9.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Ghozel"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item filter-teachers">
                    <div class="portfolio-wrap">
                        <img src="{{asset('template')}}/img/teachers/10.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Ust. Syabani</h4>
                            <p>Teacher</p>
                            <div class="portfolio-links">
                                <a href="{{asset('template')}}/img/teachers/10.jpg"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox" title="Ustad Syabani"><i
                                        class="bx bx-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('components.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

@endsection
