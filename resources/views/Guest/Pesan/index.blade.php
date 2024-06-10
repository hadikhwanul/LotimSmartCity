@extends('Guest.layouts.mainGuest')

@section('main')


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kontak</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Kontak</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container-fluid" >

            <header class="section-header">
                <h3>Kontak</h3>
                <p>Hubungi Kami Melalui Berbagai Platform</p>
            </header>

            <div class="row justify-content-center">

                <div class="col-md-6 justify-content-center d-flex">
                    <div class="map mb-4 mb-lg-0 justify-content-center align-self-center">
                        <iframe class="map" style="text-align: center;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6633.687354491079!2d116.52442994011587!3d-8.652107336283107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4f7212cbb05b%3A0xd520efb39aa1cea1!2sDinas%20komunikasi%20informatika%20dan%20Persandian%20Kabupaten%20Lombok%20Timur!5e0!3m2!1sen!2sid!4v1704698441109!5m2!1sen!2sid"
                            width="710" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="bi bi-geo-alt"></i>
                                <p>A108 Adam Street, NY 535022</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="bi bi-envelope"></i>
                                <p>info@example.com</p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="bi bi-phone"></i>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection
