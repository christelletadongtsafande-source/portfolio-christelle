<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Portfolio de Christelle')</title>

    <meta
        name="description"
        content="Portfolio de Christelle FANDE TADONGTSA, développeuse web et future apprentie en BTS SIO."
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header class="header">
    <nav class="navbar container">
        <a href="{{ route('home') }}" class="logo">
            <span>CT</span>
            <div>
                <strong>Christelle</strong>
                <small>Développeuse web</small>
            </div>
        </a>

        <button
            type="button"
            class="menu-button"
            id="menuButton"
            aria-label="Ouvrir le menu"
            aria-expanded="false"
        >
            <i class="fa-solid fa-bars"></i>
        </button>

        <div class="nav-menu" id="navMenu">
            <a href="#accueil">Accueil</a>
            <a href="#apropos">À propos</a>
            <a href="#competences">Compétences</a>
            <a href="#projets">Projets</a>
            <a href="#parcours">Parcours</a>
            <a href="#contact" class="nav-contact">Contact</a>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-content">
        <p>
            © {{ date('Y') }} Christelle FANDE TADONGTSA
        </p>

        <div class="footer-links">
            <a href="mailto:christelletadongtsafande@gmail.com">
                <i class="fa-solid fa-envelope"></i>
            </a>

            <a href="#" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>

            <a href="#" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin"></i>
            </a>
        </div>
    </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>