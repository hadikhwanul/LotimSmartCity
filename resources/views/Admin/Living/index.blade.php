@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row">
    <div class="card-body">
        <div class="row d-flex justify-content-between align-items-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                {{ $kategori }} / </span>
                {{ $judul }}</h4>
            <div class=" buy-now ">
                <a href="/Admin-SmartLiving/create" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                        class='bx bx-plus'></i>Tambah</a>
            </div>
        </div>
    </div>
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Instansi / Dinas</h5>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 25%;">Portal</th>
                        <th style="width: 25%;">Link</th>
                        <th style="width: 20%;">Status</th>
                        <th style="width: 20%;">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>

                        @foreach ( $Living as $sl )
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-SmartLiving/{{ $sl->slug }}" style="">
                            <strong>{{ $sl->portal }}
                                </a>
                            </strong>
                        </td>
                        <td class=><a href="{{ $sl->link }}" target="_blank">{{ $sl->link }} </a></td>
                        <td class="text-center">
                            <span
                                class="badge {{ ($sl->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                {{ $sl->status }}</span></td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-between d-inline">
                                <div class="demo-inline-spacing">
                                    <a href="/Admin-SmartLiving/{{ $sl->slug }}/edit"
                                        class="btn btn-outline-primary">
                                        <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit </a>
                                    <form action="/Admin-SmartLiving/{{ $sl->slug }}" method="POST" class="d-inline">
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
            </table>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <span>{{ $Living->onEachSide(0)->links() }}</span>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>

@endsection
