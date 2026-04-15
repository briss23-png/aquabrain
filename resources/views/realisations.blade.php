<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUABRAIN - Nos Réalisations</title>
    <meta name="description" content="Découvrez les projets phares d'AQUABRAIN au Togo, Mali et RDC : fermes piscicoles, écloseries et formations.">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    @media (max-width: 768px) {
        .page-hero {
            padding: 100px 15px 50px !important;
        }
        .page-hero h1 {
            font-size: 2rem !important;
        }
        #realisations > div > div {
            grid-template-columns: 1fr !important;
            padding: 20px !important;
        }
        .service-tag {
            font-size: 0.7rem !important;
            padding: 4px 10px !important;
        }
        [style*="display: grid"] {
            gap: 20px !important;
        }
    }
    </style>
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="container">
                <a href="{{ route('home') }}" class="logo">AQUABRAIN</a>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}#chaine-valeur">Accueil</a></li>
                    <li><a href="{{ route('qui-sommes-nous') }}">Qui sommes-nous</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
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
                <h1 style="font-size: 3rem; margin-bottom: 20px;">Nos Réalisations</h1>
                <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Des projets concrets qui transforment l'aquaculture en Afrique</p>
            </div>
        </section>

        <!-- SECTION INTRODUCTION -->
        <section class="container" style="padding: 60px 20px;">
            <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                <p style="color: white; font-size: 1.2rem; line-height: 1.8;">
                    Nous accompagnons des institutions, entreprises et projets agricoles en Afrique à travers des études, 
                    missions terrain et appuis techniques à fort impact. Nos interventions couvrent plusieurs pays, 
                    notamment le <strong class="highlight">Togo, le Mali, la RDC et le Bénin</strong>.
                </p>
            </div>
        </section>

        <!-- SECTION PROJET 1 : LOFTY FARM -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Image à gauche -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/lofty.jpg') }}" alt="LOFTY FARM Togo" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
        
        <!-- Texte à droite -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇹🇬 Togo</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">LOFTY FARM</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Ferme piscicole moderne</strong> - Une capacité de production dépassant <strong>800 tonnes</strong> de poissons-chats par an.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                Le projet LOFTY FARM comprend l'aménagement de bassins piscicoles, des systèmes d'alevinage intensif et une unité de production d'aliments pour poissons.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">📊 800 tonnes/an</span>
                <span class="service-tag">🐟 100 bassins</span>
                <span class="service-tag">🌾 Production aliment</span>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PROJET 2 : SEM GROUPE -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Texte à gauche -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇲🇱 Mali</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">SEM GROUPE</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Unité d'alevinage</strong> - Une capacité de production de <strong>1 000 000 d'alevins</strong> par mois.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                AQUABRAIN a accompagné SEM GROUPE dans la mise en place d'une unité d'alevinage performante, avec des systèmes de production intensive et une formation des équipes locales.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">🐟 1M alevins/mois</span>
                <span class="service-tag">🎓 Formation</span>
                <span class="service-tag">🔧 Systèmes intensifs</span>
            </div>
        </div>
        
        <!-- Image à droite -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/sem.jpg') }}" alt="SEM GROUPE Mali" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
    </div>
</section>

<!-- SECTION PROJET 3 : IFAD AQUACULTURE -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Image à gauche -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/ifad.jpg') }}" alt="IFAD Togo" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
        
        <!-- Texte à droite -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇹🇬 Togo</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">IFAD AQUACULTURE</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Complexe piscicole intégré et école-ferme</strong> - Une production de <strong>10 tonnes</strong> par cycle.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                AQUABRAIN a accompagné le développement de 50 fermes piscicoles familiales et la création d'une école-ferme pour la formation des pisciculteurs.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">🎓 École-ferme</span>
                <span class="service-tag">🏡 50 fermes familiales</span>
                <span class="service-tag">📊 10 tonnes/cycle</span>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PROJET 4 : ACCESSLANDS -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Texte à gauche -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇨🇩 RDC</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">ACCESSLANDS</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Complexe d'écloseries</strong> - Une production de <strong>34 tonnes</strong> de poissons-chats par cycle et <strong>45 000 alevins</strong>.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                AQUABRAIN a réalisé l'ingénierie complète d'un complexe de 4 écloseries et 20 fermes de grossissement, avec un programme de formation pour les exploitants.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">🏭 4 écloseries</span>
                <span class="service-tag">🌾 20 fermes</span>
                <span class="service-tag">📊 34 tonnes/cycle</span>
                <span class="service-tag">🐟 45 000 alevins</span>
            </div>
        </div>
        
        <!-- Image à droite -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/complex.jpg') }}" alt="ACCESSLANDS RDC" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
    </div>
</section>

<!-- SECTION PROJET 5 : ODA AGROBUSINESS -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Image à gauche -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/togo.jpg') }}" alt="ODA Agrobusiness Togo" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
        
        <!-- Texte à droite -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇹🇬 Togo</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">ODA Agrobusiness</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Ferme piscicole intensive</strong> - Une capacité de production de <strong>800 tonnes</strong> de poissons-chats.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                AQUABRAIN a accompagné ODA Agrobusiness dans la conception, l'installation et la mise en exploitation d'une ferme piscicole moderne avec des systèmes d'élevage intensif.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">📊 800 tonnes/an</span>
                <span class="service-tag">🔧 Système intensif</span>
                <span class="service-tag">🐟 Tilapia & Clarias</span>
            </div>
        </div>
    </div>
</section>

<!-- SECTION PROJET 6 : PROJET BÉNIN (EN COURS) -->
<section class="container" style="padding: 60px 20px;">
    <div class="project-card">
        
        <!-- Image à gauche -->
        <div style="border-radius: 20px; overflow: hidden; border: 3px solid var(--gold-color); height: 300px;">
            <img src="{{ asset('img/benin.jpg') }}" alt="Projet Bénin" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
        </div>
        
        <!-- Texte à droite -->
        <div>
            <div style="display: inline-block; background: var(--gold-gradient); padding: 5px 15px; border-radius: 50px; margin-bottom: 15px;">
                <span style="color: var(--dark-color); font-weight: bold;">🇧🇯 Bénin</span>
                <span style="margin-left: 10px; background: var(--dark-color); color: var(--gold-color); padding: 2px 10px; border-radius: 20px; font-size: 0.8rem;">En cours</span>
            </div>
            <h2 style="color: var(--gold-color); margin-bottom: 15px; text-align: left;">Ferme de Production - Bénin</h2>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                <strong>Nouveau projet aquacole</strong> - Une ferme de production en cours de développement.
            </p>
            <p style="color: white; line-height: 1.8; margin-bottom: 20px;">
                AQUABRAIN accompagne actuellement un projet de ferme piscicole au Bénin, avec des installations modernes pour la production intensive de poissons.
            </p>
            <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
                <span class="service-tag">🚧 En construction</span>
                <span class="service-tag">📈 Production intensive</span>
                <span class="service-tag">🌊 Système moderne</span>
            </div>
        </div>
    </div>
</section>
<!-- SECTION CHIFFRES CLÉS -->
<section class="container" style="padding: 60px 20px; margin: 40px auto;">
    <div style="background: linear-gradient(135deg, rgba(0,119,190,0.3), rgba(0,76,122,0.4)); backdrop-filter: blur(5px); border-radius: 30px; padding: 50px; border: 2px solid var(--gold-color); text-align: center;">
        <h2 style="color: var(--gold-color); margin-bottom: 20px;">Notre Impact en Chiffres</h2>
        
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 40px;">
            <div>
                <i class="fas fa-fish" style="font-size: 2.5rem; color: var(--gold-color);"></i>
                <h3 style="color: white; font-size: 2rem; margin: 10px 0;">800+</h3>
                <p style="color: white;">Tonnes produites (LOFTY)</p>
            </div>
            <div>
                <i class="fas fa-egg" style="font-size: 2.5rem; color: var(--gold-color);"></i>
                <h3 style="color: white; font-size: 2rem; margin: 10px 0;">1M</h3>
                <p style="color: white;">Alevins/mois (SEM)</p>
            </div>
            <div>
                <i class="fas fa-school" style="font-size: 2.5rem; color: var(--gold-color);"></i>
                <h3 style="color: white; font-size: 2rem; margin: 10px 0;">50+</h3>
                <p style="color: white;">Fermes accompagnées</p>
            </div>
            <div>
                <i class="fas fa-globe-africa" style="font-size: 2.5rem; color: var(--gold-color);"></i>
                <h3 style="color: white; font-size: 2rem; margin: 10px 0;">4</h3>
                <p style="color: white;">Pays d'intervention</p>
            </div>
        </div>
    </div>
</section>

<!-- SECTION APPEL À L'ACTION -->
<section class="container" style="padding: 40px 20px; margin: 40px auto; text-align: center;">
    <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 60px; border-radius: 30px;">
        <h2 style="color: white; margin-bottom: 20px;">Vous avez un projet aquacole ?</h2>
        <p style="color: white; font-size: 1.2rem; margin-bottom: 30px;">Faisons-le ensemble, contactez-nous dès aujourd'hui</p>
        <a href="#contact" class="cta-button-primary" style="font-size: 1.2rem; padding: 15px 40px;">Discutons de votre projet</a>
    </div>
</section>

        <!-- Ici on ajoutera les projets un par un -->

    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} AQUABRAIN. Tous droits réservés. | <a href="mailto:aquabrain57@gmail.com">aquabrain57@gmail.com</a> | +228 79 68 79 66</p>
        </div>
    </footer>

</body>
</html>