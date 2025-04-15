<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link rel="icon" href="17898105.jpg" />
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation Bar */
        .navbar {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 0;
            position: relative;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Booking Form Container */
        .container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            color: #128C7E;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #666;
        }

        /* Form Styles */
        .booking-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #25D366;
            box-shadow: 0 0 0 3px rgba(37, 211, 102, 0.2);
        }

        .submit-btn {
            background: linear-gradient(135deg, #25D366, #128C7E);
            color: white;
            border: none;
            padding: 14px 20px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            grid-column: span 2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 211, 102, 0.3);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .booking-form {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: span 1;
            }

            .submit-btn {
                grid-column: span 1;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: #128C7E;
                flex-direction: column;
                align-items: center;
                padding: 1rem 0;
                clip-path: circle(0px at 90% -10%);
                transition: all 0.5s ease-out;
                pointer-events: none;
            }

            .nav-links.active {
                clip-path: circle(1000px at 90% -10%);
                pointer-events: all;
            }

            .nav-links li {
                margin: 1rem 0;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container {
            animation: fadeIn 0.5s ease-out;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="logo">
            <i class="fab fa-whatsapp"></i>
            <span>Booking System</span>
        </div>
        <div class="menu-toggle" id="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="home.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="fixed.php"><i class="fas fa-calendar-alt"></i>Fixed Bookings</a></li>
            <li><a href="cancelBooking.php"><i class="fas fa-info-circle"></i> Cancel Booking</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact</a></li>
        </ul>
    </nav>

    <!-- Booking Form -->
    <div class="container">
        <div class="form-header">
            <h1><i class="fas fa-calendar-check"></i> Cancel Booking</h1>
            <p>Fill out the form below and we'll contact you on WhatsApp to cancel your booking</p>
        </div>

        <form class="booking-form" id="bookingForm">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your WhatsApp number" required>
            </div>

            <div class="form-group">
                <label for="bookingCode">Booking Code(Enter your last 6 number's)</label>
                <input type="text" id="bookingCode" name="bookingCode" placeholder="Enter booking code" required>
            </div>

            <div class="form-group">
                <label for="date">Booking Date</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="startTime">Start Time</label>
                <input type="time" id="startTime" name="startTime" required>
            </div>

            <div class="form-group">
                <label for="bookingHours">Booking Hours</label>
                <select id="bookingHours" name="bookingHours" required>
                    <option value="" disabled selected>Select hours</option>
                    <option value="1">1 Hour</option>
                    <option value="2">2 Hours</option>
                    <option value="3">3 Hours</option>
                    <option value="4">4 Hours</option>
                    <option value="5">5+ Hours</option>
                </select>
            </div>

            <div class="form-group full-width">
                <label for="notes">Additional Notes</label>
                <input type="text" id="notes" name="notes" placeholder="Any special requests or notes">
            </div>

            <button type="submit" class="submit-btn">
                <i class="fab fa-whatsapp"></i> Send via WhatsApp
            </button>
        </form>
    </div>

    <script>
        // Mobile Menu Toggle
        const mobileMenu = document.getElementById('mobile-menu');
        const navLinks = document.getElementById('nav-links');

        mobileMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Form Submission
        const bookingForm = document.getElementById('bookingForm');

        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const bookingCode = document.getElementById('bookingCode').value;
            const date = document.getElementById('date').value;
            const startTime = document.getElementById('startTime').value;
            const bookingHours = document.getElementById('bookingHours').value;
            const notes = document.getElementById('notes').value;
            
            // Format date for display
            const formattedDate = new Date(date).toLocaleDateString('en-US', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            
            // Format time for display
            const formattedTime = new Date(`2000-01-01T${startTime}`).toLocaleTimeString('en-US', {
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            });
            
            // Create WhatsApp message
            const message = `*Cancel Booking*%0A%0A` +
                            `*Name:* ${name}%0A` +
                            `*Phone:* ${phone}%0A` +
                            `*Booking Code:* ${bookingCode}%0A` +
                            `*Date:* ${formattedDate}%0A` +
                            `*Start Time:* ${formattedTime}%0A` +
                            `*Duration:* ${bookingHours} hour${bookingHours > 1 ? 's' : ''}%0A` +
                            `*Notes:* ${notes || 'None'}`;

            const yourWhatsAppNumber = "94758545838";
            
            // Open WhatsApp with pre-filled message
            window.open(`https://wa.me/${yourWhatsAppNumber}?text=${message}`, '_blank');
            
            // Reset form
            bookingForm.reset();
        });

        // Set minimum date to today
        document.getElementById('date').min = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>