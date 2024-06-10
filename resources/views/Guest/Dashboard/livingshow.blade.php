@extends('Guest.layouts.mainGuest')

@section('main')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><b>Detail {{ $Living->portal }}</b></h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/Smart-Living">{{ $judul }}</a></li>
                    <li>{{ $Living->portal }}</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row row justify-content-center">

                <div class="col-lg-5 col-md-auto">
                    <div class="portfolio-details-slider swiper">
                        <div class="col-md-12">
                            @if ($Living->logo_sl)
                            <img src="{{ asset('storage/'.$Living->logo_sl) }}"  class="img-fluid" alt="Responsive image"
                                alt="" >
                            @else
                            <img src="https://source.unsplash.com/1080x720?random"  class="img-fluid" alt="Responsive image">
                            @endif
                        </div>
                    </div>
                </div><br>
                <div class="col-lg-7">
                    <div class="portfolio-info">
                        <h3>Dimensi Informasi</h3>
                        <ul>
                            <li><strong>Portal</strong>: {{ $Living->portal }}</li>
                            <li><strong>Alamat</strong>: {{ $Living->alamat }}</li>
                            <li><strong>Dimensi Web</strong>: <a href="{{ $Living->link }}">{{ $Living->link }}</a></li>
                            <li><strong>Status Web</strong>: {{ $Living->status }}</li>
                        </ul>
                    </div>
                    <div class="portfolio-info">
                        <h3>Deskripsi Dinas/Instansi</h3>
                        <p>
                            {!! $Living->deskripsi !!}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection
