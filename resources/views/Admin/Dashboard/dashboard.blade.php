@extends('Admin.layouts.mainAdmin')

@section('container-xxl')


<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h2 class="card-title text-primary"><b>Selamat Datang {{ auth()->user()->name }} </b></h2>
                        <p class="mb-4">
                            Yuk Lihat <span class="fw-bold">Data</span> Terbaru Hari Ini
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="admin/assets/img/illustrations/man-with-laptop-light.png" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-4 order-1">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SmartGovernance">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Governance.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Governance }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Governance</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SmartEconomy">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Economy.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Economy }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Economy</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SmartSoceity">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Soceity.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Society }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Soceity</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SmartBranding">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Branding.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Branding }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Branding</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SmartLiving">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Living.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Living }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Living</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="/Admin-SmartEnvironment">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Envirotment.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">{{ $Environment }}</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Dimensi</span>
                            <h4 class="card-title mb-2">Smart Environment</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-LayananDarurat">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Darurat.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">5</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Emergency</span>
                            <h4 class="card-title mb-2">Layanan Darurat</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-SaluranBantuan">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Bantuan.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">5</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Emergency</span>
                            <h4 class="card-title mb-2">Saluran Bantuan</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-Berita">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Berita.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">5</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">News</span>
                            <h4 class="card-title mb-2">Berita</h4>
                    </div></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-6 mb-4">
                <div class="card">
                    <div class="card-body"><a href="Admin-PesanMasuk">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="admin/assets/img/icons/unicons/Pesan.png" alt="chart success"
                                        class="rounded" />
                                </div>
                                <h2 class="card-title mb-2 justify-content-end text-primary">5</h2>
                            </div>
                            <span class="fw-semibold d-block mb-1">Pesan</span>
                            <h4 class="card-title mb-2">Pesan Masuk</h4>
                    </div></a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
