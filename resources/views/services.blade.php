<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUABRAIN - Nos Services</title>
    <meta name="description" content="Découvrez les services d'expertise d'AQUABRAIN : études, ingénierie, formation, audit et solutions digitales pour l'aquaculture en Afrique.">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a href="{{ route('home') }}" class="logo">AQUABRAIN</a>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}#chaine-valeur">Accueil</a></li>
                    <li><a href="{{ route('qui-sommes-nous') }}">Qui sommes-nous</a></li>
                    <li><a href="{{ route('realisations') }}">Réalisations</a></li>
                    <li><a href="{{ route('contact') }}" class="btn-contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <!-- SECTION HERO -->
        <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 150px 0 80px; text-align: center; color: white;">
            <div class="container">
                <h1 style="font-size: 3rem; margin-bottom: 20px;">Nos Services</h1>
                <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Un accompagnement complet sur toute la chaîne de valeur aquacole</p>
            </div>
        </section>

        <!-- SECTION INTRODUCTION AVEC PHOTO ET TEXTE DANS CASE -->
        <section class="container" style="padding: 60px 20px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3);">
                    <h2 style="color: var(--gold-color); margin-bottom: 20px;">L'expertise aquacole au service du développement durable</h2>
                    <p style="color: white; font-size: 1.1rem; line-height: 1.8;">
                        AQUABRAIN transforme l'aquaculture en levier de sécurité alimentaire, d'emplois et de développement durable 
                        au Togo et en Afrique. Nous intervenons sur l'ensemble de la chaîne de valeur aquacole, 
                        depuis l'étude et la conception jusqu'au suivi, l'évaluation et la formation.
                    </p>
                </div>
                <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 320px; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
                    <img src="{{ asset('img/intro-service.jpg') }}" alt="AQUABRAIN en action" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                </div>
            </div>
        </section>

        <!-- SECTION NOTRE EXPERTISE AVEC TITRE DANS CASE ET PHOTOS -->
        <section class="container" style="padding: 60px 20px;">
            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3); margin-bottom: 50px;">
                <h2 style="text-align: center; color: var(--gold-color); margin-bottom: 15px;">Notre Expertise</h2>
                <p style="text-align: center; color: white; font-size: 1.1rem;">Un accompagnement complet sur toute la chaîne de valeur aquacole</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
                
                <!-- Service 1 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/expertise-1.jpg') }}" alt="Pêche et aquaculture" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-fish" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Pêche et Aquaculture</h3>
                    <p style="color: white; line-height: 1.6;">Appui technique aux activités de pêche et d'élevage aquacole (poissons, systèmes extensifs, semi-intensifs et intensifs).</p>
                </div>
                
                <!-- Service 2 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/expertise-2.jpg') }}" alt="Études et prospection" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-search" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Études & Prospection</h3>
                    <p style="color: white; line-height: 1.6;">Réalisation d'études de faisabilité, diagnostics techniques, études de marché et prospection de sites aquacoles.</p>
                </div>
                
                <!-- Service 3 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/expertise-3.jpg') }}" alt="Aménagement et construction" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-hard-hat" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Aménagement & Construction</h3>
                    <p style="color: white; line-height: 1.6;">Conception et réalisation de bassins piscicoles, étangs, barrages, cages, systèmes hors-sol et autres infrastructures.</p>
                </div>
                
                <!-- Service 4 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/expertise-4.jpg') }}" alt="Accompagnement de projets" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-handshake" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Accompagnement de Projets</h3>
                    <p style="color: white; line-height: 1.6;">Assistance technique et stratégique pour la mise en œuvre, le développement et la structuration de projets aquacoles.</p>
                </div>
                
                <!-- Service 5 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/expertise-5.jpg') }}" alt="Rédaction et gestion de projets" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-file-alt" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Rédaction & Gestion de Projets</h3>
                    <p style="color: white; line-height: 1.6;">Montage de projets, rédaction de propositions techniques et financières, gestion et coordination de projets financés.</p>
                </div>
                
                <!-- Service 6 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/ferme.jpg') }}" alt="Audit des fermes" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-clipboard-list" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Audit des Fermes</h3>
                    <p style="color: white; line-height: 1.6;">Évaluation technique, organisationnelle et économique des fermes aquacoles avec recommandations d'amélioration.</p>
                </div>
                
                <!-- Service 7 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/suivi.jpg') }}" alt="Suivi et évaluation" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-chart-line" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Suivi & Évaluation</h3>
                    <p style="color: white; line-height: 1.6;">Mise en place de systèmes de suivi-évaluation, indicateurs de performance et rapports d'impact.</p>
                </div>
                
                <!-- Service 8 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/formation.jpg') }}" alt="Formations" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-chalkboard-user" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Formations</h3>
                    <p style="color: white; line-height: 1.6;">Formations pratiques et théoriques à destination des pisciculteurs, techniciens, jeunes entrepreneurs et organisations.</p>
                </div>
                
                <!-- Service 9 -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="width: 100%; height: 160px; border-radius: 12px; overflow: hidden; margin-bottom: 15px;">
                        <img src="{{ asset('img/digital.jpg') }}" alt="Optimisation et digital" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                    <i class="fas fa-microchip" style="font-size: 2rem; color: var(--gold-color); margin-bottom: 10px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Optimisation & Digital</h3>
                    <p style="color: white; line-height: 1.6;">Solutions AQUAPILOTE : création d'outils et applications sur mesure pour la gestion et le suivi des fermes piscicoles (IoT, IA).</p>
                </div>
                
            </div>
        </section>

        <!-- SECTION SERVICES COMPLÉMENTAIRES -->
        <section class="container" style="padding: 60px 20px; background: rgba(255,255,255,0.05); border-radius: 30px; margin: 40px auto;">
            <h2 style="text-align: center; margin-bottom: 20px; color: var(--gold-color);">Services Complémentaires</h2>
            <p style="text-align: center; color: white; margin-bottom: 50px; font-size: 1.1rem;">Pour un accompagnement encore plus complet</p>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 25px;">
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-chart-line" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Intelligence de marché</h3>
                    <p style="color: white;">Analyse des tendances, veille concurrentielle et identification d'opportunités.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-bullhorn" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Communication</h3>
                    <p style="color: white;">Promotion, marketing et visibilité des projets et produits aquacoles.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-laptop-code" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Solutions digitales</h3>
                    <p style="color: white;">Outils et applications sur mesure pour la gestion des fermes piscicoles.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-truck" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Import/Export</h3>
                    <p style="color: white;">Accompagnement dans les échanges internationaux de produits aquacoles.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-chart-pie" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Étude de marché</h3>
                    <p style="color: white;">Collecte et analyse de données pour des décisions stratégiques.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-handshake" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color);">Mise en relation</h3>
                    <p style="color: white;">Création de partenariats entre acteurs du secteur.</p>
                </div>
            </div>
        </section>

        <!-- SECTION AQUAPILOTE -->
        <section class="container" style="padding: 60px 20px; margin: 40px auto;">
            <div style="background: linear-gradient(135deg, rgba(0,119,190,0.3), rgba(0,76,122,0.4)); backdrop-filter: blur(5px); border-radius: 30px; padding: 50px; border: 2px solid var(--gold-color);">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                    <div>
                        <div style="display: inline-block; background: var(--gold-gradient); padding: 8px 20px; border-radius: 50px; margin-bottom: 20px;">
                            <span style="color: var(--dark-color); font-weight: bold;">🏆 Innovation 2025</span>
                        </div>
                        <h2 style="text-align: left; color: var(--gold-color); margin-bottom: 20px;">AQUAPILOTE</h2>
                        <p style="color: white; font-size: 1.1rem; line-height: 1.8;">L'Intelligence Artificielle au service de l'aquaculture</p>
                        <p style="color: white; line-height: 1.8;">Aquapilote est notre solution digitale innovante qui intègre l'IoT et l'IA pour la gestion intelligente des fermes piscicoles.</p>
                        <ul style="margin-top: 20px; color: white; list-style: none;">
                            <li><i class="fas fa-check-circle" style="color: var(--gold-color);"></i> Suivi en temps réel</li>
                            <li><i class="fas fa-check-circle" style="color: var(--gold-color);"></i> Alertes intelligentes</li>
                            <li><i class="fas fa-check-circle" style="color: var(--gold-color);"></i> Optimisation des aliments</li>
                        </ul>
                    </div>
                    <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
                        <img src="{{ asset('img/aquapilote.jpg') }}" alt="AQUAPILOTE" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION POURQUOI NOUS CHOISIR AVEC TITRE DANS CASE -->
        <section class="container" style="padding: 60px 20px; margin: 40px auto;">
            <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3); margin-bottom: 50px;">
                <h2 style="text-align: center; color: var(--gold-color); margin-bottom: 15px;">Pourquoi choisir AQUABRAIN ?</h2>
                <p style="text-align: center; color: white; font-size: 1.1rem;">Les atouts qui font la différence</p>
            </div>
            
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-map-marker-alt" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Expertise locale</h3>
                    <p style="color: white;">Connaissance approfondie du contexte ouest-africain et des réalités locales.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-link" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Approche intégrée</h3>
                    <p style="color: white;">Couvrant toute la chaîne de valeur aquacole, de l'étude à la gestion.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-hand-holding-heart" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Solutions adaptées</h3>
                    <p style="color: white;">Répondant aux réalités rurales et urbaines du continent africain.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-users" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Équipe pluridisciplinaire</h3>
                    <p style="color: white;">Experts en technique, gestion de projet, innovation et formation.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-trophy" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Expertise éprouvée</h3>
                    <p style="color: white;">Plus de 5 ans d'expérience sur toute la chaîne de valeur aquacole.</p>
                </div>
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 15px; padding: 25px; text-align: center; border: 1px solid rgba(255,215,0,0.3);">
                    <i class="fas fa-leaf" style="font-size: 2.5rem; color: var(--gold-color); margin-bottom: 15px;"></i>
                    <h3 style="color: var(--gold-color); margin-bottom: 10px;">Résultats durables</h3>
                    <p style="color: white;">Solutions techniques performantes, rentables et respectueuses de l'environnement.</p>
                </div>
            </div>
        </section>

        <!-- SECTION APPEL À L'ACTION -->
        <section class="container" style="padding: 40px 20px; margin: 40px auto; text-align: center;">
            <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 60px; border-radius: 30px;">
                <h2 style="color: white; margin-bottom: 20px;">Prêt à concrétiser votre projet ?</h2>
                <p style="color: white; font-size: 1.2rem; margin-bottom: 30px;">Discutons ensemble de vos besoins aquacoles</p>
                <a href="#contact" class="cta-button-primary" style="font-size: 1.2rem; padding: 15px 40px;">Contactez-nous</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} AQUABRAIN. Tous droits réservés. | <a href="mailto:aquabrain57@gmail.com">aquabrain57@gmail.com</a> | +228 79 68 79 66</p>
        </div>
    </footer>

</body>
</html>