@extends('Admin.layouts.mainAdmin')

@section('container-xxl')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
            {{ $judul }}</h4>
    </div>
    <div class=" buy-now ">
        <a href="/Admin-CategorySmartGovernance" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                class='bx bx-arrow-back'></i> Kembali</a>
    </div>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><b>Form Tambah</b></h4>
                </div>
                <div class="card-body">
                    <form action="/Admin-CategorySmartGovernance" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="portal" name="nama" value="{{ old('nama') }}" required />
                                @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-company">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                    name="slug" value="{{ old('slug') }}" required/>
                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const portal = document.querySelector('#portal');
    const slug = document.querySelector('#slug');

    portal.addEventListener('change', function () {
        fetch('/Add-SmartGovernance/checkSlug?portal=' + portal.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });
</script>
@endsection
