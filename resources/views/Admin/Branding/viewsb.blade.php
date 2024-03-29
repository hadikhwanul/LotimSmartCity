@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row">
    <div class="card-body">
        <div class="row d-flex justify-content-between align-items-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }}</span></h4>
        </div>
    </div>
    <!-- Horizontal -->
    <div class="row mb-5">
        <div class=" buy-now ">
            <a href="/Admin-SmartBranding" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                    class='bx bx-arrow-back'></i> Kembali</a>
        </div>
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="{{ URL::asset('admin/assets/img/elements/12.jpg') }}" alt="Card image" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title"><b>{{ $branding->portal }}</b></h5>
                            <p class="card-text">
                                {!! $branding->deskripsi !!}
                            </p>
                            <p class="card-text"><strong><a href="{{ $branding->link }}">Link : </strong>{{ $branding->link }}</a></p>
                            <p class="card-text"><small class="text-muted"><span
                                class="badge {{ ($branding->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                {{ $branding->status }}</span></td></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
