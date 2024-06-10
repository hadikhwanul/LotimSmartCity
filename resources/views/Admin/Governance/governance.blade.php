@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row d-flex justify-content-between align-items-center">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
            {{ $kategori }} / </span>
        {{ $judul }}</h4>
    <div class=" buy-now ">
        <a href="/Admin-SmartGovernance/create" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                class='bx bx-plus'></i>Tambah</a>
    </div>
</div>
<div class="row">
    <!-- Hoverable Table rows -->
    <div class="card">
        <!-- Search -->
        <h5 class="card-header">Instansi / Dinas</h5>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="navbar-nav align-items-end mt-0">
            <form action="/Admin-SmartGovernance" class="mt-0">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
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
                        <th style="width: 10%;">No</th>
                        <th style="width: 20%;">Portal</th>
                        <th style="width: 15%;">Kategori</th>
                        <th style="width: 20%;">Link</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if ($governance->count())
                    @php
                    $startNumber = ($governance->currentPage() - 1) * $governance->perPage() + 1;
                    @endphp
                    <tr>
                        <td class="text-center">{{ $startNumber++ }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-SmartGovernance/{{$governance[0]->slug}}" style="">
                                <strong>{{ $governance[0]->portal }}
                            </a>
                            </strong>
                        </td>
                        <td class="text-center"><a
                                href="/Admin-SmartGovernance?category={{ $governance[0]->category->slug }}"><b>{{ $governance[0]->category->nama }}</b></a>
                        </td>
                        <td class=><a href="{{ $governance[0]->link }}" target="_blank">{{ $governance[0]->link }} </a>
                        </td>
                        <td class="text-center">
                            <span
                                class="badge {{ ($governance[0]->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                {{ $governance[0]->status }}</span></td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-between d-inline m-auto">
                                <div class="row col-lg-3 align-items-between d-inline">
                                    <div class="demo-inline-spacing">
                                        <a href="/Admin-SmartGovernance/{{ $governance[0]->slug }}/edit"
                                            class="btn btn-outline-primary">
                                            <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit </a>
                                        <form action="/Admin-SmartGovernance/{{ $governance[0]->slug }}" method="POST"
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
                    @foreach ( $governance->skip(1) as $sg )
                    <tr>
                        <td class="text-center">{{ $startNumber++ }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-SmartGovernance/{{$sg->slug}}" style="">
                                <strong>{{ $sg->portal }}
                            </a>
                            </strong>
                        </td>
                        <td class="text-center"><a
                                href="/Admin-SmartGovernance?category={{ $sg->category->slug }}"><b>{{ $sg->category->nama }}</b></a>
                        </td>
                        <td class=><a href="{{ $sg->link }}" target="_blank">{{ $sg->link }} </a></td>
                        <td class="text-center">
                            <span
                                class="badge {{ ($sg->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                {{ $sg->status }}</span></td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-between d-inline">
                                <div class="demo-inline-spacing">
                                    <a href="/Admin-SmartGovernance/{{ $sg->slug }}/edit"
                                        class="btn btn-outline-primary">
                                        <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit </a>
                                    <form action="/Admin-SmartGovernance/{{ $sg->slug }}" method="POST" class="d-inline">
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
            <span>{{ $governance->onEachSide(0)->links() }}</span>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>

@endsection
