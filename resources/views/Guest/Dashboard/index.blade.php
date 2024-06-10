@extends('Guest.layouts.mainGuest')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="container">

            <div class="hero-img" >
                <img src="{{ URL::asset('guest/assets/img/hero-img-home.png') }}" alt="" class="img-fluid animated">
            </div>

            <div class="hero-info" >
                <h2>Selamat Datang<br>di Lombok Timur<br><span>Smart City</span></h2>
                <div>
                    <a href="#dimensi" class="btn-get-started scrollto">Lihat Dimensi</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    <!-- ======= Dimensi Section ======= -->
    <section id="dimensi" class="section-bg">
        <div class="container" >
            <div class="row height d-flex justify-content-center align-items-center">
            </div>
            <header class="section-header">
                <h3>DIMENSI</h3>
                <p>7 Dimensi Narahubung Pengembangan dan Pengelolaan</p>
                <div class="col-md-12 justify-content-md-center">
                    <div class="form-group has-search mt-0">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Cari Disini">
                    </div>
                </div>
            </header><br>
            <div class="row justify-content-center">

                <div class="col-md-6 col-lg-4" >
                    <a href="/Smart-Governance">
                        <div class="box">
                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="/Smart-Governance">Smart Governance</a></h4>
                            <p class="description">pelayanan publik, manajemen birokrasi yang efisien serta efisiensi
                                kebijakan publik</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" >
                    <a href="/Smart-Economy">
                        <div class="box">
                            <div class="icon"><i class="bi bi-bar-chart" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="/Smart-Economy">Smart Economy</a></h4>
                            <p class="description">ekosistem industri yang berdaya saing, kesejahteraan rakyat serta
                                ekosistem transaksi keuangan</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4" >
                    <a href="/Smart-Society">
                        <div class="box">
                            <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="/Smart-Society">Smart Society</a></h4>
                            <p class="description">Interaksi masyarakat yang efisien, ekosistem belajar yang efisien dan
                                sistem keamanan masyarakat;</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4" >
                    <a href="/Smart-Branding">
                        <div class="box">
                            <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="/Smart-Branding">Smart Branding</a></h4>
                            <p class="description">ekosistem pariwisata, ekosistem bisnis daerah serta wajah kota;</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="/Smart-Living">
                        <div class="box">
                            <div class="icon"><i class="bi bi-brightness-high" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="/Smart-Living">Smart Living</a></h4>
                            <p class="description">harmonisasi tata ruang, sarana transportasi dan prasarana kesehatan;
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="/Smart-Environment">
                        <div class="box">
                            <div class="icon"><i class="bi bi-calendar4-week" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="/Smart-Environment">Smart Environment</a></h4>
                            <p class="description">roteksi lingkungan, tata kelola sampah dan limbah serta tata kelola
                                energi.</p>
                        </div>
                    </a>
                </div>

            </div>
            <header class="section-header">
                <h3>EMERGENCY</h3>
                <p>Layanan Darurat dan Saluran Bantuan</p>
                <div class="col-md-12 justify-content-md-center">
            </header><br>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4" >
                    <div class="box">
                        <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="inner-page.html">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" >
                    <div class="box">
                        <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat tarad limino ata</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End dimensi Section -->
@endsection
