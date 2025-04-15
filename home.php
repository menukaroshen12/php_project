<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeCraft Booking System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="icon" href="17898105.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>



    </style>
</head>

<body>
    <!-- Animated Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand animate__animated animate__fadeInLeft" href="#">
                <i class="fas fa-calendar-check me-2"></i>
                <span class="brand-text">DeepMyth</span> Bookings
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item animate__animated animate__fadeInDown">
                        <a class="nav-link active" href="home.php"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item animate__animated animate__fadeInDown">
                        <a class="nav-link" href="fixed.php"><i class="fas fa-plus-circle me-1"></i> Fixed Booking</a>
                    </li>9
                    <li class="nav-item animate__animated animate__fadeInDown">
                        <a class="nav-link" href="cancelBooking.php"><i class="fas fa-plus-circle me-1"></i> Cancel Booking</a>
                    </li>
                    <li class="nav-item animate__animated animate__fadeInDown">
                        <a class="nav-link" href="contact.php"><i class="fas fa-envelope me-1"></i> Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h1 class="animate__animated animate__fadeInDown animate__delay-1s">Book With Confidence</h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1-5s">Our advanced booking system makes scheduling easy</p>
                </div>

            </div>
        </div>
        <div class="scroll-down animate__animated animate__bounce animate__infinite animate__delay-3s">
            <a href="#player-profile"><i class="fas fa-chevron-down"></i></a>
        </div>
    </header>

    <!-- Navigation Dots (hidden on mobile) -->
    <div class="nav-dots d-none d-lg-block">
        <div class="dot active" data-section="player-profile"></div>
        <div class="dot" data-section="tournament"></div>
        <div class="dot" data-section="academy"></div>
    </div>

    <!-- Section 1: Player Profile -->
    <section id="player-profile" class="section player-profile">
        <div class="container">
            <div class="image-section"></div>



            <div class="content-section">
                <h1 class="animate__animated animate__fadeIn">why are you choosing our badminton court</h1>

                <div class="programs">
                    <p>• 5 Layer green badminton mat.</p>
                    <p>• Special Interlocking plastic PP flooring tile.</p>
                    <p>• Badminton World Federation approved green sand finish mat.</p>
                    <p>• "Apacs" one of the best sporting brands in the world.</p>
                    <p>• Parking Space available and Flexible timing sessions.</p>
                </div>

            </div>
        </div>
    </section>



    <!-- Section 3: Academy -->
    <section id="academy" class="section academy">
        <div class="container">
            <div class="image-section">

            </div>

            <div class="content-section">
                <h1 class="animate__animated animate__fadeIn">ALEXANDRA RUD</h1>
                <p class="subtitle animate__animated animate__fadeIn animate__delay-1s">
                    <span class="highlight">Ranked #1</span> with lightning-fast reflexes and precision smashes that dominate the court. My tournament victories showcase agility, strategy, and mental toughness to outplay any opponent.
                </p>
                <!-- <a href="table.php"><button class="btn animate__animated animate__fadeInUp animate__delay-2s">Book now</button> -->
                </a>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
        <div class="container">
            <h2 class="text-center mb-5">Available Courts</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 animate__animated animate__backInLeft">
                <div class="col">
                    <div class="card h-100">
                        <img src="WhatsApp Image 2025-04-05 at 16.55.50_d4115208.jpg" class="card-img-top" alt="Badminton Court">
                        <div class="card-body">
                            <h5 class="card-title">J.J indoor Badminton Court</h5>
                            <p class="card-text">Professional-grade badminton court with premium flooring and lighting for optimal play.</p>

                            <a href="table.php" class="btn btn-primary">Book now</a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- <section class="about-section">
        <div class="decoration"></div>
        <div class="decoration"></div>

        <div class="container">
            <div class="profile-card">
                <div class="profile-inner">
                    <img src="profile-image.jpg" alt="Profile Photo" class="profile-img">
                </div>
            </div>

            <div class="about-content">
                <h1>About Us</h1>
                <p>DeepMyth Bookings is a premier badminton court reservation system designed to make booking courts and lessons effortless. Our platform connects players with top-quality facilities across the country.</p>
                <p>With years of experience in the sports industry, we understand the needs of both casual players and competitive athletes. Our mission is to make badminton more accessible to everyone.</p>
                <p>Whether you're looking for a casual game with friends or professional coaching to take your skills to the next level, DeepMyth Bookings has you covered.</p>

                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
                    <h5 class="text-uppercase mb-4">DeepMyth Bookings</h5>
                    <p>Advanced booking solutions crafted with precision and care.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="home.php" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="fixed.php" class="text-white">Fixed Booking</a></li>
                        <li class="mb-2"><a href="cancelBooking.php" class="text-white">cancel Booking</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 animate__animated animate__fadeInUp animate__delay-1-5s">
                    <h5 class="text-uppercase mb-4">Contact Us</h5>
                    <ul class="list-unstyled">

                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +94743488013</li>
                        <!-- <li class="mb-2"><i class="fas fa-envelope me-2"></i> deepmyth20042002.com</li> -->
                    </ul>
                </div>

            </div>
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start animate__animated animate__fadeIn">
                    <p class="mb-0">&copy; 2025 DeepMyth. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end animate__animated animate__fadeIn">
                    <p class="mb-0">Designed with <i class="fas fa-heart text-danger"></i> by DeepMyth Team</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="homedesign.js"></script>


    </script>
</body>

</html>