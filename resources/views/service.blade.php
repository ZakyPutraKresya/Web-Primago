@extends('layouts.app')

@section('content')
<!-- ======= Header ======= -->
@include('components.navbar')
<!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

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


  </main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('components.footer')
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

@endsection
