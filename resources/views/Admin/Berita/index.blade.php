@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row d-flex justify-content-between align-items-center">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
            {{ $kategori }} / </span>
        {{ $judul }}</h4>
    <div class=" buy-now ">
        <a href="/Admin-Berita/create" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                class='bx bx-plus'></i>Tambah</a>
    </div>
</div>
<div class="row">
    <!-- Hoverable Table rows -->
    <div class="card">
        <!-- Search -->
        <h5 class="card-header">Berita</h5>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="navbar-nav align-items-end mt-0">
            <form action="/Admin-Berita" class="mt-0">
                @if (request('tag'))
                <input type="hidden" name="tag" value="{{ request('tag') }}">
                @endif
                <div class="nav-item d-flex align-items-end">
                    <input type="text" class="form-control border-1 shadow-none" placeholder="Search..."
                        value="{{ request('search') }}" aria-label="Search..." name="search" />
                    <i class="bx bx-search fs-4 lh-0 btn-light mb-2 border-1"></i>
                </div>
        </div>
        </form>
        <!-- /Search -->
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th style="width: 15%;">No</th>
                        <th style="width: 30%;">Title</th>
                        <th style="width: 30%;">Tag</th>
                        <th style="width: 25%;">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($Berita->count())
                    @php
                    $startNumber = ($Berita->currentPage() - 1) * $Berita->perPage() + 1;
                    @endphp
                    <tr>
                        <td class="text-center">{{ $startNumber++ }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-Berita/{{$Berita[0]->slug}}" style="">
                                <strong>{{ $Berita[0]->title }}
                            </a>
                            </strong>
                        </td>
                        <td class="text-center"><a
                                href="/Admin-Berita?tag={{ $Berita[0]->tag->slug }}"><b>{{ $Berita[0]->tag->name }}</b></a>
                        </td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-between d-inline m-auto">
                                <div class="row col-lg-3 align-items-between d-inline">
                                    <div class="demo-inline-spacing">
                                        <a href="/Admin-Berita/{{ $Berita[0]->slug }}/edit"
                                            class="btn btn-outline-primary">
                                            <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit </a>
                                        <form action="/Admin-Berita/{{ $Berita[0]->slug }}" method="POST"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-secondary"
                                                onclick="return confirm('Yakin Ingin Menghapus Data')">
                                                <span class="tf-icons bx bx-trash me-1"></span>&nbsp; Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @foreach ( $Berita->skip(1) as $sg )
                    <tr>
                        <td class="text-center">{{ $startNumber++ }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-Berita/{{$sg->slug}}" style="">
                                <strong>{{ $sg->title }}
                            </a>
                            </strong>
                        </td>
                        <td class="text-center"><a
                                href="/Admin-Berita?tag={{ $sg->tag->slug }}"><b>{{ $sg->tag->name }}</b></a>
                        </td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-between d-inline">
                                <div class="demo-inline-spacing">
                                    <a href="/Admin-Berita/{{ $sg->slug }}/edit"
                                        class="btn btn-outline-primary">
                                        <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit </a>
                                    <form action="/Admin-Berita/{{ $sg->slug }}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-secondary"
                                            onclick="return confirm('Yakin Ingin Menghapus Data')">
                                            <span class="tf-icons bx bx-trash me-1"></span>&nbsp; Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                @else
                <p class="text-center fs-4">No post found.</p>
                @endif
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <span>{{ $Berita->onEachSide(0)->links() }}</span>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>

@endsection
