@extends('Admin.layouts.mainAdmin')

@section('container-xxl')
<div class="row">
    <div class="card-body">
        <div class="row d-flex justify-content-between align-items-center">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
                    {{ $kategori }} / </span>
                {{ $judul }}</h4>
            <div class=" buy-now ">
                <a href="" target="_blank" class="btn btn-danger btn-buy-now" style="align-items: flex-end;"><i
                        class='bx bx-plus'></i>Tambah</a>
            </div>
        </div>
    </div>
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Category</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead class="text-center">
                    <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 10%;">Kategori</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0 ">
                    <tr>

                        @foreach ( $category as $cg )
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="/Admin-SmartGovernance?category={{ $cg->slug }}" style="">
                                <strong>{{ $cg->nama }}
                            </a>
                            </strong>
                        </td>
                        <td class="text-center mx-auto">
                            <div class="row align-items-center">
                                <div class="demo-inline-spacing">
                                    <button type="button" class="btn btn-outline-primary">
                                        <span class="tf-icons bx bx-edit-alt me-1"></span>&nbsp; Edit
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary">
                                        <span class="tf-icons bx bx-trash me-1"></span>&nbsp; Delete
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>

@endsection
