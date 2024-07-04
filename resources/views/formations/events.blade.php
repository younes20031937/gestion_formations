@extends('formations.layouts')
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="text-center row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h1>Événements à venir</h1>
                            <p class="mb-0">Découvrez les prochains événements et formations continues. Rejoignez-nous pour
                                améliorer vos compétences et apprendre de nouvelles choses.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('formations.index') }}">Accueil</a></li>
                        <li class="current">Événements</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Events Section -->
        <section id="events" class="events section">

            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events-item-1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Introduction au webdesign</a></h5>
                                <p class="text-center fst-italic">Dimanche, 26 septembre à 19h00</p>
                                <p class="card-text">Rejoignez-nous pour une introduction complète au webdesign, couvrant
                                    les bases et les techniques avancées pour créer des sites web esthétiques et
                                    fonctionnels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/events-item-2.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Stratégies de marketing</a></h5>
                                <p class="text-center fst-italic">Dimanche, 15 novembre à 19h00</p>
                                <p class="card-text">Apprenez les meilleures stratégies de marketing pour augmenter la
                                    visibilité et l'impact de vos projets. Cette formation couvre les techniques modernes et
                                    éprouvées pour réussir dans le marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Events Section -->

    </main>
@endsection
