@extends('formations.layouts')
@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="text-center row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <h1>Formations</h1>
                            <p class="mb-0">Découvrez nos formations continues adaptées aux besoins de votre entreprise
                                pour garantir votre succès.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('formations.index') }}">Accueil</a></li>
                        <li class="current">Formations</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Courses Section -->
        <section id="courses" class="courses section">

            <div class="container">

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
                                        <h3><a href="{{ route('formations.show-formation' , $formation->id) }}"
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

        </section>

    </main>
@endsection
