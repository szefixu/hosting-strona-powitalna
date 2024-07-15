<?php
$packages = [
    'basic' => ['name' => 'Podstawowy', 'vcpu' => 2, 'ram' => 4, 'disk' => 50, 'price' => 20, 'games' => ['Minecraft' => 20, 'Terraria' => 16]],
    'standard' => ['name' => 'Standardowy', 'vcpu' => 4, 'ram' => 8, 'disk' => 100, 'price' => 40, 'games' => ['Minecraft' => 40, 'CS2' => 20, 'Valheim' => 10]],
    'premium' => ['name' => 'Premium', 'vcpu' => 8, 'ram' => 16, 'disk' => 200, 'price' => 80, 'games' => ['Minecraft' => 100, 'CS2' => 40, 'Rust' => 150, 'ARK' => 70]],
    'ultimate' => ['name' => 'Ultimate', 'vcpu' => 16, 'ram' => 32, 'disk' => 500, 'price' => 160, 'games' => ['Minecraft' => 200, 'CS2' => 100, 'Rust' => 300, 'ARK' => 150]]
];

$selectedPackage = isset($_POST['package']) ? $_POST['package'] : 'basic';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHostPro - Zaawansowany Hosting Serwerów Gier</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    
    <header class="glassmorphism">
        <div class="container">
            <nav>
                <div class="logo">Game<span>Host</span>Pro</div>
                <div class="nav-links">
                    <a href="#home">Home</a>
                    <a href="#features">Funkcje</a>
                    <a href="#pricing">Cennik</a>
                    <a href="#contact">Kontakt</a>
                </div>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container">
                <div class="hero-content reveal fade-bottom">
                    <h1>Wzmocnij Swoją <span class="neon-text">Grę</span> z GameHostPro</h1>
                    <p>Doświadcz niezrównanej wydajności i niezawodności dla Twoich serwerów gier.</p>
                    <a href="#pricing" class="btn btn-primary">Wybierz pakiet</a>
                    <a href="#features" class="btn btn-secondary">Odkryj więcej</a>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <h2 class="section-title reveal fade-bottom">Zaawansowane Funkcje</h2>
                <div class="feature-grid">
                    <div class="feature-item reveal fade-left" data-tilt>
                        <i class="fas fa-rocket"></i>
                        <h3>Błyskawiczna Wydajność</h3>
                        <p>Serwery najnowszej generacji zapewniające płynną rozgrywkę nawet przy dużym obciążeniu.</p>
                    </div>
                    <div class="feature-item reveal fade-bottom" data-tilt>
                        <i class="fas fa-shield-alt"></i>
                        <h3>Ochrona DDoS</h3>
                        <p>Zaawansowana ochrona przed atakami DDoS, gwarantująca ciągłość działania Twojego serwera.</p>
                    </div>
                    <div class="feature-item reveal fade-right" data-tilt>
                        <i class="fas fa-cogs"></i>
                        <h3>Łatwa Konfiguracja</h3>
                        <p>Intuicyjny panel zarządzania dla szybkiej i bezproblemowej konfiguracji serwera.</p>
                    </div>
                    <div class="feature-item reveal fade-left" data-tilt>
                        <i class="fas fa-headset"></i>
                        <h3>Wsparcie 24/7</h3>
                        <p>Nasz zespół ekspertów jest zawsze gotowy do pomocy, niezależnie od pory dnia czy nocy.</p>
                    </div>
                    <div class="feature-item reveal fade-bottom" data-tilt>
                        <i class="fas fa-database"></i>
                        <h3>Automatyczne Backupy</h3>
                        <p>Regularne kopie zapasowe Twoich danych, abyś nigdy nie musiał martwić się o utratę postępów.</p>
                    </div>
                    <div class="feature-item reveal fade-right" data-tilt>
                        <i class="fas fa-globe"></i>
                        <h3>Globalna Sieć</h3>
                        <p>Serwery rozmieszczone strategicznie na całym świecie dla minimalnych opóźnień.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pricing" class="pricing">
            <div class="container">
                <h2 class="section-title reveal fade-bottom">Wybierz Swój Pakiet</h2>
                <div class="package-grid reveal fade-bottom">
                    <?php foreach ($packages as $key => $package): ?>
                        <div class="package-item glassmorphism" data-package="<?= $key ?>">
                            <h3><?= $package['name'] ?></h3>
                            <ul>
                                <li><i class="fas fa-microchip"></i> <?= $package['vcpu'] ?> vCPU</li>
                                <li><i class="fas fa-memory"></i> <?= $package['ram'] ?> GB RAM</li>
                                <li><i class="fas fa-hdd"></i> <?= $package['disk'] ?> GB SSD</li>
                            </ul>
                            <p class="price"><?= $package['price'] ?> zł / miesiąc</p>
                            <div class="package-games">
                                <h4>Zalecane gry:</h4>
                                <ul>
                                    <?php foreach ($package['games'] as $game => $slots): ?>
                                        <li><?= $game ?> (do <?= $slots ?> slotów)</li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <button class="btn btn-primary select-package" data-package="<?= $key ?>">Wybierz</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="pricing-info reveal fade-bottom">
                    <p><i class="fas fa-info-circle"></i> Dla gier typu Minecraft polecamy pakiety z większą ilością RAM, a dla gier typu CS2 i Rust polecamy pakiety z mocniejszym CPU.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <h2 class="section-title reveal fade-bottom">Skontaktuj się z Nami</h2>
                <div class="contact-content">
                    <div class="contact-info reveal fade-left">
                        <p><i class="fas fa-envelope"></i> Email: kontakt@gamehostpro.pl</p>
                        <p><i class="fas fa-phone"></i> Telefon: +48 123 456 789</p>
                        <p><i class="fas fa-map-marker-alt"></i> Adres: ul. Serwerowa 42, 00-000 Warszawa</p>
                    </div>
                    <form class="contact-form glassmorphism reveal fade-right">
                        <input type="text" placeholder="Twoje imię" required>
                        <input type="email" placeholder="Twój email" required>
                        <textarea placeholder="Twoja wiadomość" required></textarea>
                        <button type="submit" class="btn btn-primary">Wyślij wiadomość</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo">Game<span>Host</span>Pro</div>
                    <p>Twój partner w hostingu serwerów gier</p>
                </div>
                <div class="footer-links">
                    <h4>Szybkie linki</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">Funkcje</a></li>
                        <li><a href="#pricing">Cennik</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h4>Znajdź nas</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GameHostPro. Wszelkie prawa zastrzeżone.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Konfiguracja Particles.js
            const particlesConfig = {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            };

            // Inicjalizacja Particles.js
            particlesJS("particles-js", particlesConfig);

            // Inicjalizacja Vanilla Tilt
            VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
                max: 25,
                speed: 400,
                glare: true,
                "max-glare": 0.5,
            });

            // Funkcja do płynnego przewijania
            const smoothScroll = (target, duration = 1000) => {
                const targetElement = document.querySelector(target);
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - startPosition;
                let startTime = null;

                const animation = (currentTime) => {
                    if (startTime === null) startTime = currentTime;
                    const timeElapsed = currentTime - startTime;
                    const run = ease(timeElapsed, startPosition, distance, duration);
                    window.scrollTo(0, run);
                    if (timeElapsed < duration) requestAnimationFrame(animation);
                };

                const ease = (t, b, c, d) => {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                };

                requestAnimationFrame(animation);
            };

            // Obsługa płynnego przewijania dla linków nawigacyjnych
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    smoothScroll(this.getAttribute('href'));
                });
            });

            // Funkcja do obsługi efektu reveal przy przewijaniu
            const reveal = () => {
                const reveals = document.querySelectorAll(".reveal");
                reveals.forEach((reveal) => {
                    const windowHeight = window.innerHeight;
                    const elementTop = reveal.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                        reveal.classList.add("active");
                    } else {
                        reveal.classList.remove("active");
                    }
                });
            };

            // Debounce function dla optymalizacji wydajności
            const debounce = (func, wait = 20, immediate = true) => {
                let timeout;
                return function() {
                    const context = this, args = arguments;
                    const later = function() {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    };
                    const callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
                };
            };

            // Nasłuchiwanie na scroll z użyciem debounce
            window.addEventListener('scroll', debounce(reveal));

            // Obsługa menu mobilnego
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });

            // Obsługa wyboru pakietu
            const packageItems = document.querySelectorAll('.package-item');
            packageItems.forEach(item => {
                item.addEventListener('click', function() {
                    packageItems.forEach(pkg => pkg.classList.remove('selected'));
                    this.classList.add('selected');
                    const packageName = this.getAttribute('data-package');
                    console.log(`Wybrano pakiet: ${packageName}`);
                    // Tutaj możesz dodać kod do aktualizacji formularza lub ceny
                });
            });

            // Animacja liczb
            const animateValue = (obj, start, end, duration) => {
                let startTimestamp = null;
                const step = (timestamp) => {
                    if (!startTimestamp) startTimestamp = timestamp;
                    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                    obj.innerHTML = Math.floor(progress * (end - start) + start);
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };
                window.requestAnimationFrame(step);
            };

            const animateNumbers = () => {
                document.querySelectorAll('.animate-number').forEach(el => {
                    const endValue = parseInt(el.getAttribute('data-target'));
                    animateValue(el, 0, endValue, 2000);
                });
            };

            // Obserwator przecięcia dla animacji liczb
            const numberObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateNumbers();
                        numberObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            document.querySelectorAll('.animate-number').forEach(el => numberObserver.observe(el));

            // Inicjalne wywołanie funkcji
            reveal();
        });
    </script>
</body>
</html>