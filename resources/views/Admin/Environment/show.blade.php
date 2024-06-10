@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row">
    <div class="row d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
            {{ $judul }}</h4>
        <div class=" buy-now mt-5">
            <a href="/Admin-SmartSociety" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                    class='bx bx-arrow-back'></i> Kembali</a>
        </div>
        <!-- Horizontal -->
        <div class="row mb-5">
            <div class="col-md">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            @if ($Environment->logo_se)
                            <img src="{{ asset('storage/'.$Environment->logo_se) }}" class="card-img card-img-left mt-5"
                                alt="" style="max-height: auto; overflow: hidden;">
                            @else
                            <img src="https://source.unsplash.com/1080x720?random"
                                class="img-fluid mt-3" alt="">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title"><b>{{ $Environment->portal }}</b></h3>
                                <p class="card-text"><strong>
                                        {{$Environment->alamat }}</strong>
                                </p>
                                <p class="card-text">
                                    {!! $Environment->deskripsi !!}
                                </p>
                                <p class="card-text"><strong><a href="{{ $Environment->link }}">Link :
                                    </strong>{{ $Environment->link }}</a></p>
                                <p class="card-text"><small class="text-muted"><span
                                            class="badge {{ ($Environment->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                            {{ $Environment->status }}</span></td></small></p>
                                <p class="card-text"><strong>{{$Environment->created_at->diffForHumans()  }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
