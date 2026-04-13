<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUABRAIN - Qui sommes-nous ?</title>
    <meta name="description" content="Découvrez AQUABRAIN, expert en aquaculture au Togo et en Afrique.">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a href="{{ route('home') }}" class="logo">AQUABRAIN</a>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}#chaine-valeur">Acceuil</a></li>
                    <li><a href="{{ route('services') }}">Nos Services</a></li>
                    <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                    <li><a href="{{ route('home') }}#partenaires">Partenaires</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- SECTION HERO DE LA PAGE QUI SOMMES-NOUS -->
        <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 150px 0 80px; text-align: center; color: white;">
            <div class="container">
                <h1 style="font-size: 3rem; margin-bottom: 20px;">Qui Sommes-Nous ?</h1>
                <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Découvrez l'histoire, la mission et l'équipe derrière AQUABRAIN</p>
            </div>
        </section>

        <!-- SECTION NOTRE MISSION - VERSION PREMIUM -->
<section class="container" style="padding: 80px 20px;">
    <h2 style="text-align: center; margin-bottom: 50px;">Notre Mission & Vision</h2>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
        <!-- Mission dans un cadre -->
        <div style="background: linear-gradient(135deg, rgba(0,119,190,0.2), rgba(0,76,122,0.3)); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 2px solid var(--gold-color); box-shadow: 0 20px 40px rgba(0,0,0,0.3); height: 100%;">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-bullseye" style="font-size: 3rem; color: var(--gold-color);"></i>
            </div>
            <h3 style="color: var(--gold-color); text-align: center; margin-bottom: 20px; font-size: 1.8rem;">Notre Mission</h3>
            <p style="color: var(--gold-color); font-size: 1.2rem; line-height: 1.8; text-align: center; font-weight: 500; text-shadow: 0 2px 5px rgba(0,0,0,0.5);">
                "Contribuer au développement durable de l'aquaculture et de la pêche en Afrique de l'Ouest à travers des solutions techniques fiables, innovantes et adaptées aux réalités locales."
            </p>
        </div>
        
        <!-- Vision dans un cadre (amélioré) -->
        <div style="background: linear-gradient(135deg, rgba(0,119,190,0.2), rgba(0,76,122,0.3)); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 2px solid var(--gold-color); box-shadow: 0 20px 40px rgba(0,0,0,0.3); height: 100%;">
            <div style="text-align: center; margin-bottom: 20px;">
                <i class="fas fa-eye" style="font-size: 3rem; color: var(--gold-color);"></i>
            </div>
            <h3 style="color: var(--gold-color); text-align: center; margin-bottom: 20px; font-size: 1.8rem;">Notre Vision</h3>
            <p style="color: white; font-size: 1.1rem; line-height: 1.8; text-align: center;">
                Faire de l'aquaculture un levier majeur de sécurité alimentaire, de création d'emplois et de développement économique durable au Togo et en Afrique.
            </p>
        </div>
    </div>
    
    <!-- Objectif en bas -->
    <div style="margin-top: 30px; background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 20px; padding: 30px; border: 1px solid rgba(255,215,0,0.3);">
        <p style="color: var(--gold-color); font-size: 1.2rem; line-height: 1.8; text-align: center; font-style: italic;">
            Notre objectif est d'améliorer la productivité, la rentabilité et la durabilité des projets aquacoles pour faire de l'aquaculture un levier majeur de sécurité alimentaire, de création d'emplois et de développement économique durable au Togo et en Afrique.
        </p>
    </div>
</section>
<!-- SECTION NOS VALEURS -->
<section class="container" style="padding: 60px 20px; background: rgba(255,255,255,0.05); border-radius: 30px; margin: 40px auto;">
    <h2 style="text-align: center; margin-bottom: 40px;">Nos Valeurs</h2>
    
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
        <!-- Valeur 1 : Intelligence -->
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); padding: 30px; border-radius: 15px; border: 1px solid rgba(255,215,0,0.3); text-align: center;">
            <i class="fas fa-brain" style="font-size: 3rem; color: var(--gold-color); margin-bottom: 20px;"></i>
            <h3 style="color: var(--gold-color); margin-bottom: 15px;">Intelligence</h3>
            <p style="color: white;">Des solutions intelligentes et adaptées aux défis de l'aquaculture africaine.</p>
        </div>
        
        <!-- Valeur 2 : Innovation -->
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); padding: 30px; border-radius: 15px; border: 1px solid rgba(255,215,0,0.3); text-align: center;">
            <i class="fas fa-lightbulb" style="font-size: 3rem; color: var(--gold-color); margin-bottom: 20px;"></i>
            <h3 style="color: var(--gold-color); margin-bottom: 15px;">Innovation</h3>
            <p style="color: white;">Des technologies modernes et une approche novatrice pour des projets performants.</p>
        </div>
        
        <!-- Valeur 3 : Impact -->
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); padding: 30px; border-radius: 15px; border: 1px solid rgba(255,215,0,0.3); text-align: center;">
            <i class="fas fa-hand-holding-heart" style="font-size: 3rem; color: var(--gold-color); margin-bottom: 20px;"></i>
            <h3 style="color: var(--gold-color); margin-bottom: 15px;">Impact</h3>
            <p style="color: white;">Création d'emplois, développement rural et sécurité alimentaire durable.</p>
        </div>
    </div>

    <!-- Sous-titre de la fiche -->
    <p style="text-align: center; color: var(--gold-color); margin-top: 40px; font-size: 1.2rem;">
        <i class="fas fa-quote-left"></i> Expertise technique adaptée au contexte local, approche intégrée de la chaîne de valeur aquacole
    </p>
</section>

<!-- SECTION PRIX & RECONNAISSANCE -->
<section class="container" style="padding: 60px 20px; margin: 40px auto;">
    <div style="background: linear-gradient(135deg, rgba(0,119,190,0.2), rgba(0,76,122,0.3)); backdrop-filter: blur(5px); border-radius: 30px; padding: 50px; border: 2px solid var(--gold-color); text-align: center;">
        
        <!-- Badge Prix -->
        <div style="display: inline-block; background: var(--gold-gradient); padding: 15px 30px; border-radius: 50px; margin-bottom: 30px;">
            <span style="background: var(--dark-color); color: var(--gold-color); padding: 5px 15px; border-radius: 25px; margin-right: 10px; font-weight: bold;">2025</span>
            <span style="color: var(--dark-color); font-weight: bold;">🏆 Prix de la meilleure innovation au Togo</span>
        </div>
        
        <h2 style="color: var(--gold-color); margin-bottom: 20px;">Une Reconnaissance Internationale</h2>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-top: 30px;">
            <!-- Prix national -->
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,215,0,0.3);">
                <i class="fas fa-trophy" style="font-size: 3rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                <h3 style="color: var(--gold-color); margin-bottom: 10px;">Innovation de l'Année</h3>
                <p style="color: white;">NukuConnect a été lauréat du prix de la meilleure innovation de l'année au Togo en 2025.</p>
            </div>
            
            <!-- Reconnaissance internationale -->
            <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,215,0,0.3);">
                <i class="fas fa-globe-americas" style="font-size: 3rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                <h3 style="color: var(--gold-color); margin-bottom: 10px;">Présentation au Congrès</h3>
                <p style="color: white;">Aquapilote a été présenté devant le Congrès américain à l'Université de Lomé.</p>
            </div>
        </div>
        
        <!-- Description Aquapilote -->
        <div style="margin-top: 40px; padding: 20px; background: rgba(0,0,0,0.3); border-radius: 15px;">
            <p style="color: white; font-size: 1.1rem;">
                <strong style="color: var(--gold-color);">Aquapilote :</strong> Notre solution innovante d'IoT et d'IA pour la gestion intelligente des fermes piscicoles, reconnue internationalement.
            </p>
        </div>
    </div>
</section>

<!-- SECTION NOTRE ÉQUIPE AVEC PHOTO -->
<section class="container" style="padding: 60px 20px; margin: 40px auto;">
    <h2 style="text-align: center; margin-bottom: 40px; color: var(--gold-color);">Notre Expert</h2>
    
    <div style="max-width: 1000px; margin: 0 auto; background: rgba(255,255,255,0.1); backdrop-filter: blur(10px); border-radius: 30px; padding: 40px; border: 2px solid rgba(255,215,0,0.3);">
        
        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 40px; align-items: center;">
            <!-- Photo réelle de Roger -->
            <div style="text-align: center;">
                <div style="width: 280px; height: 280px; border-radius: 50%; margin: 0 auto; overflow: hidden; border: 4px solid var(--gold-color); box-shadow: 0 15px 35px rgba(0,0,0,0.4);">
                    <img src="{{ asset('img/roger.jpg') }}" 
                         alt="Roger ASSIONEMEBA - Fondateur d'AQUABRAIN" 
                         style="width: 100%; height: 100%; object-fit: cover; display: block;"
                         onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Roger+ASSIONEMEBA&size=280&background=0077BE&color=FFD700&bold=true';">
                </div>
            </div>
            
            <!-- Informations -->
            <div>
                <h3 style="color: var(--gold-color); font-size: 2.2rem; margin-bottom: 10px; text-shadow: 0 2px 5px rgba(0,0,0,0.5);">Roger ASSIONEMEBA</h3>
                <p style="color: white; font-size: 1.3rem; margin-bottom: 20px; border-bottom: 2px solid var(--gold-color); padding-bottom: 15px;">
                    <i class="fas fa-certificate" style="color: var(--gold-color); margin-right: 10px;"></i>
                    Ingénieur & Consultant en Aquaculture
                </p>
                <p style="color: white; line-height: 1.8; font-size: 1.1rem; margin-bottom: 20px;">
                    Fondateur et chef d'entreprise d'AQUABRAIN, Roger est spécialisé sur toute la chaîne de valeur aquacole. Son expertise couvre l'ensemble des domaines, de l'étude de faisabilité à la gestion de projets complexes.
                </p>
                <p style="color: var(--gold-color); font-style: italic;">
                    <i class="fas fa-quote-left"></i> L'expertise aquacole au service du développement durable
                </p>
            </div>
        </div>
        
        <!-- Compétences clés -->
        <div style="margin-top: 40px; display: flex; flex-wrap: wrap; gap: 12px; justify-content: center;">
            <span class="service-tag">Études & Prospection</span>
            <span class="service-tag">Ingénierie</span>
            <span class="service-tag">Gestion de Projets</span>
            <span class="service-tag">Formation</span>
            <span class="service-tag">Audit</span>
            <span class="service-tag">Innovation</span>
            <span class="service-tag">AQUAPILOTE</span>
            <span class="service-tag">Conseil</span>
        </div>
    </div>
</section>

<!-- SECTION CAROUSEL PHOTOS -->
<section class="container" style="padding: 60px 20px; margin: 40px auto;">
    <h2 style="text-align: center; margin-bottom: 20px; color: var(--gold-color);">Ils nous ont fait confiance</h2>
    <p style="text-align: center; color: white; margin-bottom: 40px; font-size: 1.1rem;">Quelques images de nos réalisations et interventions sur le terrain</p>
    
    <div style="position: relative; max-width: 1000px; margin: 0 auto;">
        <!-- Conteneur du carousel -->
        <div id="photoCarousel" style="position: relative; overflow: hidden; border-radius: 20px; border: 3px solid var(--gold-color); box-shadow: 0 20px 40px rgba(0,0,0,0.4); background: #000;">
            
            <!-- Images du carousel -->
            <div style="display: flex; transition: transform 0.5s ease-in-out;" id="carouselTrack">
                <!-- Photo 1 : mission -->
                <div style="min-width: 100%; height: 500px;">
                    <img src="{{ asset('img/mission.jpg') }}" alt="Mission AQUABRAIN" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <!-- Photo 2 : poisson -->
                <div style="min-width: 100%; height: 500px;">
                    <img src="{{ asset('img/poisson.jpg') }}" alt="Élevage de poissons" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <!-- Photo 3 : eau -->
                <div style="min-width: 100%; height: 500px;">
                    <img src="{{ asset('img/eau.jpg') }}" alt="Gestion de l'eau" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <!-- Photo 4 : boue -->
                <div style="min-width: 100%; height: 500px;">
                    <img src="{{ asset('img/boue.jpg') }}" alt="Préparation des bassins" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <!-- Photo 5 : passion -->
                <div style="min-width: 100%; height: 500px;">
                    <img src="{{ asset('img/passion.jpg') }}" alt="Passion pour l'aquaculture" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            
            <!-- Flèches de navigation -->
            <button onclick="prevPhoto()" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.6); color: white; border: 2px solid var(--gold-color); width: 50px; height: 50px; border-radius: 50%; cursor: pointer; font-size: 28px; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s ease;" onmouseover="this.style.background='var(--gold-color)'; this.style.color='black'" onmouseout="this.style.background='rgba(0,0,0,0.6)'; this.style.color='white'">❮</button>
            <button onclick="nextPhoto()" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); background: rgba(0,0,0,0.6); color: white; border: 2px solid var(--gold-color); width: 50px; height: 50px; border-radius: 50%; cursor: pointer; font-size: 28px; display: flex; align-items: center; justify-content: center; z-index: 10; transition: all 0.3s ease;" onmouseover="this.style.background='var(--gold-color)'; this.style.color='black'" onmouseout="this.style.background='rgba(0,0,0,0.6)'; this.style.color='white'">❯</button>
            
            <!-- Indicateurs (points) -->
            <div style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); display: flex; gap: 12px; z-index: 10;">
                <span class="carousel-dot active" onclick="goToPhoto(0)" style="width: 14px; height: 14px; border-radius: 50%; background: var(--gold-color); cursor: pointer; border: 2px solid white;"></span>
                <span class="carousel-dot" onclick="goToPhoto(1)" style="width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; border: 2px solid transparent;"></span>
                <span class="carousel-dot" onclick="goToPhoto(2)" style="width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; border: 2px solid transparent;"></span>
                <span class="carousel-dot" onclick="goToPhoto(3)" style="width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; border: 2px solid transparent;"></span>
                <span class="carousel-dot" onclick="goToPhoto(4)" style="width: 14px; height: 14px; border-radius: 50%; background: rgba(255,255,255,0.5); cursor: pointer; border: 2px solid transparent;"></span>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript pour le carousel -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des variables
    let currentPhotoIndex = 0;
    const track = document.getElementById('carouselTrack');
    const dots = document.querySelectorAll('.carousel-dot');
    let autoPlayInterval;
    
    // Vérifier que les éléments existent
    if (!track) return;
    
    const totalPhotos = document.querySelectorAll('#carouselTrack > div').length;
    
    function updateCarousel() {
        track.style.transform = `translateX(-${currentPhotoIndex * 100}%)`;
        dots.forEach((dot, index) => {
            if (index === currentPhotoIndex) {
                dot.style.background = 'var(--gold-color)';
                dot.style.border = '2px solid white';
            } else {
                dot.style.background = 'rgba(255,255,255,0.5)';
                dot.style.border = '2px solid transparent';
            }
        });
    }
    
    window.nextPhoto = function() {
        currentPhotoIndex = (currentPhotoIndex + 1) % totalPhotos;
        updateCarousel();
        resetAutoPlay();
    };
    
    window.prevPhoto = function() {
        currentPhotoIndex = (currentPhotoIndex - 1 + totalPhotos) % totalPhotos;
        updateCarousel();
        resetAutoPlay();
    };
    
    window.goToPhoto = function(index) {
        currentPhotoIndex = index;
        updateCarousel();
        resetAutoPlay();
    };
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(() => {
            currentPhotoIndex = (currentPhotoIndex + 1) % totalPhotos;
            updateCarousel();
        }, 5000); // Change toutes les 5 secondes
    }
    
    function resetAutoPlay() {
        clearInterval(autoPlayInterval);
        startAutoPlay();
    }
    
    // Pause au survol
    const carousel = document.getElementById('photoCarousel');
    if (carousel) {
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoPlayInterval);
        });
        carousel.addEventListener('mouseleave', () => {
            startAutoPlay();
        });
    }
    
    // Démarrer l'autoplay
    startAutoPlay();
});
</script>

<!-- SECTION NOTRE APPROCHE & IMPACT -->
<section class="container" style="padding: 60px 20px; margin: 40px auto; background: rgba(0,0,0,0.2); border-radius: 30px;">
    <h2 style="text-align: center; margin-bottom: 40px;">Notre Approche</h2>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
        <!-- Approche innovante -->
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,215,0,0.3);">
            <i class="fas fa-lightbulb" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 20px;"></i>
            <h3 style="color: var(--gold-color); margin-bottom: 15px;">Approche Innovante et Locale</h3>
            <p style="color: white; line-height: 1.8;">
                Solutions adaptées aux contextes africains, avec un suivi personnalisé et des technologies modernes.
            </p>
        </div>
        
        <!-- Impact socio-économique -->
        <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); padding: 30px; border-radius: 20px; border: 1px solid rgba(255,215,0,0.3);">
            <i class="fas fa-chart-line" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 20px;"></i>
            <h3 style="color: var(--gold-color); margin-bottom: 15px;">Impact Socio-économique</h3>
            <p style="color: white; line-height: 1.8;">
                Création d'emplois, développement rural et contribution à la sécurité alimentaire au Togo et en Afrique.
            </p>
        </div>
    </div>
    
    <!-- Pourquoi nous choisir ? (page 3) -->
    <div style="margin-top: 40px; background: rgba(255,255,255,0.05); padding: 30px; border-radius: 20px;">
        <h3 style="color: var(--gold-color); text-align: center; margin-bottom: 30px;">Pourquoi choisir AQUABRAIN ?</h3>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            <div style="text-align: center;">
                <i class="fas fa-map-marker-alt" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Expertise locale</p>
            </div>
            <div style="text-align: center;">
                <i class="fas fa-link" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Approche intégrée</p>
            </div>
            <div style="text-align: center;">
                <i class="fas fa-hand-holding-heart" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Solutions adaptées</p>
            </div>
            <div style="text-align: center;">
                <i class="fas fa-users" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Équipe pluridisciplinaire</p>
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px;">
            <div style="text-align: center;">
                <i class="fas fa-leaf" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Aquaculture durable</p>
            </div>
            <div style="text-align: center;">
                <i class="fas fa-check-circle" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Expertise éprouvée</p>
            </div>
            <div style="text-align: center;">
                <i class="fas fa-chart-pie" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                <p style="color: white;">Résultats durables</p>
            </div>
        </div>
    </div>
    
    <!-- Citation de la fiche -->
    <div style="margin-top: 40px; text-align: center;">
        <p style="font-size: 1.3rem; color: var(--gold-color); font-style: italic;">
            <i class="fas fa-quote-left"></i> L'expertise aquacole au service du développement durable
        </p>
    </div>
</section>

<!-- SECTION APPEL À L'ACTION -->
<section class="container" style="padding: 40px 20px; margin: 40px auto; text-align: center;">
    <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 50px; border-radius: 30px;">
        <h2 style="color: white; margin-bottom: 20px;">Prêt à travailler avec nous ?</h2>
        <p style="color: white; font-size: 1.2rem; margin-bottom: 30px;">Discutons de votre projet aquacole</p>
        <a href="#contact" class="cta-button-primary" style="font-size: 1.2rem; padding: 15px 40px;">Contactez-nous</a>
    </div>
</section>

        <!-- Ici on ajoutera les sections une par une -->

    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} AQUABRAIN. Tous droits réservés. | <a href="mailto:aquabrain57@gmail.com">aquabrain57@gmail.com</a> | +228 79 68 79 66</p>
        </div>
    </footer>

</body>
</html>