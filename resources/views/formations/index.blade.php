@extends('formations.layouts')
@section('content')
<body>
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
            <!--<img src="images/ofppt.jpg" alt="" data-aos="fade-in">-->

            <div class="container">
                <h2 data-aos="fade-up" data-aos-delay="100" class="">Apprenez aujourd'hui,<br>Dirigez demain</h2>
                <p data-aos="fade-up" data-aos-delay="200">Nous sommes une équipe de designers talentueux créant des sites
                    web avec Bootstrap
                </p>
                <div class="mt-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('formations.signup') }}" class="btn-get-started">Commencer</a>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="order-1 col-lg-6 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="Image de formation continue">
                    </div>
                    <div class="order-2 col-lg-6 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Plateforme de Formation Continue</h3>
                        <p class="fst-italic">
                            Notre plateforme est dédiée à promouvoir la formation continue et l'assistance technique pour
                            les entreprises marocaines.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Accès facile aux formations adaptées aux besoins
                                    des entreprises.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Gestion des compétences et qualifications des
                                    intervenants.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Suivi et évaluation des actions de formation pour
                                    garantir la qualité.</span></li>
                        </ul>
                        <a href="{{ route('formations.about') }}" class="read-more"><span>En savoir plus</span><i
                            class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Counts Section -->
        <section id="counts" class="section counts">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="text-center stats-item w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                            class="purecounter"></span>
                            <p class="">Étudiants</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="text-center stats-item w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p class="">Cours</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="text-center stats-item w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p class="">Événements</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="text-center stats-item w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
                                class="purecounter"></span>
                                <p class="">Formateurs</p>
                            </div>
                        </div>

                    </div>

                </div>

        </section><!-- /Counts Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="features-item">
                            <i class="bi bi-eye" style="color: #ffbb2c;"></i>
                            <h3><a href="" class="stretched-link">Consultation</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-item">
                            <i class="bi bi-infinity" style="color: #5578ff;"></i>
                            <h3><a href="" class="stretched-link">Flexibilité</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="features-item">
                            <i class="bi bi-mortarboard" style="color: #e80368;"></i>
                            <h3><a href="" class="stretched-link">Expertise</a></h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
                        <div class="features-item">
                            <i class="bi bi-camera-video" style="color: #4233ff;"></i>
                            <h3><a href="" class="stretched-link">Support en ligne</a></h3>
                        </div>
                    </div>

                </div>

        </section><!-- /Features Section -->

        <!-- Courses Section -->
        <section id="courses" class="courses section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Formations</h2>
                <p class="">Formations populaires</p>
            </div>
            <div class="container my-5">
                <div class="row">
                    @foreach ($formations as $formation)
                        <div class="mt-2 mb-4 col-lg-4 col-md-6 d-flex align-items-stretch mt-md-0" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="course-item d-flex flex-column">
                                <img src="{{ $formation->image }}" class="img-fluid" alt="..."
                                style="height: 200px; object-fit: cover;">
                                <div class="course-content d-flex flex-column" style="flex: 1;">
                                    <div>
                                        <div class="mb-3 d-flex justify-content-between align-items-center">
                                            <p class="category">{{ $formation->filiere }}</p>
                                            <p class="price">{{ $formation->prix }} DHS</p>
                                        </div>
                                        <h3><a href="{{ route('formations.show-formation', $formation->id) }}"
                                                class="text-decoration-none text-dark">{{ $formation->title }}</a></h3>
                                        <p class="description">{{ $formation->description }}</p>
                                    </div>
                                    <div class="mt-auto trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="{{ $formation->image_formateur }}"
                                                class="img-fluid rounded-circle me-2" alt="" width="50"
                                                height="50">
                                            <a href=""
                                                class="trainer-link text-decoration-none text-dark">{{ $formation->nom_formateur }}</a>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center">
                                            <i class="bi bi-person user-icon"></i>&nbsp;{{ $formation->followers }}
                                            &nbsp;&nbsp;
                                            <i
                                                class="bi bi-heart heart-icon text-danger"></i>&nbsp;{{ $formation->favoris }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section><!-- /Courses Section -->
    </main>
@endsection
