<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - DeepMyth Bookings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" href="17898105.jpg" />
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --light-color: #ecf0f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 2.5rem;
            color: var(--primary-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .feature-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }
        
    </style>
</head>
<body>


    <!-- Hero Section -->
    <section class="hero-section animate__animated animate__fadeIn">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Our Story</h1>
            <p class="lead">Discover the team behind DeepMyth Bookings and our commitment to excellence</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 animate__animated animate__fadeInLeft">
                    <h2 class="section-title">Who We Are</h2>
                    <p class="lead">DeepMyth Bookings was founded with a simple mission: to revolutionize the booking experience.</p>
                    <p>Our team of industry experts combines cutting-edge technology with unparalleled customer service to deliver a seamless scheduling platform that saves you time and hassle.</p>
                    <p>Since our launch, we've helped thousands of clients streamline their booking processes, earning recognition as one of the most innovative solutions in the industry.</p>
                </div>
                <div class="col-lg-6 animate__animated animate__fadeInRight">
                    <img src="IMG_7989.png" alt="Our Team" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title animate__animated animate__fadeIn">Why Choose Us</h2>
            <p class="text-center mb-5 animate__animated animate__fadeIn">We're committed to providing the best booking experience</p>
            
            <div class="row g-4">
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-card card h-100 p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h3>Fast & Easy</h3>
                        <p>Our intuitive platform makes scheduling appointments effortless, saving you valuable time.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-card card h-100 p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Reliable</h3>
                        <p>Trusted by thousands, our system ensures your bookings are secure and confirmed.</p>
                    </div>
                </div>
                <div class="col-md-4 animate__animated animate__fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-card card h-100 p-4 text-center">
                        <div class="feature-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h3>24/7 Support</h3>
                        <p>Our dedicated support team is always available to assist you with any questions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center section-title animate__animated animate__fadeIn">Meet Our Team</h2>
            <p class="text-center mb-5 animate__animated animate__fadeIn">The passionate professionals behind DeepMyth</p>
            
            <div class="row g-">
                <div class="col-md-6 animate__animated animate__fadeInUp">
                    <div class="card text-center h-100 border-0 shadow-sm">
                        <img src="WhatsApp Image 2025-04-01 at 22.54.08_b1c99622.jpg" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Dileni Wijekoon</h5>
                            <p class="text-muted">Undergraduate software engineer</p>
                            <!-- <p class="card-text">With 15 years in the industry, Sarah envisioned a better way to handle bookings.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate__animated animate__fadeInUp" data-wow-delay="0.1s">
                    <div class="card text-center h-100 border-0 shadow-sm">
                        <img src="WhatsApp Image 2025-04-02 at 10.35.55_0270062f.jpg" class="card-img-top" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">Rajendran Menuka</h5>
                            <p class="text-muted">Undergraduate software engineer</p>
                            <!-- <p class="card-text">Technology innovator who built our advanced booking platform.</p> -->
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center animate__animated animate__zoomIn">
            <h2 class="mb-4">Ready to experience effortless booking?</h2>
            <a href="home.php" class="btn btn-light btn-lg px-4">Book With Confidence</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>DeepMyth Bookings</h5>
                    <p>Advanced booking system that makes scheduling easy and reliable.</p>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.php" class="text-white">Home</a></li>
                        <li><a href="about.php" class="text-white">About</a></li>
                        
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Contact</h5>
                    <ul class="list-unstyled">
                        <li>+94758545838</li>
                        <li>+94743488013</li>
                       
                        <li>deepmyth20042002.com</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <hr class="mt-4 mb-3" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 DeepMyth Bookings. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        <a href="#" class="text-white">Privacy Policy</a> | 
                        <a href="#" class="text-white">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- WOW.js (for more animations) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>