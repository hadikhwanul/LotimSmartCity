@extends('Guest.layouts.mainGuest')

@section('main')


<main id="main" class="clearfix">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $judul }}</h2>
                <ol>
                    <li><a href="/">{{ $kategori }}</a></li>
                    <li>{{ $judul }}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->
    <!-- ======= Dimensi Section ======= -->
    <section id="dimensi" class="m-auto">
        <div class="container">
        <div class="row justify-content-center">
            @foreach ($Living as $sl)
            <div class="col-md-6 col-lg-4" >
                <div class="box">
                    <a href="/Smart-Living/{{ $sl->slug }}">
                        <div class="icon"><i class="bi bi-hdd-rack" style="color: #ff689b;"></i></div>
                        <h5 class="title"><a href="/Smart-Living/{{ $sl->slug }}">{{ $sl->portal }}</a></h5>
                        <div class="row col-md-4 col-lg-3 align-items-between d-inline">
                            <div class="title demo-inline-spacing">
                                <a href="/Smart-Living/{{ $sl->slug }}" class=" btn btn-primary text-light">Detail</a>
                                @if ($sl->status === "Active")
                                <button class=" btn btn-success" target="_blank"><a href="{{ $sl->link }}" class="text-light">
                                    <b>Link Active</b></a></button>
                                @else
                                <button type="#" class=" btn btn-danger" target="#"><a href="" class="text-light">
                                    <b>Link Deactive</b></a></button>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </section><!-- End dimensi Section -->
</main><!-- End #main -->


@endsection
