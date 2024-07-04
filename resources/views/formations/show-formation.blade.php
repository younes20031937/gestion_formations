@extends("formations.layouts")
@section("content")
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="text-center row d-flex justify-content-center">
            <div class="col-lg-8">
              <h1>Détails de la Formation</h1>
              <p class="mb-0">Découvrez toutes les informations nécessaires sur cette formation. Apprenez les compétences requises et démarrez votre parcours d'apprentissage avec nous.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li class="current">Détails de la Formation</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
            <h3>Introduction à la Programmation</h3>
            <p>
              Plongez dans le monde de la programmation avec notre formation complète. Apprenez les bases, développez vos compétences et préparez-vous à créer des applications impressionnantes. Nos formateurs experts vous guideront à chaque étape.
            </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Formateur</h5>
              <p><a href="#">{{ $formation->nom_formateur }}</a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Frais de la Formation</h5>
              <p>{{ $formation->prix }} DHS</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Filière</h5>
              <p>{{ $formation->filiere }}</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Horaire</h5>
              <p>17h00 - 19h00</p>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Courses Course Details Section -->

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Introduction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Curriculum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Objectifs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Prérequis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Inscription</a>
              </li>
            </ul>
          </div>
          <div class="mt-4 col-lg-9 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="order-2 col-lg-8 details order-lg-1">
                    <h3>Introduction à la Programmation</h3>
                    <p class="fst-italic">Découvrez les bases de la programmation et comment cela peut transformer votre carrière.</p>
                    <p>Cette formation vous offre une introduction complète aux concepts fondamentaux de la programmation. Que vous soyez débutant ou que vous cherchiez à renforcer vos compétences, ce cours est conçu pour vous guider tout au long de votre parcours d'apprentissage.</p>
                  </div>
                  <div class="order-1 text-center col-lg-4 order-lg-2">
                    <img src="assets/img/tabs/tab-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="order-2 col-lg-8 details order-lg-1">
                    <h3>Curriculum</h3>
                    <p class="fst-italic">Un aperçu détaillé de ce que vous apprendrez au cours de la formation.</p>
                    <p>Le curriculum couvre des sujets allant des bases de la programmation aux techniques avancées. Chaque module est conçu pour construire vos compétences de manière progressive, en vous offrant une compréhension approfondie et pratique de chaque concept.</p>
                  </div>
                  <div class="order-1 text-center col-lg-4 order-lg-2">
                    <img src="assets/img/tabs/tab-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="order-2 col-lg-8 details order-lg-1">
                    <h3>Objectifs</h3>
                    <p class="fst-italic">Ce que vous pourrez accomplir après avoir terminé cette formation.</p>
                    <p>À la fin de cette formation, vous serez capable de créer des applications simples, comprendre les concepts de base de la programmation et être prêt à explorer des domaines plus avancés. Vous aurez une base solide pour poursuivre vos études ou entrer dans le monde professionnel de la programmation.</p>
                  </div>
                  <div class="order-1 text-center col-lg-4 order-lg-2">
                    <img src="assets/img/tabs/tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="order-2 col-lg-8 details order-lg-1">
                    <h3>Prérequis</h3>
                    <p class="fst-italic">Ce dont vous avez besoin avant de commencer cette formation.</p>
                    <p>Cette formation est ouverte à tous, sans aucun prérequis technique. Toutefois, une motivation à apprendre et une attitude proactive seront vos meilleurs atouts pour tirer le meilleur parti de cette formation.</p>
                  </div>
                  <div class="order-1 text-center col-lg-4 order-lg-2">
                    <img src="assets/img/tabs/tab-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="order-2 col-lg-8 details order-lg-1">
                    <h3>Inscription</h3>
                    <p class="fst-italic">Comment vous inscrire à cette formation.</p>
                    <p>Pour vous inscrire, cliquez sur le bouton d'inscription, remplissez le formulaire et suivez les instructions pour compléter votre inscription. Nous avons hâte de vous voir dans notre prochaine session de formation.</p>
                  </div>
                  <div class="order-1 text-center col-lg-4 order-lg-2">
                    <img src="assets/img/tabs/tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Tabs Section -->

  </main>

@endsection
