@extends('Admin.layouts.mainAdmin')

@section('container-xxl')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
            {{ $judul }}</h4>
    </div>
    <div class=" buy-now ">
        <a href="/Admin-SmartSociety" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
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
                    <form action="/Admin-SmartSociety" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Portal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('portal') is-invalid @enderror"
                                    id="portal" name="portal" value="{{ old('portal') }}" required />
                                @error('portal')
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
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}"required  />
                                    @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Link</label>
                            <div class="col-sm-10">
                                <input type="text" id="basic-default-phone"
                                    class="form-control phone-mask @error('link') is-invalid @enderror" name="link"
                                    value="{{ old('link') }}"  required/>
                                @error('link')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Status Web</label>
                            <div class="col-sm-10">
                                <select id="Status" name="status" class="form-select form-select-lg " required>
                                    <option value="Active" value="{{ old('Active') }}">Active</option>
                                    <option value="Deactive" value="{{ old('Deactive') }}">Deactive</option>
                                </select>
                            </div><br>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Logo</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('logo_sc') is-invalid @enderror" type="file"
                                    id="formFile" name="logo_sc" value="{{ old('logo_sc') }}" />
                                @error('logo_sc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi</label>
                            <div class="col-sm-10">
                                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                                <trix-editor class="form-control" input="deskripsi"></trix-editor>
                                @error('deskripsi')
                            <p class="text-danger">{{ $message }}</p>
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
