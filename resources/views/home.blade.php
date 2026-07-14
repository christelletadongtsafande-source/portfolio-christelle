@extends('layouts.app')

@section('title', 'Christelle FANDE TADONGTSA | Développeuse web')

@section('content')

<section class="hero" id="accueil">
    <div class="container hero-grid">

        <div class="hero-content">
            <p class="eyebrow">
                <span></span>
                Disponible pour une alternance
            </p>

            <h1>
                Je suis
                <strong>Christelle FANDE TADONGTSA</strong>
            </h1>

            <h2>
                Développement web & solutions numériques
                <span>Candidate à un contrat d’apprentissage en BTS SIO</span>
            </h2>

            <p class="hero-description">
                Je conçois des applications web avec Laravel, PHP,
                JavaScript et SQL. Admise en BTS Services Informatiques
                aux Organisations en apprentissage, je recherche une
                entreprise pour poursuivre ma progression et contribuer
                à des projets concrets.
            </p>

            <div class="hero-buttons">
                <a
                    href="{{ asset('cv/Christelle-FANDE-TADONGTSA-CV.pdf') }}"
                    class="button button-primary"
                    download
                >
                    <i class="fa-solid fa-download"></i>
                    Télécharger mon CV
                </a>

                <a href="#projets" class="button button-secondary">
                    <i class="fa-solid fa-folder-open"></i>
                    Voir mes projets
                </a>
            </div>

            <div class="hero-technologies">
                <span>Laravel</span>
                <span>PHP</span>
                <span>JavaScript</span>
                <span>SQL</span>
                <span>Python</span>
            </div>
        </div>

        <div class="hero-visual">
            <div class="profile-card">
                <div class="profile-circle">
                    <span>CT</span>
                </div>

                <div class="code-card code-card-one">
                    <i class="fa-brands fa-laravel"></i>
                    <span>Laravel</span>
                </div>

                <div class="code-card code-card-two">
                    <i class="fa-solid fa-database"></i>
                    <span>SQL</span>
                </div>

                <div class="code-card code-card-three">
                    <i class="fa-solid fa-code"></i>
                    <span>Web</span>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">

        <article class="stat-card">
            <strong>5+</strong>
            <span>Projets réalisés</span>
        </article>

        <article class="stat-card">
            <strong>1</strong>
            <span>Stage Laravel</span>
        </article>

        <article class="stat-card">
            <strong>3</strong>
            <span>Diplômes techniques</span>
        </article>

        <article class="stat-card">
            <strong>10+</strong>
            <span>Technologies utilisées</span>
        </article>

    </div>
</section>

<section class="section" id="apropos">
    <div class="container">

        <div class="section-heading">
            <p>À propos</p>
            <h2>Un parcours technique orienté vers le développement</h2>
        </div>

        <div class="about-grid">
            <div class="about-card about-introduction">
                <h3>Qui suis-je ?</h3>

                <p>
                    Je suis Christelle FANDE TADONGTSA, passionnée par
                    le développement web, les bases de données et la
                    création de solutions numériques utiles.
                </p>

                <p>
                    Mon parcours en informatique industrielle et en
                    sciences des données m’a permis de développer des
                    compétences variées en programmation, gestion de
                    données et visualisation.
                </p>
            </div>

            <div class="about-card">
                <div class="about-icon">
                    <i class="fa-brands fa-laravel"></i>
                </div>

                <h3>Expérience Laravel</h3>

                <p>
                    Durant mon stage chez Filadeo Corporate, j’ai
                    participé au développement de la deuxième version
                    du site avec Laravel, PHP, Blade, JavaScript et une
                    base de données relationnelle.
                </p>
            </div>

            <div class="about-card">
                <div class="about-icon">
                    <i class="fa-solid fa-bullseye"></i>
                </div>

                <h3>Mon objectif</h3>

                <p>
                    Intégrer une entreprise dans le cadre de mon BTS SIO
                    en apprentissage afin de participer à des projets
                    informatiques concrets et de continuer à progresser.
                </p>
            </div>
        </div>

    </div>
</section>

<section class="section section-light" id="competences">
    <div class="container">

        <div class="section-heading">
            <p>Compétences</p>
            <h2>Les technologies que j’utilise</h2>
        </div>

        <div class="skills-grid">

            <article class="skill-card">
                <div class="skill-icon">
                    <i class="fa-solid fa-code"></i>
                </div>

                <h3>Développement web</h3>

                <div class="skill-tags">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>Blade</span>
                    <span>JavaScript</span>
                    <span>HTML5</span>
                    <span>CSS3</span>
                </div>
            </article>

            <article class="skill-card">
                <div class="skill-icon">
                    <i class="fa-solid fa-database"></i>
                </div>

                <h3>Bases de données</h3>

                <div class="skill-tags">
                    <span>SQL</span>
                    <span>MySQL</span>
                    <span>PostgreSQL</span>
                    <span>PostGIS</span>
                    <span>Modélisation</span>
                </div>
            </article>

            <article class="skill-card">
                <div class="skill-icon">
                    <i class="fa-solid fa-chart-column"></i>
                </div>

                <h3>Données et visualisation</h3>

                <div class="skill-tags">
                    <span>Python</span>
                    <span>Power BI</span>
                    <span>Tableau</span>
                    <span>Streamlit</span>
                    <span>Plotly</span>
                </div>
            </article>

            <article class="skill-card">
                <div class="skill-icon">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>

                <h3>Outils</h3>

                <div class="skill-tags">
                    <span>VS Code</span>
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>XAMPP</span>
                    <span>QGIS</span>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="section" id="projets">
    <div class="container">

        <div class="section-heading">
            <p>Mes projets</p>
            <h2>Quelques réalisations</h2>
        </div>

        <div class="projects-grid">

            <article class="project-card project-featured">
                <div class="project-image project-image-laravel">
                    <i class="fa-brands fa-laravel"></i>
                </div>

                <div class="project-content">
                    <span class="project-label">Projet à la une</span>

                    <h3>Filadeo Corporate — Version 2</h3>

                    <p>
                        Participation à la refonte d’un site professionnel
                        avec Laravel. Travail sur les vues Blade, les routes,
                        les contrôleurs, les modèles, les formulaires, les
                        filtres et la base de données.
                    </p>

                    <div class="project-technologies">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>Blade</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <i class="fa-solid fa-route"></i>
                </div>

                <div class="project-content">
                    <h3>Visualisation d’itinéraires GPS</h3>

                    <p>
                        Application de collecte, de stockage et de
                        visualisation d’itinéraires GPS sur une carte
                        interactive de la France.
                    </p>

                    <div class="project-technologies">
                        <span>Leaflet</span>
                        <span>PHP</span>
                        <span>PostgreSQL</span>
                        <span>PostGIS</span>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image">
                    <i class="fa-solid fa-cloud-sun-rain"></i>
                </div>

                <div class="project-content">
                    <h3>Outil météo décisionnel</h3>

                    <p>
                        Outil permettant d’identifier les périodes
                        favorables ou risquées selon la pluie, le vent
                        et la température.
                    </p>

                    <div class="project-technologies">
                        <span>Python</span>
                        <span>Streamlit</span>
                        <span>Pandas</span>
                        <span>Plotly</span>
                    </div>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="section section-light" id="parcours">
    <div class="container">

        <div class="section-heading">
            <p>Mon parcours</p>
            <h2>Formation et expériences</h2>
        </div>

        <div class="timeline">

            <article class="timeline-item">
                <span class="timeline-year">2026</span>
                <div>
                    <h3>Admission en BTS SIO en apprentissage</h3>
                    <p>
                        Recherche active d’un contrat d’apprentissage
                        dans le développement informatique.
                    </p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-year">2025</span>
                <div>
                    <h3>Stage chez Filadeo Corporate</h3>
                    <p>
                        Développement web avec Laravel, PHP, Blade,
                        JavaScript et bases de données.
                    </p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-year">2025</span>
                <div>
                    <h3>BUT Sciences des données</h3>
                    <p>
                        Parcours Visualisation et Conception d’Outils
                        Décisionnels.
                    </p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-year">2023</span>
                <div>
                    <h3>Licence GEII</h3>
                    <p>
                        Génie électrique et informatique industrielle.
                    </p>
                </div>
            </article>

            <article class="timeline-item">
                <span class="timeline-year">2022</span>
                <div>
                    <h3>BTS Informatique Industrielle et Automatisme</h3>
                    <p>
                        Formation technique en informatique,
                        automatisme et systèmes industriels.
                    </p>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="search-section">
    <div class="container search-card">

        <div>
            <p class="eyebrow">
                <span></span>
                Recherche d’alternance
            </p>

            <h2>Je recherche une entreprise pour mon BTS SIO</h2>

            <p>
                Je souhaite rejoindre une équipe dans laquelle je pourrai
                développer des applications web, travailler sur des bases
                de données et participer à des projets informatiques concrets.
            </p>
        </div>

        <a
            href="mailto:christelletadongtsafande@gmail.com"
            class="button button-light"
        >
            Me contacter
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</section>

<section class="section" id="contact">
    <div class="container">

        <div class="section-heading">
            <p>Contact</p>
            <h2>Échangeons sur votre besoin</h2>
        </div>

        <div class="contact-grid">

            <div class="contact-information">
                <h3>Mes coordonnées</h3>

                <a href="mailto:christelletadongtsafande@gmail.com">
                    <i class="fa-solid fa-envelope"></i>

                    <span>
                        <small>Email</small>
                        christelletadongtsafande@gmail.com
                    </span>
                </a>

                <a href="tel:+33745316310">
                    <i class="fa-solid fa-phone"></i>

                    <span>
                        <small>Téléphone</small>
                        07 45 31 63 10
                    </span>
                </a>

                <div class="contact-item">
                    <i class="fa-solid fa-location-dot"></i>

                    <span>
                        <small>Localisation</small>
                        France
                    </span>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Votre nom"
                        >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="votre@email.fr"
                        >
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Sujet</label>
                    <input
                        type="text"
                        id="subject"
                        name="subject"
                        placeholder="Proposition d’alternance"
                    >
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="6"
                        placeholder="Votre message..."
                    ></textarea>
                </div>

                <button type="submit" class="button button-primary">
                    Envoyer le message
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>

        </div>

    </div>
</section>

@endsection