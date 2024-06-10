@extends('Guest.layouts.mainGuest')

@section('main')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Tentang Kami</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Tentang Kami</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container">
            <header class="section-header">
                <h3>Tentang Kami</h3>
            </header>
            <div class="row about-extra">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ URL::asset('guest/assets/img/logo.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" >
                    <h4>Apa itu Smart City ?</h4>
                    <p>
                        Smart City adalah konsep Pengembangan dan Pengelolaan kota dengan pemanfaatan Teknologi
                        Informasi dan Komunikasi (TIK) untuk menghubungkan, memonitor dan mengendalikan berbagai sumber
                        daya yang ada di dalam kota dengan lebih efektif dan efisien untuk memaksimalkan pelayanan
                        kepada warganya serta mendukung pembangunan yang berkelanjutan.
                    </p>
                </div>
            </div>

            <div class="row about-extra">
                <div class="col-lg-6">
                    <img src="{{ URL::asset('guest/assets/img/about.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0" >
                    <h4>Visi Misi Lombok Timur Smart City</h4>
                    <h5><b>Visi</b></h5>
                    <p>"Mewujudkan Kabupaten Lombok timur sebagai Kota Cerdas yang Inovatif"</p>

                    <h5><b>Misi</b></h5>
                    <ul>
                        <li>Menjamin Akses dan Kualitas Pendidikan, Kesehatan, dan Layanan Dasar Lainnya Bagi Semua
                            Warga</li>
                        <li>Mewujudkan Kota Produktif dan Berdaya Saing berbasis Ekonomi Kreatif, Keberlanjutan dan
                            Keterpaduan</li>
                        <li>Mewujudkan Kota yang Rukun dan Toleran berasaskan Keberagaman dan Keberpihakan terhadap
                            Masyarakat Rentan dan Gender</li>
                        <li>Memastikan Kepuasan Masyarakat atas Layanan Pemerintah yang Tertib Hukum, Profesional dan
                            Akuntabel</li>
                        <li>Mendayagunakan sumber daya secara efektif dan efisien</li>
                        <li>Mencapai good governance, clean environment, comfort mobility, comfort living, berdaya
                            saing, dan masyarakat kreatif</li>
                    </ul>
                </div>
            </div>

            <div class="row about-container">
                <div class="col-lg-6 background order-lg-2" ><br><br><br>
                    <img src="{{ URL::asset('guest/assets/img/Artboard124.png') }}" class="img-fluid alt="">
                </div>
                <div class="col-lg-6 content order-lg-1 order-2"><br><br><br>
                    <h4>6 Dimensi Smart City:</h4>

                    <div class="icon-box" >
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Smart governance</a></h4>
                        <p class="description">
                            Merupakan tata kelola pemerintahan yang cerdas, bertujuan untuk menciptakan tata kelola yang
                            efektif, efisien, dan komunikatif serta meningkatkan kinerja birokrasi melalui inovasi dan
                            teknologi terpadu.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Smart Economy</a></h4>
                        <p class="description">
                            Merupakan tata kelola perekonomian yang pintar, bertujuan untuk menciptakan ekosistem
                            ekonomi yang adaptif di era informasi yang berdisrupsi, memenuhi tantangan, dan meningkatkan
                            adaptasi yang cepat.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Smart Living</a></h4>
                        <p class="description"> Mewujudkan lingkungan tempat tinggal yang layak tinggal, nyaman, dan
                            efisien.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Smart Environment</a></h4>
                        <p class="description">
                            Merupakan pengelolaan lingkungan yang cerdas, memperhatikan keseimbangan antara pembangunan
                            kota dan keberlanjutan lingkungan, termasuk infrastruktur fisik dan kesejahteraan warga.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Smart Society</a></h4>
                        <p class="description">
                            Mewujudkan ekosistem sosio-teknis masyarakat yang humanis, dinamis, dan berorientasi pada
                            produktivitas, komunikasi, dan interaksi digital yang tinggi.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Smart Branding</a></h4>
                        <p class="description">
                            Inovasi dalam pemasaran daerah, meningkatkan daya saing dengan fokus pada tiga elemen:
                            pariwisata, bisnis, dan tampilan kota.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

</main><!-- End #main -->

@endsection
