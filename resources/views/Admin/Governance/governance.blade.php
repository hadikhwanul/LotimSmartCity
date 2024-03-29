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
        <h5 class="card-header">Instansi / Dinas</h5>
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
                    <tr>
                        <td class="text-center">{{ $governance[0]->id }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="SmartGovernance/{{ $governance[0]->slug }}" style="">
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
                            <div class="row col-lg-3 align-items-end">
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
                    @foreach ( $governance->skip(1) as $sg )
                    <tr>
                        <td class="text-center">{{ $sg->id }}</td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                            <a href="SmartGovernance/{{ $sg->slug }}" style="">
                            <strong>{{ $sg->portal }}
                                </a>
                            </strong>
                        </td>
                        <td class="text-center"><a
                                href="/Admin-SmartGovernance?category={{ $sg->category->slug }}"><b>{{ $sg->category->nama }}</b></a></td>
                        <td class=><a href="{{ $sg->link }}" target="_blank">{{ $sg->link }} </a></td>
                        <td class="text-center">
                            <span
                                class="badge {{ ($sg->status === "Active") ? 'bg-label-success me-1' : 'bg-label-danger me-1'  }}">
                                {{ $sg->status }}</span></td>
                        <td class="text-center">
                            <div class="row col-lg-3 align-items-end">
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
