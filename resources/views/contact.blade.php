<!DOCTYPE html>
<html lang="fr">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUABRAIN - Contactez-nous</title>
    <meta name="description" content="Contactez AQUABRAIN pour vos projets aquacoles au Togo et en Afrique. Appelez-nous ou écrivez-nous pour un accompagnement personnalisé.">
    
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
                <h1 style="font-size: 3rem; margin-bottom: 20px;">Contactez-nous</h1>
                <p style="font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Votre projet aquacole commence ici. Parlons-en !</p>
            </div>
        </section>

        <!-- SECTION CONTACT -->
        <section class="container" style="padding: 60px 20px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                
                <!-- FORMULAIRE DE CONTACT -->
                <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3);">
                    <h2 style="color: var(--gold-color); margin-bottom: 30px; text-align: left;">Envoyez-nous un message</h2>
                    
                    <form id="contactForm" action="#" method="POST">
                        @csrf
                        <div class="form-group" style="margin-bottom: 20px;">
                            <input type="text" id="name" name="name" required placeholder=" " style="width: 100%; padding: 15px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,215,0,0.3); border-radius: 10px; color: white;">
                            <label for="name" style="color: white;">Nom complet</label>
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <input type="email" id="email" name="email" required placeholder=" " style="width: 100%; padding: 15px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,215,0,0.3); border-radius: 10px; color: white;">
                            <label for="email" style="color: white;">Email</label>
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <input type="tel" id="phone" name="phone" placeholder=" " style="width: 100%; padding: 15px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,215,0,0.3); border-radius: 10px; color: white;">
                            <label for="phone" style="color: white;">Téléphone</label>
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 20px;">
                            <select id="subject" name="subject" style="width: 100%; padding: 15px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,215,0,0.3); border-radius: 10px; color: white;">
                                <option value="" disabled selected>Sélectionnez un sujet</option>
                                <option value="projet">Demande de projet</option>
                                <option value="devis">Demande de devis</option>
                                <option value="formation">Demande de formation</option>
                                <option value="partenariat">Partenariat</option>
                                <option value="autre">Autre</option>
                            </select>
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 25px;">
                            <textarea id="message" name="message" rows="5" required placeholder=" " style="width: 100%; padding: 15px; background: rgba(255,255,255,0.2); border: 1px solid rgba(255,215,0,0.3); border-radius: 10px; color: white;"></textarea>
                            <label for="message" style="color: white;">Votre message</label>
                        </div>
                        
                        <button type="submit" class="cta-button-primary" style="width: 100%;">Envoyer le message</button>
                        
                        <div id="formFeedback" style="margin-top: 15px; text-align: center; color: var(--gold-color); display: none;"></div>
                    </form>
                </div>
                
                <!-- COORDONNÉES -->
                <div>
                    <!-- Infos de contact -->
                    <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3); margin-bottom: 30px;">
                        <h2 style="color: var(--gold-color); margin-bottom: 30px; text-align: left;">Coordonnées</h2>
                        
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 50px; height: 50px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-phone" style="color: var(--gold-color); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h3 style="color: var(--gold-color); margin-bottom: 5px;">Téléphone</h3>
                                <p style="color: white;"><a href="tel:+22879687966" style="color: white; text-decoration: none;">+228 79 68 79 66</a></p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 50px; height: 50px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-envelope" style="color: var(--gold-color); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h3 style="color: var(--gold-color); margin-bottom: 5px;">Email</h3>
                                <p style="color: white;"><a href="mailto:aquabrain57@gmail.com" style="color: white; text-decoration: none;">aquabrain57@gmail.com</a></p>
                            </div>
                        </div>
                        
                        <div style="display: flex; align-items: center; margin-bottom: 25px;">
                            <div style="width: 50px; height: 50px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 20px;">
                                <i class="fas fa-map-marker-alt" style="color: var(--gold-color); font-size: 1.3rem;"></i>
                            </div>
                            <div>
                                <h3 style="color: var(--gold-color); margin-bottom: 5px;">Adresse</h3>
                                <p style="color: white;">Lomé, Togo</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Horaires -->
                    <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3); margin-bottom: 30px;">
                        <h2 style="color: var(--gold-color); margin-bottom: 30px; text-align: left;">Horaires</h2>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <span style="color: white;">Lundi - Vendredi</span>
                            <span style="color: var(--gold-color);">08:00 - 18:00</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
                            <span style="color: white;">Samedi</span>
                            <span style="color: var(--gold-color);">09:00 - 13:00</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: white;">Dimanche</span>
                            <span style="color: var(--gold-color);">Fermé</span>
                        </div>
                    </div>
                    
                    <!-- Réseaux sociaux -->
                    <div style="background: rgba(255,255,255,0.1); backdrop-filter: blur(5px); border-radius: 30px; padding: 40px; border: 1px solid rgba(255,215,0,0.3);">
                        <h2 style="color: var(--gold-color); margin-bottom: 30px; text-align: left;">Suivez-nous</h2>
                        <div style="display: flex; gap: 20px;">
                            <a href="#" style="width: 45px; height: 45px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onmouseover="this.style.background='var(--gold-gradient)'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,215,0,0.2)'; this.style.transform='scale(1)'">
                                <i class="fab fa-facebook-f" style="color: var(--gold-color); font-size: 1.2rem;"></i>
                            </a>
                            <a href="#" style="width: 45px; height: 45px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onmouseover="this.style.background='var(--gold-gradient)'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,215,0,0.2)'; this.style.transform='scale(1)'">
                                <i class="fab fa-linkedin-in" style="color: var(--gold-color); font-size: 1.2rem;"></i>
                            </a>
                            <a href="#" style="width: 45px; height: 45px; background: rgba(255,215,0,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;" onmouseover="this.style.background='var(--gold-gradient)'; this.style.transform='scale(1.1)'" onmouseout="this.style.background='rgba(255,215,0,0.2)'; this.style.transform='scale(1)'">
                                <i class="fab fa-whatsapp" style="color: var(--gold-color); font-size: 1.2rem;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CARTE GOOGLE MAPS (optionnelle) -->
        <section class="container" style="padding: 0 20px 60px 20px;">
            <div style="border-radius: 30px; overflow: hidden; border: 3px solid var(--gold-color); height: 400px;">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253722.44743782043!2d1.0542453228142427!3d6.172282981068034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102231d9e0bdb487%3A0x3b8e324a6e54e1c4!2sLom%C3%A9%2C%20Togo!5e0!3m2!1sfr!2sfr!4v1700000000000!5m2!1sfr!2sfr" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
        
        <!-- SECTION FAQ RAPIDE -->
        <section class="container" style="padding: 60px 20px;">
            <div style="background: rgba(255,255,255,0.05); border-radius: 30px; padding: 50px;">
                <h2 style="color: var(--gold-color); text-align: center; margin-bottom: 40px;">Questions fréquentes</h2>
                
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px;">
                    <div>
                        <h3 style="color: var(--gold-color); margin-bottom: 10px;">❓ Comment obtenir un devis ?</h3>
                        <p style="color: white;">Contactez-nous par téléphone ou via le formulaire, nous vous répondrons sous 24h.</p>
                    </div>
                    <div>
                        <h3 style="color: var(--gold-color); margin-bottom: 10px;">❓ Proposez-vous des formations ?</h3>
                        <p style="color: white;">Oui, nous proposons des formations pratiques et théoriques pour pisciculteurs.</p>
                    </div>
                    <div>
                        <h3 style="color: var(--gold-color); margin-bottom: 10px;">❓ Intervenez-vous dans toute l'Afrique ?</h3>
                        <p style="color: white;">Nous intervenons principalement en Afrique de l'Ouest et Centrale.</p>
                    </div>
                    <div>
                        <h3 style="color: var(--gold-color); margin-bottom: 10px;">❓ Quels sont vos délais d'intervention ?</h3>
                        <p style="color: white;">Les délais varient selon le projet. Contactez-nous pour une estimation personnalisée.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- SECTION APPEL À L'ACTION -->
        <section class="container" style="padding: 40px 20px; margin: 40px auto; text-align: center;">
            <div style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark)); padding: 60px; border-radius: 30px;">
                <h2 style="color: white; margin-bottom: 20px;">Prêt à concrétiser votre projet ?</h2>
                <p style="color: white; font-size: 1.2rem; margin-bottom: 30px;">Appelez-nous dès aujourd'hui au <strong style="color: var(--gold-color);">+228 79 68 79 66</strong></p>
                <a href="tel:+22879687966" class="cta-button-primary" style="font-size: 1.2rem; padding: 15px 40px;">📞 Appelez-nous</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} AQUABRAIN. Tous droits réservés. | <a href="mailto:aquabrain57@gmail.com">aquabrain57@gmail.com</a> | +228 79 68 79 66</p>
        </div>
    </footer>

    <script>
        // Gestion du formulaire
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const feedback = document.getElementById('formFeedback');
            feedback.style.display = 'block';
            feedback.innerHTML = 'Envoi en cours...';
            
            setTimeout(() => {
                feedback.innerHTML = '✅ Message envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.';
                this.reset();
            }, 1500);
        });
    </script>

</body>
</html>