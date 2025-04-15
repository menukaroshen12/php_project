<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Court Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="17898105.jpg" />
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c7be5;
            --secondary-color: #00a651;
            --light-color: #f2f9f5;
            --dark-color: #1a3e72;
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            padding-top: 56px; /* To account for fixed navbar */
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 1rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--dark-color);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            color: var(--secondary-color);
            margin-right: 10px;
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            color: var(--dark-color);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin: 0 2px;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
            background-color: rgba(44, 123, 229, 0.1);
        }
        
        .hero-header {
            position: relative;
            height: 300px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                        url('badminton-court-without-people-night-600nw-2307374507.webp');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 2rem;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .hero-content {
            z-index: 2;
            padding: 0 20px;
        }
        
        .hero-content h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hero-content p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }
        
        .court-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 1.5rem;
            background-color: white;
        }
        
        .court-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .card-header {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .badminton-icon {
            font-size: 1.5rem;
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.3rem;
            display: flex;
            align-items: center;
        }
        
        .info-value {
            margin-bottom: 1rem;
            color: #555;
            padding-left: 28px; /* Align with icons */
        }
        
        .status-badge {
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
        }
        
        .status-available {
            background-color: #e6f7ee;
            color: var(--secondary-color);
        }
        
        .status-booked {
            background-color: #fde8e8;
            color: #dc3545;
        }
        
        .status-maintenance {
            background-color: #fff4e5;
            color: #fd7e14;
        }
        
        .action-btn {
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .book-btn {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .book-btn:hover {
            background-color: #008a45;
            color: white;
        }
        
        .direction-btn {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        
        .direction-btn:hover {
            background-color: var(--light-color);
        }
        
        .court-features {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        
        .feature-badge {
            background-color: var(--light-color);
            color: var(--dark-color);
            padding: 0.35rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
        }
        
        .search-container {
            background-color: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .search-btn {
            background-color: var(--primary-color);
            color: white;
        }
        
        .filter-btn {
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
        }
        
        .filter-btn.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-header {
                height: 250px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .card-body {
                padding: 1rem;
            }
            
            .navbar-brand span {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-table-tennis"></i>
                <span>Badminton Court Management</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home.php"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fixed.php"><i class="fas fa-search me-1"></i>Fixed Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cancelBooking.php"><i class="fas fa-calendar-check me-1"></i> cancel Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="fas fa-user me-1"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fas fa-sign-out-alt me-1"></i> Back to Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Header with Image -->
    <div class="hero-header">
        <div class="hero-content">
            <h1><i class="fas fa-table-tennis me-2"></i> Badminton Court Management</h1>
            <p>Find and book premium badminton courts in your area. Enjoy professional facilities at competitive rates.</p>
        </div>
    </div>

    <div class="container">
        <div class="search-container">
            <div class="row">
                <div class="col-md-8 mb-3 mb-md-0">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control" placeholder="Search by court name, location...">
                        <button class="btn search-btn" type="button">Search</button>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="d-flex justify-content-end">
                        <a href="home.php"><button class="btn btn-primary" id="">
                            <i class="fas fa-home me-1"></i> Go Back to Home
                        </button></a>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="row">
            <!-- Court Card 1 -->
            <div class="col-lg-6">
                <div class="court-card card">
                    <div class="card-header">
                        <span><i class="fas fa-table-tennis badminton-icon"></i> JJ Indoor Badminton court</span>
                        <!-- <span class="status-badge status-available"><i class="fas fa-check-circle me-1"></i> Available</span> -->
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-label"><i class="fas fa-phone me-2"></i>Contact</div>
                                <div class="info-value">0766594620-Sara
                                    <br>0773292672-Jayavi
                                </div>
                                
                                <div class="info-label"><i class="fas fa-map-marker-alt me-2"></i>Location</div>
                                <div class="info-value">No 331,Egoda uyana,Modara road,Moratuwa.</div>
                                
                                <div class="info-label"><i class="fas fa-money-bill-wave me-2"></i>fee</div>
                                <div class="info-value">LKR.500.00/ 1hour</div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-label"><i class="fas fa-clock me-2"></i>Open time</div>
                                <div class="info-value">07:00 AM - 10:00 PM</div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between mt-3">
                            <button class="action-btn book-btn"><i class="fas fa-calendar-check me-1"></i><a href="table.php" style="color: white; text-decoration: none;">Book now</a></button>
                            <button class="action-btn direction-btn"><i class="fas fa-directions me-1"></i><a href="https://maps.app.goo.gl/WVDnawQaiPTtfG1o6" style="color: var(--primary-color); text-decoration: none;">Location</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple filter functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                // Here you would add actual filtering logic
            });
        });
        
        // Add shadow to navbar when scrolling
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 10) {
                navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>