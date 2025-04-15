<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Booking System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="17898105.jpg" />
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4895ef;
            --danger-color: #f72585;
            --success-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: var(--dark-color);
            line-height: 1.6;
        }

        .hero-header {
            position: relative;
            height: 250px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('badminton-court-without-people-night-600nw-2307374507.webp');
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 30px;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            position: relative;
            top: -50px;
            margin-bottom: -50px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 20px;
        }

        h1 {
            color: var(--primary-color);
            font-weight: 600;
        }

        .search-add-container {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .search-box {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            min-width: 250px;
            font-size: 14px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: var(--danger-color);
            color: white;
        }

        .btn-danger:hover {
            opacity: 0.9;
        }

        .btn-success {
            background-color: var(--success-color);
            color: white;
        }

        .timetable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
        }

        .timetable thead {
            background-color: var(--primary-color);
            color: white;
        }

        .timetable th {
            padding: 15px;
            text-align: left;
            font-weight: 500;
        }

        .timetable td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .timetable tr:not(:first-child):hover {
            background-color: rgba(67, 97, 238, 0.05);
        }

        .timetable tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-confirmed {
            background-color: #d1fae5;
            color: #065f46;
        }

        .status-pending {
            background-color: #fef3c7;
            color: #92400e;
        }

        .status-cancelled {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .time-slot {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .time-separator {
            color: #777;
        }

        .mobile-number {
            direction: ltr;
            display: inline-block;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: var(--border-radius);
            width: 100%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #777;
        }

        .close-btn:hover {
            color: var(--danger-color);
        }

        .form-title {
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 14px;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 30px;
        }

        .action-btns {
            display: flex;
            gap: 5px;
        }

        .action-btn {
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .edit-btn {
            background-color: #4895ef;
            color: white;
        }

        .delete-btn {
            background-color: #f72585;
            color: white;
        }

        @media screen and (max-width: 768px) {
            .hero-header {
                height: 200px;
            }

            .hero-content h1 {
                font-size: 2rem;
            }

            .container {
                padding: 15px;
                top: -30px;
                margin-bottom: -30px;
            }

            .timetable {
                display: block;
                overflow-x: auto;
            }

            .header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-add-container {
                width: 100%;
            }

            .search-box {
                flex-grow: 1;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .modal-content {
                margin: 20px;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Header with Image -->
    <div class="hero-header">
        <div class="hero-content">
            <h1 style="color: #ddd;"><i class="fas fa-calendar-alt"></i> Admin Panel</h1>
            <p>Manage all your court Appoinment</p>
        </div>
    </div>

    <div class="container">
        <div class="header">
            <h1>Booking Schedule</h1>
            <div class="search-add-container">
                <input type="text" class="search-box" id="searchInput" placeholder="Search bookings...">
                <button class="btn btn-primary" id="openModalBtn">
                    <i class="fas fa-plus"></i> New Booking
                </button>
                <a href="home.php"><button class="btn btn-primary" id="">
                        <i class="fas fa-home"></i> Go Back to Home
                    </button></a>
            </div>
        </div>

        <table class="timetable">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time Slot</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Booking Code</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="bookingTableBody">
                <!-- Bookings will be loaded here via JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Booking Form Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <span class="close-btn" id="closeModalBtn">&times;</span>
            <h2 class="form-title" id="modalTitle">New Booking</h2>

            <form id="bookingForm">
                <input type="hidden" id="bookingId">
                <div class="form-row">
                    <div class="form-group">
                        <label for="bookingDate">Date</label>
                        <input type="date" id="bookingDate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="bookingStatus">Status</label>
                        <select id="bookingStatus" class="form-control" required>
                            <option value="confirmed">Confirmed</option>
                            <option value="pending">Pending</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="startTime">Start Time</label>
                        <input type="time" id="startTime" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="endTime">End Time</label>
                        <input type="time" id="endTime" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="customerName">Full Name</label>
                    <input type="text" id="customerName" class="form-control" placeholder="Enter customer name" required>
                </div>

                <div class="form-group">
                    <label for="customerMobile">Mobile Number</label>
                    <input type="tel" id="customerMobile" class="form-control" placeholder="Enter mobile number" required>
                </div>

                <div class="form-footer">
                    <button type="button" class="btn btn-danger" id="cancelBookingBtn">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="submitBookingBtn">Create Booking</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal" id="confirmModal">
        <div class="modal-content" style="max-width: 400px;">
            <h2 class="form-title">Confirm Delete</h2>
            <p>Are you sure you want to delete this booking?</p>
            <div class="form-footer">
                <button type="button" class="btn btn-primary" id="cancelDeleteBtn">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Global variables
        let currentBookingId = null;
        
        // DOM Elements
        const modal = document.getElementById('bookingModal');
        const confirmModal = document.getElementById('confirmModal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const cancelBookingBtn = document.getElementById('cancelBookingBtn');
        const bookingForm = document.getElementById('bookingForm');
        const bookingTableBody = document.getElementById('bookingTableBody');
        const searchInput = document.getElementById('searchInput');
        const cancelDeleteBtn = document.getElementById('cancelDeleteBtn');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        const submitBookingBtn = document.getElementById('submitBookingBtn');
        const modalTitle = document.getElementById('modalTitle');

        // Event Listeners
        openModalBtn.addEventListener('click', openBookingModal);
        closeModalBtn.addEventListener('click', closeBookingModal);
        cancelBookingBtn.addEventListener('click', closeBookingModal);
        bookingForm.addEventListener('submit', handleFormSubmit);
        searchInput.addEventListener('input', filterBookings);
        cancelDeleteBtn.addEventListener('click', closeConfirmModal);
        confirmDeleteBtn.addEventListener('click', confirmDelete);

        // Initialize the page
        document.addEventListener('DOMContentLoaded', () => {
            loadBookings();
        });

        // Functions
        function openBookingModal() {
            currentBookingId = null;
            bookingForm.reset();
            modalTitle.textContent = 'New Booking';
            submitBookingBtn.textContent = 'Create Booking';
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeBookingModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function openConfirmModal(bookingId) {
            currentBookingId = bookingId;
            confirmModal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeConfirmModal() {
            confirmModal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function loadBookings() {
            fetch('api.php?action=get_bookings')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        renderBookings(data.bookings);
                    } else {
                        showAlert('Error', data.message, 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert('Error', 'Failed to load bookings', 'error');
                });
        }

        function renderBookings(bookings) {
            bookingTableBody.innerHTML = '';
            
            if (bookings.length === 0) {
                const row = document.createElement('tr');
                row.innerHTML = `<td colspan="7" class="text-center py-4">No bookings found</td>`;
                bookingTableBody.appendChild(row);
                return;
            }
            
            bookings.forEach(booking => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${formatDate(booking.date)}</td>
                    <td class="time-slot">
                        <span>${booking.start_time}</span>
                        <span class="time-separator">-</span>
                        <span>${booking.end_time}</span>
                    </td>
                    <td>${booking.name}</td>
                    <td class="mobile-number">${booking.mobile}</td>
                    <td>${booking.booking_code}</td>
                    <td><span class="status-badge status-${booking.status}">${capitalizeFirstLetter(booking.status)}</span></td>
                    <td>
                        <div class="action-btns">
                            <button class="action-btn edit-btn" onclick="editBooking(${booking.id})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="action-btn delete-btn" onclick="openConfirmModal(${booking.id})">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </td>
                `;
                bookingTableBody.appendChild(row);
            });
        }

        function filterBookings() {
            const searchTerm = searchInput.value.toLowerCase();
            const rows = bookingTableBody.querySelectorAll('tr');
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        }

        function handleFormSubmit(e) {
            e.preventDefault();
            
            const formData = {
                date: document.getElementById('bookingDate').value,
                start_time: document.getElementById('startTime').value,
                end_time: document.getElementById('endTime').value,
                name: document.getElementById('customerName').value,
                mobile: document.getElementById('customerMobile').value,
                status: document.getElementById('bookingStatus').value
            };
            
            if (currentBookingId) {
                formData.id = currentBookingId;
                updateBooking(formData);
            } else {
                createBooking(formData);
            }
        }

        function createBooking(bookingData) {
            fetch('api.php?action=create_booking', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(bookingData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('Success', 'Booking created successfully', 'success');
                    closeBookingModal();
                    loadBookings();
                } else {
                    showAlert('Error', data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('Error', 'Failed to create booking', 'error');
            });
        }

        function updateBooking(bookingData) {
            fetch('api.php?action=update_booking', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(bookingData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('Success', 'Booking updated successfully', 'success');
                    closeBookingModal();
                    loadBookings();
                } else {
                    showAlert('Error', data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('Error', 'Failed to update booking', 'error');
            });
        }

        function editBooking(bookingId) {
            fetch(`api.php?action=get_booking&id=${bookingId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        currentBookingId = bookingId;
                        const booking = data.booking;
                        
                        document.getElementById('bookingId').value = booking.id;
                        document.getElementById('bookingDate').value = booking.date;
                        document.getElementById('startTime').value = booking.start_time;
                        document.getElementById('endTime').value = booking.end_time;
                        document.getElementById('customerName').value = booking.name;
                        document.getElementById('customerMobile').value = booking.mobile;
                        document.getElementById('bookingStatus').value = booking.status;
                        
                        modalTitle.textContent = 'Edit Booking';
                        submitBookingBtn.textContent = 'Update Booking';
                        modal.style.display = 'flex';
                        document.body.style.overflow = 'hidden';
                    } else {
                        showAlert('Error', data.message, 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showAlert('Error', 'Failed to load booking details', 'error');
                });
        }

        function confirmDelete() {
            fetch('api.php?action=delete_booking', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ id: currentBookingId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showAlert('Success', 'Booking deleted successfully', 'success');
                    closeConfirmModal();
                    loadBookings();
                } else {
                    showAlert('Error', data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert('Error', 'Failed to delete booking', 'error');
            });
        }

        function showAlert(title, text, icon) {
            Swal.fire({
                title: title,
                text: text,
                icon: icon,
                confirmButtonColor: '#4361ee'
            });
        }

        function formatDate(dateString) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            return new Date(dateString).toLocaleDateString('en-US', options);
        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>
</body>

</html>