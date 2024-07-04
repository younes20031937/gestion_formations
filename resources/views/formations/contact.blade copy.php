@extends('formations.layouts')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="text-center row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h1>Contact</h1>
                            <p class="mb-0">Pour toute question ou demande d'information, n'hésitez pas à nous contacter.
                                Nous sommes là pour vous aider.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('formations.index') }}">Accueil</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 300px;"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=centre%20philips+(ofppt)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="flex-shrink-0 bi bi-geo-alt"></i>
                            <div>
                                <h3>Adresse</h3>
                                <p>Casablanca</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="flex-shrink-0 bi bi-telephone"></i>
                            <div>
                                <h3>Téléphone</h3>
                                <p>+6666666</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="flex-shrink-0 bi bi-envelope"></i>
                            <div>
                                <h3>Email</h3>
                                <p>ofppt@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Votre Nom"
                                        required="">
                                </div>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Votre Email"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Sujet"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="text-center col-md-12">
                                    <div class="loading">Chargement</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message a été envoyé. Merci !</div>

                                    <button type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
