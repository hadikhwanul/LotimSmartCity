@extends('Admin.layouts.mainAdmin')

@section('container-xxl')

<div class="container">
    <div class="row">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">{{ $kategori }} / </span>{{ $judul }}</h4>
    </div>

    <div class="row d-flex justify-content-between align-items-center">
        <div class=" buy-now mt-5">
            <a href="/Admin-Agenda" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                    class='bx bx-arrow-back'></i> Kembali</a>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md">
            <div class="card mb-3">
                @if ($Agenda->image)
                <img src="{{ asset('storage/'.$Agenda->image) }}" class="img-fluid mt-3" alt=""
                    style="max-height: 350px; overflow: hidden;">
                @else
                <img src="https://source.unsplash.com/1080x200?{{ $Agenda->tagAgenda->name }}" class="img-fluid mt-3"
                    alt="">
                @endif
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="card-title"><b> {{ $Agenda->title }} </b></h3>
                    <h5 class="card-title"><span> {{ $Agenda->tagAgenda->name }} </span></h5>
                    <p class="card-text">
                        {!! $Agenda->body !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
