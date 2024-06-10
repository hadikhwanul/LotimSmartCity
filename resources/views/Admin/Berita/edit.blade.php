@extends('Admin.layouts.mainAdmin')

@section('container-xxl')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
            {{ $judul }}</h4>
    </div>
    <div class=" buy-now ">
        <a href="/Admin-Berita" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
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
                    <form action="/Admin-Berita/{{$Berita->slug}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="portal"
                                    name="title" value="{{$Berita->title, old('title') }}" required />
                                @error('title')
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
                                    name="slug" value="{{$Berita->slug, old('slug') }}" required />
                                @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Tag Berita</label>
                            <div class="col-sm-10 mb-3">
                                <select id="tag_id" name="tag_id" class="form-select form-select-lg" required>
                                    <option value="" class="text-center">Pilih Tag Berita</option>
                                    @foreach ($tag as $tags)
                                    <option value="{{ $tags->id }}"
                                        {{ ( old('tag_id', $Berita->tag_id) == $tags->id ? 'selected' : '') }}>
                                        {{ $tags->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Gambar</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldImage" value="{{ $Berita->image }}">
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                    name="image">
                                @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Berita</label>
                            <div class="col-sm-10">
                                <input id="body" type="hidden" name="body" value="{{ $Berita->body, old('body') }}">
                                <trix-editor class="form-control" input="body"></trix-editor>
                                @error('body')
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
