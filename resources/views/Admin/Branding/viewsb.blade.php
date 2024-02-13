@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row">
    <div class="card-body">
        <div class="row d-flex justify-content-between align-items-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">/ </span>
               </h4>
        </div>
    </div>
    <!-- Horizontal -->
    <div class="row mb-5">
        <div class="btn-danger"><a href="/Admin-SmartBranding">Kembali</a></div>
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="public/admin/assets/img/elements/12.jpg" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            {{-- <h5 class="card-title">{{ $ViewSB["instansi"] }}</h5> --}}
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional
                                content.
                                This content is a little bit longer.
                            </p>
                            {{-- <p class="card-text"><strong><a href="{{ $sb["link"] }}">Link : </strong>{{ $sb["link"] }}</a></p> --}}
                            {{-- <p class="card-text"><small class="text-muted">{{ $sb["status"] }}</small></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
