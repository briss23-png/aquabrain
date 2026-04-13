'use strict';

document.addEventListener('DOMContentLoaded', function() {
    console.log('AQUABRAIN - Script chargé');

    // 1. ANIMATIONS AU SCROLL
    const observerOptions = { threshold: 0.1 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                if (entry.target.id === 'chiffres' || entry.target.querySelector('.counter')) {
                    startCounters();
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

    // 2. ANIMATION DES COMPTEURS
    function startCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            if (counter.classList.contains('counted')) return; 
            
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText.replace(/,/g, '');
                const speed = 80;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 15);
                } else {
                    counter.innerText = target.toLocaleString();
                    counter.classList.add('counted');
                }
            };
            updateCount();
        });
    }

    // 3. CARTE INTERACTIVE AVEC IMAGES
    const mapContainer = document.querySelector('.map-container');
    
    const projets = [
    { 
        name: 'lofty',
        title: 'LOFTY FARM', 
        country: 'Togo', 
        top: '39%', 
        left: '25%', 
        desc: 'Ferme piscicole moderne', 
        details: '100 bassins, production annuelle de 800 tonnes de tilapia',
        stats: '800 t/an | 100 bassins',
        fullTitle: 'LOFTY FARM (Togo)',
        image: 'lofty.webp'
    },
    { 
        name: 'ifad',
        title: 'PROGRAMME IFAD', 
        country: 'Togo', 
        top: '40%', 
        left: '25.5%', 
        desc: 'Complexe piscicole intégré', 
        details: 'École-ferme et accompagnement de 50 fermes familiales',
        stats: '50 fermes | 1 école-ferme',
        fullTitle: 'IFAD (Togo)',
        image: 'ifad.webp'
    },
    { 
        name: 'sem',
        title: 'SEM GROUPE', 
        country: 'Mali', 
        top: '29%', 
        left: '23%', 
        desc: 'Unité d\'alevinage', 
        details: 'Production d\'1 million d\'alevins par mois',
        stats: '1M alevins/mois',
        fullTitle: 'SEM GROUPE (Mali)',
        image: 'sem.webp'
    },
    { 
        name: 'accesslands',
        title: 'ACCESSLANDS', 
        country: 'RDC', 
        top: '50%', 
        left: '53%', 
        desc: 'Complexe d\'écloseries', 
        details: '4 écloseries, 20 fermes de grossissement',
        stats: '34 tonnes/cycle | 24 sites',
        fullTitle: 'ACCESSLANDS (RDC)',
        image: 'complex.webp'
    }
];
    if (mapContainer) {
        mapContainer.style.position = 'relative';
        mapContainer.style.overflow = 'visible';
        
        const oldMarkers = document.querySelectorAll('.map-marker');
        oldMarkers.forEach(m => m.remove());
        
        projets.forEach(projet => {
            const marker = document.createElement('div');
            marker.className = 'map-marker';
            marker.style.cssText = `
                position: absolute;
                top: ${projet.top};
                left: ${projet.left};
                width: 24px;
                height: 24px;
                background-color: var(--primary-color, #0077be);
                border: 3px solid white;
                border-radius: 50%;
                cursor: pointer;
                transform: translate(-50%, -50%);
                z-index: 100;
                box-shadow: 0 0 15px rgba(0,119,190,0.5);
                transition: all 0.3s ease;
            `;
            
            marker.setAttribute('data-project', projet.name);
            marker.setAttribute('data-title', projet.title);
            marker.setAttribute('data-country', projet.country);
            marker.setAttribute('data-desc', projet.desc);
            marker.setAttribute('data-details', projet.details);
            marker.setAttribute('data-stats', projet.stats);
            marker.setAttribute('data-full-title', projet.fullTitle);
            marker.setAttribute('data-image', projet.image);
            
            mapContainer.appendChild(marker);
        });
        
        const tooltip = document.createElement('div');
        tooltip.id = 'project-tooltip';
        tooltip.style.cssText = `
            position: absolute;
            background: white;
            border: 3px solid var(--primary-color, #0077be);
            border-radius: 12px;
            padding: 0;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            display: none;
            z-index: 10000;
            width: 520px;
            font-family: 'Segoe UI', sans-serif;
            pointer-events: none;
            overflow: hidden;
            left: 0;
            top: 0;
        `;
        mapContainer.appendChild(tooltip);
        
        const style = document.createElement('style');
        style.textContent = `
            @keyframes tooltipFade {
                from { opacity: 0; transform: translateY(10px); }
                to { opacity: 1; transform: translateY(0); }
            }
            #project-tooltip {
                animation: tooltipFade 0.2s ease;
            }
        `;
        document.head.appendChild(style);
        
        const markers = document.querySelectorAll('.map-marker');
        markers.forEach(marker => {
            marker.addEventListener('mouseenter', function(e) {
                const fullTitle = this.getAttribute('data-full-title') || 'Projet';
                const desc = this.getAttribute('data-desc') || '';
                const details = this.getAttribute('data-details') || '';
                const stats = this.getAttribute('data-stats') || '';
                const image = this.getAttribute('data-image') || '';
                
                // Infobulle avec image et texte côte à côte - MÊME HAUTEUR
                tooltip.innerHTML = `
                    <div style="display: flex; width: 100%; background: white; border-radius: 12px; overflow: hidden;">
                        <!-- Partie image -->
                        <div style="width: 220px; height: 220px; background: linear-gradient(135deg, #0077be, #004c7a); display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0;">
                            <img src="/img/${image}" 
                                 alt="${fullTitle}"
                                 style="width: 100%; height: 100%; object-fit: cover; display: block;"
                                 onerror="this.style.display='none'; this.parentElement.innerHTML='📷'; this.parentElement.style.fontSize='3rem'; this.parentElement.style.color='white';">
                        </div>
                        <!-- Partie texte -->
                        <div style="width: 300px; padding: 12px; background: white; height: 220px; overflow-y: auto; display: flex; flex-direction: column; justify-content: center;">
                            <h4 style="margin:0 0 8px 0; color: #0077be; font-size: 1rem; border-bottom: 2px solid #0077be; padding-bottom: 5px; font-weight: 700;">
                                📍 ${fullTitle}
                            </h4>
                            <p style="margin:5px 0; font-weight: 700; color: #0077be; font-size: 0.85rem;">${desc}</p>
                            <p style="margin:5px 0; color: #555; font-size: 0.8rem; line-height: 1.3;">${details}</p>
                            <div style="margin-top: 8px; padding: 6px; background: #f0f8ff; border-radius: 5px; border-left: 3px solid #0077be;">
                                <span style="font-weight: 700; color: #0077be; font-size: 0.8rem;">📊 ${stats}</span>
                            </div>
                        </div>
                    </div>
                `;
                
                const markerRect = this.getBoundingClientRect();
                const containerRect = mapContainer.getBoundingClientRect();
                const tooltipWidth = 520;
                const windowWidth = window.innerWidth;
                
                let leftPos = markerRect.left - containerRect.left + 30;
                let topPos = markerRect.top - containerRect.top - 140;
                
                if (markerRect.left + tooltipWidth > windowWidth - 20) {
                    leftPos = markerRect.left - containerRect.left - tooltipWidth - 20;
                }
                
                if (leftPos < 10) {
                    leftPos = 10;
                }
                
                if (topPos < 10) {
                    topPos = markerRect.top - containerRect.top + 50;
                }
                
                if (this.getAttribute('data-project') === 'accesslands') {
                    topPos = markerRect.top - containerRect.top - 150;
                }
                
                if (this.getAttribute('data-project') === 'lofty' || this.getAttribute('data-project') === 'ifad') {
                    topPos = markerRect.top - containerRect.top - 135;
                }
                
                tooltip.style.left = leftPos + 'px';
                tooltip.style.top = topPos + 'px';
                tooltip.style.display = 'block';
                
                this.style.transform = 'translate(-50%, -50%) scale(1.3)';
                this.style.backgroundColor = '#00a8cc';
                this.style.boxShadow = '0 0 25px rgba(0,168,204,0.8)';
            });
            
            marker.addEventListener('mouseleave', function() {
                tooltip.style.display = 'none';
                this.style.transform = 'translate(-50%, -50%) scale(1)';
                this.style.backgroundColor = 'var(--primary-color, #0077be)';
                this.style.boxShadow = '0 0 15px rgba(0,119,190,0.5)';
            });
        });
        
        console.log('Carte interactive initialisée avec', markers.length, 'marqueurs');
    }

    // 4. CAROUSEL
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.carousel-arrow.prev');
    const nextBtn = document.querySelector('.carousel-arrow.next');
    
    if (slides.length) {
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
    }

    // 5. FORMULAIRE
    const contactForm = document.getElementById('contact-form');
    const feedback = document.getElementById('form-feedback');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            feedback.style.display = 'block';
            feedback.style.color = 'var(--primary-color)';
            feedback.innerText = 'Envoi en cours...';
            
            setTimeout(() => {
                feedback.innerText = 'Message envoyé avec succès !';
                contactForm.reset();
            }, 1500);
        });
    }
});