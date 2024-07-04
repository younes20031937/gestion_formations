<head>
    <style>
        .loading-text-words {
            display: inline-block;
            font-size: 2rem;
            animation: lean 1s ease-in-out infinite;
        }

        .loading-text-words:nth-child(1) {
            animation-delay: 0s;
        }

        .loading-text-words:nth-child(2) {
            animation-delay: 0.1s;
        }

        .loading-text-words:nth-child(3) {
            animation-delay: 0.2s;
        }

        .loading-text-words:nth-child(4) {
            animation-delay: 0.3s;
        }

        .loading-text-words:nth-child(5) {
            animation-delay: 0.4s;
        }

        .loading-text-words:nth-child(6) {
            animation-delay: 0.5s;
        }

        @keyframes lean {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-10px) rotate(-10deg);
            }
        }

        .logo img {
            width: 100px;
            /* Adjust the width of the logo */
            height: auto;
            /* Maintain aspect ratio */
        }

        .logo h2 {
            font-size: 2rem;
            /* Adjust font size of "HACKATHON" */
        }
    </style>
</head>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('formations.index') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">OFPPT</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('formations.index') }}" class="">Home<br></a></li>
                <li><a href="{{ route('formations.about') }}">About</a></li>
                <li><a href="{{ route('formations.formations') }}">Formations</a></li>
                <li><a href="{{ route('formations.events') }}">Événements</a></li>
                <li><a href="{{ route('formations.contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{ route('formations.signup') }}">Sign Up</a>
        <a class="btn-signin" href="{{ route('formations.signin') }}">Sign in</a>
    </div>
</header>

<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/01f84a1c-0b65-4a69-8ce4-a009e1ceea36/webchat/config.js" defer></script>
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/01f84a1c-0b65-4a69-8ce4-a009e1ceea36/webchat/config.js" defer></script>


