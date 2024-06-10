<meta charset="utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

<title>Admin {{ $judul}} </title>

<meta name="description" content="" />

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ URL::asset('admin/assets/img/favicon/favicon.png') }}" />

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/fonts/boxicons.css') }}" />

<!-- Core CSS -->
<link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/css/core.css') }}"
    class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/css/theme-default.css') }}"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ URL::asset('admin/assets/css/demo.css') }}" />

<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<!-- Page CSS -->
<!-- Page -->
<link rel="stylesheet" href="{{ URL::asset('admin/assets/vendor/css/pages/page-auth.css') }}" />
<!-- Helpers -->
<script src="{{ URL::asset('admin/assets/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ URL::asset('admin/assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand d-just justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo logo-size">
                                    <img class="" src="{{ URL::asset('admin\assets\img\favicon\logo.png') }}" alt="">
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h3 class=" text-primary text-center">Selamat Datang </h3>
                        <p class="mb-4 text-center">Silahkan Memasukkan Email dan Password</p>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('LoginError'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ session('LoginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif


                        <form id="formAuthentication" class="mb-3" action="/Admin-Login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email atau Username</label>
                                <input type="text"
                                    class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    id="email" name="identity" value="{{ old('email') }}"
                                    placeholder="Masukkan email atau username" required />
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" required />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                        <p class="text-center">
                            <span>Belum Punya Account ?</span>
                            <a href="/Admin-Register">
                                <span>Daftar disini</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ URL::asset('admin/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ URL::asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ URL::asset('admin/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ URL::asset('admin/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
