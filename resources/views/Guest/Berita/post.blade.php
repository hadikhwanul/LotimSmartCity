@extends('Guest.layouts.mainGuest')

@section('main')

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2><b>Detail Berita {{ $post->title }}</b></h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/Berita">{{ $judul }}</a></li>
                <li>{{ $post->title }}</li>
            </ol>
        </div>
    </div>
</section><!-- End Breadcrumbs Section -->

<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-auto">
              <div>
                <h3 class="mt-2"><b>{{ $post->title }}</b></h3>
              <h5 class="mt-0"><a href="/posts?tag={{ $post->tag->slug }}" class="text-primary">{{ $post->tag->name }}</a></h5>
              </div>
              
                <div class="portfolio-details-slider swiper">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid" alt="Responsive image"
                            style="max-width:50%;">
                        @else
                        <img src="https://source.unsplash.com/1080x720?random" class="img-fluid" alt="Responsive image">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="portfolio-info">
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->

@endsection
