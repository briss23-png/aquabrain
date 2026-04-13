<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUABRAIN - L'Intelligence au Service de l'Aquaculture Africaine</title>
    <meta name="description" content="AQUABRAIN, expert de la chaîne de valeur aquacole en Afrique.">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a href="{{ route('home') }}" class="logo">AQUABRAIN</a>
                <ul class="nav-links">
                    <li><a href="{{ route('qui-sommes-nous') }}">Qui sommes-nous</a></li>
                    <li><a href="{{ route('services') }}">Nos Services</a></li>
                    <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- SECTION HÉROS AVEC CAROUSEL -->
        <section id="hero" class="hero-section">
            <!-- Préchargement caché des images -->
            <div style="display: none;">
                <img src="{{ asset('img/appareil.webp') }}" alt="preload">
                <img src="{{ asset('img/boss.webp') }}" alt="preload">
                <img src="{{ asset('img/apprend.webp') }}" alt="preload">
                <img src="{{ asset('img/travaille.webp') }}" alt="preload">
            </div>

            <!-- Carousel avec photos -->
            <div class="hero-carousel">
                <div class="carousel-slide active" style="background-image: url('{{ asset('img/appareil.webp') }}');"></div>
                <div class="carousel-slide" style="background-image: url('{{ asset('img/boss.webp') }}');"></div>
                <div class="carousel-slide" style="background-image: url('{{ asset('img/apprend.webp') }}');"></div>
                <div class="carousel-slide" style="background-image: url('{{ asset('img/travaille.webp') }}');"></div>
            </div>
            
            <!-- Overlay -->
            <div class="carousel-overlay"></div>
            
            <!-- Contenu -->
            <div class="hero-content container">
                <!-- BADGE PRIX 2025 -->
                <div class="prix-badge animate-on-scroll">
                    <span class="prix-annee">2025</span>
                    <span class="prix-texte">Prix de la meilleure innovation au Togo</span>
                </div>
                
                <!-- TITRE PRINCIPAL -->
                <h1 class="animate-on-scroll">
                    L'Expert de la Chaîne de Valeur <span class="highlight">Aquacole</span> en Afrique
                </h1>
                
                <!-- SOUS-TITRE AVEC TEXTE DE LA FICHE -->
                <p class="animate-on-scroll">
                    <strong>Intelligence, innovation et impact au service de l'aquaculture africaine.</strong>
                </p>
                
                <p class="animate-on-scroll">
                    AQUABRAIN propose des solutions intelligentes pour des projets aquacoles rentables et durables au Togo et en Afrique de l'Ouest. Nous intervenons sur l'ensemble de la chaîne de valeur aquacole, depuis l'étude et la conception jusqu'au suivi, l'évaluation et la formation.
                </p>
                
                <!-- BOUTONS CTA -->
                <div class="hero-buttons animate-on-scroll">
                    <a href="#contact" class="cta-button-primary">Discutons de votre projet</a>
                    <a href="#realisations" class="cta-button-secondary">Voir nos réalisations</a>
                </div>
                
                <!-- STATISTIQUES RAPIDES -->
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-chiffre">5+</span>
                        <span class="stat-texte">Ans d'expertise</span>
                    </div>
                    <div class="stat">
                        <span class="stat-chiffre">4+</span>
                        <span class="stat-texte">Pays</span>
                    </div>
                    <div class="stat">
                        <span class="stat-chiffre">1500+</span>
                        <span class="stat-texte">Apprenants</span>
                    </div>
                    <div class="stat">
                        <span class="stat-chiffre">20%</span>
                        <span class="stat-texte">Prod. nationale</span>
                    </div>
                </div>
            </div>
            
            <!-- Indicateurs du carousel -->
            <div class="carousel-indicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
                <span class="indicator" data-slide="3"></span>
            </div>
            
            <!-- Flèches -->
            <button class="carousel-arrow prev"></button>
            <button class="carousel-arrow next"></button>
        </section>

        <!-- SECTION EXPERTISE AVEC TEXTES ENRICHIS -->
        <section id="chaine-valeur" class="container animate-on-scroll">
            <h2>Une Expertise de Bout en Bout</h2>
            
            <!-- Texte d'introduction de la fiche -->
            <p class="section-intro" style="text-align: center; max-width: 800px; margin: 0 auto 40px; color: var(--gold-color);">
                <strong>Approche innovante et locale :</strong> Solutions adaptées aux contextes africains, avec un suivi personnalisé et des technologies modernes.
            </p>
            
            <div class="value-chain-grid">
                <div class="value-item">
                    <i class="fas fa-search"></i>
                    <h3>Étude & Prospection</h3>
                    <p>Réalisation d'études de faisabilité, diagnostics techniques, études de marché et prospection de sites aquacoles.</p>
                </div>
                <div class="value-item">
                    <i class="fas fa-drafting-compass"></i>
                    <h3>Ingénierie & Construction</h3>
                    <p>Conception et réalisation de bassins piscicoles, étangs, barrages, cages, systèmes hors-sol et autres infrastructures aquacoles.</p>
                </div>
                <div class="value-item">
                    <i class="fas fa-chart-line"></i>
                    <h3>Exploitation & Audit</h3>
                    <p>Suivi technique, audit de performance, évaluation organisationnelle et économique des fermes aquacoles avec recommandations d'amélioration.</p>
                </div>
                <div class="value-item">
                    <i class="fas fa-microchip"></i>
                    <h3>Optimisation & Digital</h3>
                    <p>Solutions AQUAPILOTE : création d'outils et applications sur mesure pour la gestion et le suivi des fermes piscicoles (IoT, IA).</p>
                </div>
            </div>

         <!-- Services complémentaires de la page 4 -->
<div style="margin-top: 80px; text-align: center;">
    <h3 style="color: var(--gold-color); margin-bottom: 20px;">Services complémentaires</h3>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Intelligence de marché</span>
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Communication</span>
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Solutions digitales</span>
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Import/Export</span>
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Étude de marché</span>
        <span style="background: rgba(0,0,0,0.3); padding: 8px 20px; border-radius: 50px; border: 1px solid var(--gold-color); color: var(--gold-color); font-weight: 600; text-shadow: 0 2px 5px rgba(0,0,0,0.5); display: inline-block; white-space: nowrap;">Mise en relation</span>
    </div>
</div>

        <!-- SECTION CHIFFRES ENRICHIE -->
        <section id="chiffres" class="container animate-on-scroll">
            <h2>Notre Impact en Chiffres</h2>
            
            <!-- Texte de la fiche -->
            <p style="text-align: center; max-width: 800px; margin: 0 auto 30px; color: white;">
                Contribuer au développement durable de l'aquaculture en Afrique de l'Ouest à travers des solutions techniques fiables, innovantes et adaptées aux réalités locales.
            </p>
            
            <div class="counters-grid">
                <div class="counter-item">
                    <span class="counter" data-target="1500">0</span>
                    <p>Apprenants Formés</p>
                </div>
                <div class="counter-item">
                    <span class="counter" data-target="5">0</span>
                    <p>Ans d'Expérience</p>
                </div>
                <div class="counter-item">
                    <span class="counter" data-target="800">0</span>
                    <p>Tonnes (LOFTY)</p>
                </div>
                <div class="counter-item">
                    <span class="counter" data-target="1000000">0</span>
                    <p>Alevins (SEM)</p>
                </div>
            </div>

            <!-- Statistiques du secteur togolais (page 5) -->
            <div style="margin-top: 50px; background: rgba(255,255,255,0.1); padding: 30px; border-radius: var(--border-radius); backdrop-filter: blur(5px);">
                <h3 style="color: var(--gold-color); text-align: center; margin-bottom: 20px;">L'aquaculture au Togo en chiffres</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; text-align: center;">
                    <div>
                        <span style="font-size: 2rem; color: var(--gold-color); display: block;">20 kg</span>
                        <p>Consommation/habitant/an</p>
                    </div>
                    <div>
                        <span style="font-size: 2rem; color: var(--gold-color); display: block;">20%</span>
                        <p>Production locale</p>
                    </div>
                    <div>
                        <span style="font-size: 2rem; color: var(--gold-color); display: block;">80%</span>
                        <p>Importations</p>
                    </div>
                    <div>
                        <span style="font-size: 2rem; color: var(--gold-color); display: block;">1500</span>
                        <p>Fermes aquacoles</p>
                    </div>
                </div>
                <p style="text-align: center; margin-top: 20px; color: var(--gold-color);">Espèces principales : Tilapia et Clarias</p>
            </div>
        </section>

        <!-- SECTION RÉALISATIONS AVEC INTRODUCTION -->
        <section id="realisations" class="container animate-on-scroll">
            <h2>Nos Projets Phares en Afrique</h2>
            
            <!-- Texte de la fiche -->
            <p style="text-align: center; max-width: 800px; margin: 0 auto 20px;">
                Nous accompagnons des institutions, entreprises et projets agricoles en Afrique à travers des études, missions terrain et appuis techniques à fort impact.
            </p>
            <p style="text-align: center; margin-bottom: 20px;">
                Nos interventions couvrent plusieurs pays, notamment le <strong>Togo, le Mali, la RDC et le Bénin</strong>.
            </p>
            <p style="text-align: center; margin-bottom: 30px; color: var(--gold-color);">
                Survolez un marqueur pour découvrir le projet en détail avec son image.
            </p>
            
            <div class="map-container">
                <img src="{{ asset('img/carte_afrique.webp') }}" alt="Carte Afrique" class="map-image">
                <!-- Les marqueurs seront générés par JavaScript -->
                <div id="project-info" class="project-info-box">
                    <h3 id="project-title"></h3>
                    <p id="project-description"></p>
                </div>
            </div>
        </section>

        <!-- SECTION NOTRE ÉQUIPE (page 4) -->
        <section id="equipe" class="container animate-on-scroll" style="text-align: center;">
            <h2>Notre Expert</h2>
            <div style="max-width: 500px; margin: 0 auto; background: rgba(255,255,255,0.15); backdrop-filter: blur(5px); padding: 30px; border-radius: var(--border-radius); border: 1px solid rgba(255,215,0,0.3);">
                <div style="width: 150px; height: 150px; border-radius: 50%; background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 4rem; color: white;"></div>
                <h3 style="color: var(--gold-color); font-size: 1.5rem;">Roger ASSIONEMEBA</h3>
                <p style="color: white;">Ingénieur et consultant en aquaculture, spécialisé sur toute la chaîne de valeur aquacole.</p>
            </div>
        </section>

        <!-- SECTION PARTENAIRES AVEC INTRODUCTION -->
        <section id="partenaires" class="container animate-on-scroll">
            <h2>Ils Nous Font Confiance</h2>
            <p style="text-align: center; margin-bottom: 30px;">Institutions, entreprises et organisations nous ont choisis pour leur expertise aquacole.</p>
            <div class="partners-carousel">
                <div class="partners-track">
                    <div class="partner-logo">IFAD</div>
                    <div class="partner-logo">ODA Agrobusiness</div>
                    <div class="partner-logo">LOFTY FARM</div>
                    <div class="partner-logo">SEM GROUPE</div>
                    <div class="partner-logo">ACCESSLANDS</div>
                    <div class="partner-logo">IFAD</div>
                    <div class="partner-logo">LOFTY FARM</div>
                </div>
            </div>
        </section>

        <!-- SECTION CONTACT AVEC TEXTE FINAL -->
        <section id="contact" class="container animate-on-scroll">
            <h2>Prêt à Cultiver le Succès ?</h2>
            <p style="text-align: center; margin-bottom: 30px; font-size: 1.2rem; color: var(--gold-color);">
                <strong>Votre projet aquacole commence ici.</strong>
            </p>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
                Discutons ensemble de vos besoins et construisons l'aquaculture de demain.
            </p>
            <form id="contact-form">
                @csrf
                <div class="form-group">
                    <input type="text" id="name" name="name" required placeholder=" ">
                    <label for="name">Votre Nom</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required placeholder=" ">
                    <label for="email">Votre Email</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" rows="5" required placeholder=" "></textarea>
                    <label for="message">Votre Message</label>
                </div>
                <button type="submit" class="cta-button">Envoyer le message</button>
            </form>
            <div id="form-feedback" class="form-feedback"></div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p style="font-size: 1.2rem; color: var(--gold-color); margin-bottom: 10px;">Votre projet aquacole commence ici.</p>
            <p>&copy; {{ date('Y') }} AQUABRAIN. Tous droits réservés. | <a href="mailto:aquabrain57@gmail.com">aquabrain57@gmail.com</a> | +228 79 68 79 66</p>
        </div>
        <a href="{{ route('mentions-legales') }}">Mentions légales</a>
    </footer>

    <!-- JavaScript pour le carousel -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // CAROUSEL
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.carousel-arrow.prev');
        const nextBtn = document.querySelector('.carousel-arrow.next');
        
        if (!slides.length) return;
        
        let currentSlide = 0;
        let slideInterval;
        
        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
            
            indicators.forEach(indicator => indicator.classList.remove('active'));
            indicators[index].classList.add('active');
            
            currentSlide = index;
        }
        
        function nextSlide() {
            showSlide(currentSlide + 1);
        }
        
        function prevSlide() {
            showSlide(currentSlide - 1);
        }
        
        function startAutoplay() {
            stopAutoplay();
            slideInterval = setInterval(nextSlide, 3000);
        }
        
        function stopAutoplay() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopAutoplay();
                startAutoplay();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopAutoplay();
                startAutoplay();
            });
        }
        
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
                stopAutoplay();
                startAutoplay();
            });
        });
        
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            heroSection.addEventListener('mouseenter', stopAutoplay);
            heroSection.addEventListener('mouseleave', startAutoplay);
        }
        
        startAutoplay();
    });
    </script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
