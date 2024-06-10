<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('Guest.partials.header')
<!--/Header -->

<body>
    <!-- ======= Navbar ======= -->
    @include('Guest.partials.navbar')
    <!-- #Navbar -->

    <main id="main" class="clearfix">
        @yield('main')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top ">
            <div class="container d-flex align-items-center justify-content-center">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 footer-info">
                        <img src="{{ URL::asset('guest/assets/img/WWlogo.png') }}" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/Berita">Berita</a></li>
                            <li><a href="/About">Tentang Kami</a></li>
                            <li><a href="/Pesan">Kontak</a></li>
                        </ul><br>

                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                    <div class="social-links" style="text-align: center;">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>DISKOMINFO LOTIM 2024</strong>
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
<script src="{{ URL::asset('guest/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ URL::asset('guest/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('guest/assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>

</body>

</html>
