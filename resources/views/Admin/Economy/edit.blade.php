@extends('Admin.layouts.mainAdmin')

@section('container-xxl')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
            {{ $judul }}</h4>
    </div>
    <div class=" buy-now ">
        <a href="/Admin-SmartEconomy" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                class='bx bx-arrow-back'></i> Kembali</a>
    </div>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><b>Form Edit</b></h4>
                </div>
                <div class="card-body">
                    <form action="/Admin-SmartEconomy/{{ $Economy->slug }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Portal</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('portal') is-invalid @enderror"
                                    id="portal" name="portal" value="{{ $Economy->portal, old('portal') }}"
                                    required />
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
                                    name="slug" value="{{ $Economy->slug, old('slug') }}" required />
                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-email">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge">
                                    <input type="text" id="basic-default-email"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ $Economy->alamat, old('alamat') }}" required />
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
                                    value="{{ $Economy->link, old('link') }}" required />
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
                                <select id="Status" name="status" class="form-select defaultSelect" required>
                                    <option value="Active" {{ (old('status', $Economy->status) == 'Active') ? 'selected' : '' }}>
                                        Active
                                    </option>
                                    <option value="Deactive" {{ (old('status', $Economy->status) == 'Deactive') ? 'selected' : '' }}>
                                        Deactive
                                    </option>
                                </select><br>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Logo</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('logo_se') is-invalid @enderror" type="file"
                                        id="formFile" name="logo_se"
                                        value="{{$Economy->logo_se, old('logo_se') }}" />
                                    @error('logo_se')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input id="deskripsi" type="hidden" name="deskripsi"
                                        value="{{ $Economy->deskripsi, old('deskripsi') }}">
                                    <trix-editor class="form-control" input="deskripsi"></trix-editor>
                                    @error('deskripsi')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
