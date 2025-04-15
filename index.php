<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Badminton Academy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap" rel="stylesheet">
    <style>
        /* Minimal custom CSS for effects that can't be done with Bootstrap */
        :root {
            --primary: #2196F3;
            --secondary: #1976D2;
            --accent: #00BCD4;
            --dark: #212121;
            --light: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
        
        .gradient-text {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .highlight {
            position: relative;
            font-weight: 600;
            color: var(--primary);
        }
        
        .highlight:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .highlight:hover:after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        .btn-glow {
            box-shadow: 0 0 15px rgba(33, 150, 243, 0.4);
        }
        
        .btn-glow:hover {
            box-shadow: 0 15px 30px rgba(33, 150, 243, 0.4);
        }
        
        .player-bg {
            background: linear-gradient(135deg, rgba(225, 245, 254, 0.8) 0%, rgba(187, 222, 251, 0.5) 100%);
        }
        
        .tournament-bg {
            background: linear-gradient(135deg, rgba(207, 216, 220, 0.2) 0%, rgba(176, 190, 197, 0.1) 100%);
        }
        
        .academy-bg {
            background: linear-gradient(135deg, rgba(225, 245, 254, 0.6) 0%, rgba(187, 222, 251, 0.3) 100%);
        }
        
        .nav-dots {
            position: fixed;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            background: var(--primary);
            opacity: 0.5;
        }
        
        .dot.active {
            opacity: 1;
            background: var(--accent);
            transform: scale(1.3);
        }
        
        @keyframes pulse {
            0% { transform: rotate(15deg) scale(1); }
            50% { transform: rotate(15deg) scale(1.05); }
            100% { transform: rotate(15deg) scale(1); }
        }
        
        .pulse-badge {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <!-- Navigation Dots -->
    <div class="nav-dots d-flex flex-column gap-3 d-none d-lg-flex">
        <div class="dot active rounded-circle" data-section="player-profile"></div>
        <div class="dot rounded-circle" data-section="tournament"></div>
        <div class="dot rounded-circle" data-section="academy"></div>
    </div>

    <!-- Section 1: Player Profile -->
    <section id="player-profile" class="min-vh-100 d-flex align-items-center player-bg">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden bg-cover" style="background-image: url('https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); box-shadow: 0 0 15px rgba(33, 150, 243, 0.4);"></div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold text-uppercase ls-2 mb-4 gradient-text animate__animated animate__fadeIn">ALEXANDRA RUD</h1>
                    <p class="fs-5 lh-lg mb-4 animate__animated animate__fadeIn animate__delay-1s">
                        <span class="highlight">Ranked #1</span> with lightning-fast reflexes and precision smashes that dominate the court. My tournament victories showcase agility, strategy, and mental toughness to outplay any opponent.
                    </p>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 py-3 fs-6 fw-bold text-uppercase ls-2 btn-glow animate__animated animate__fadeInUp animate__delay-2s">BOOK PRIVATE LESSON</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Tournament -->
    <section id="tournament" class="min-vh-100 d-flex align-items-center tournament-bg">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden bg-cover position-relative" style="background-image: url('https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); box-shadow: 0 0 15px rgba(33, 150, 243, 0.4);">
                        <div class="position-absolute top-0 end-0 bg-primary text-white px-4 py-2 rounded-pill fw-bold me-3 mt-3 rotate-15 pulse-badge">$25K PRIZES</div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h1 class="display-3 fw-bold text-uppercase ls-2 mb-4 gradient-text animate__animated animate__fadeIn">SUMMER SHOWDOWN</h1>
                    <p class="fs-5 lh-lg mb-4 animate__animated animate__fadeIn animate__delay-1s">
                        Join the <span class="highlight">premier badminton tournament</span> of the season with $25,000 in prizes. Professional and amateur divisions available. Registration closes June 15th.
                    </p>
                    <div class="mb-4">
                        <p class="mb-2">June 20-22, 2024</p>
                        <p>National Badminton Center</p>
                    </div>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 py-3 fs-6 fw-bold text-uppercase ls-2 btn-glow animate__animated animate__fadeInUp animate__delay-3s">REGISTER NOW</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Academy -->
    <section id="academy" class="min-vh-100 d-flex align-items-center academy-bg">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded-4 overflow-hidden bg-cover position-relative" style="background-image: url('https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'); box-shadow: 0 0 15px rgba(33, 150, 243, 0.4);">
                        <div class="position-absolute bottom-0 start-0 bg-dark bg-opacity-70 text-white px-4 py-2 rounded-2 fw-semi-bold ms-3 mb-3">Certified Level 3 Coach</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-3 fw-bold text-uppercase ls-2 mb-4 gradient-text animate__animated animate__fadeIn">ELITE ACADEMY</h1>
                    <p class="fs-5 lh-lg mb-4 animate__animated animate__fadeIn animate__delay-1s">
                        Our <span class="highlight">proven training system</span> has developed national champions. Whether you're a beginner or competitive player, we have programs to elevate your game.
                    </p>
                    <div class="mb-4">
                        <p class="mb-2">Junior Development (Ages 8-16)</p>
                        <p class="mb-2">Advanced Competitive Training</p>
                        <p>Private Coaching Sessions</p>
                    </div>
                    <button class="btn btn-primary btn-lg rounded-pill px-5 py-3 fs-6 fw-bold text-uppercase ls-2 btn-glow animate__animated animate__fadeInUp animate__delay-3s">VIEW PROGRAMS</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Button interaction
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                const sectionId = this.closest('section').id;
                alert(`Action for ${sectionId} section would be triggered here!`);
            });
        });
        
        // Navigation dots functionality
        const dots = document.querySelectorAll('.dot');
        const sections = document.querySelectorAll('section');
        
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const sectionId = this.getAttribute('data-section');
                document.getElementById(sectionId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Update active dot on scroll
        window.addEventListener('scroll', () => {
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= sectionTop - sectionHeight / 3) {
                    current = section.getAttribute('id');
                }
            });
            
            dots.forEach(dot => {
                dot.classList.remove('active');
                if (dot.getAttribute('data-section') === current) {
                    dot.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>