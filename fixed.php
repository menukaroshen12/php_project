<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badminton Court Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="17898105.jpg" />
    <link rel="stylesheet" href="css/fixed.css">
    <style>

    </style>
</head>
<body>
    
    <!-- Header Section -->
    <header>
        <div class="header-bg"></div>
        <div class="header-content">
            <div class="logo">
                <i class="fas fa-table-tennis"></i>
                <span>DeepMyth Booking</span>
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="fixed.php">fixed booking</a></li>
                    <li><a href="cancelBooking.php">cancel booking</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <h1>Book a Badminton Court</h1>
        <form id="bookingForm">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            
            <div class="form-group">
                <label>Select Court:</label>
                <div class="court-options">
                    <div class="court-option" data-court="court1">
                        <i class="fas fa-table-tennis"></i>
                        <h3>Court 1</h3>
                        <p>Standard</p>
                    </div>
                    <div class="court-option" data-court="court2">
                        <i class="fas fa-table-tennis"></i>
                        <h3>Court 2</h3>
                        <p>VIP</p>
                    </div>
                </div>
                <input type="hidden" id="selectedCourt" name="court">
            </div>
            
            <div class="form-group">
                <label>Select Day:</label>
                <div class="day-options">
                    <div class="day-option" data-day="Sunday">Sun</div>
                    <div class="day-option" data-day="Monday">Mon</div>
                    <div class="day-option" data-day="Tuesday">Tue</div>
                    <div class="day-option" data-day="Wednesday">Wed</div>
                    <div class="day-option" data-day="Thursday">Thu</div>
                    <div class="day-option" data-day="Friday">Fri</div>
                    <div class="day-option" data-day="Saturday">Sat</div>
                </div>
                <input type="hidden" id="selectedDay" name="day">
            </div>
            
            <div class="form-group">
                <label>Select Time:</label>
                <div class="time-selection">
                    <div class="time-input">
                        <label for="start-time">Start Time:</label>
                        <input type="time" id="start-time" name="start_time" min="08:00" max="22:00" required>
                    </div>
                    <div class="time-input">
                        <label for="end-time">End Time:</label>
                        <input type="time" id="end-time" name="end_time" min="08:00" max="22:00" required>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label for="notes">Special Requests:</label>
                <textarea id="notes" name="notes" rows="4"></textarea>
            </div>
            
            <button type="submit">
                <i class="fab fa-whatsapp"></i> Confirm Booking via WhatsApp
            </button>
        </form>
    </main>

    
<script src="js/fixed.js"></script>
</body>
</html>