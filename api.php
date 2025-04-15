<?php
header("Content-Type: application/json");
require_once 'db_connect.php';

$action = $_GET['action'] ?? '';

try {
    switch ($action) {
        case 'get_bookings':
            getBookings();
            break;
        case 'get_booking':
            getBooking();
            break;
        case 'create_booking':
            createBooking();
            break;
        case 'update_booking':
            updateBooking();
            break;
        case 'delete_booking':
            deleteBooking();
            break;
        default:
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
            break;
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

function getBookings() {
    global $pdo;
    
    $stmt = $pdo->query("SELECT * FROM booking_schedule ORDER BY date DESC, start_time DESC");
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode(['success' => true, 'bookings' => $bookings]);
}

function getBooking() {
    global $pdo;
    
    $id = $_GET['id'] ?? 0;
    $stmt = $pdo->prepare("SELECT * FROM booking_schedule WHERE id = ?");
    $stmt->execute([$id]);
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($booking) {
        echo json_encode(['success' => true, 'booking' => $booking]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Booking not found']);
    }
}

function createBooking() {
    global $pdo;
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validate required fields
    $required = ['date', 'start_time', 'end_time', 'name', 'mobile', 'status'];
    foreach ($required as $field) {
        if (empty($data[$field])) {
            echo json_encode(['success' => false, 'message' => "{$field} is required"]);
            return;
        }
    }
    
    // Generate booking code
    $bookingCode = 'BK-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6));
    
    $stmt = $pdo->prepare("
        INSERT INTO booking_schedule 
        (date, start_time, end_time, name, mobile, booking_code, status) 
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");
    
    $success = $stmt->execute([
        $data['date'],
        $data['start_time'],
        $data['end_time'],
        $data['name'],
        $data['mobile'],
        $bookingCode,
        $data['status']
    ]);
    
    if ($success) {
        echo json_encode([
            'success' => true, 
            'message' => 'Booking created successfully',
            'booking_code' => $bookingCode
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to create booking']);
    }
}
function updateBooking() {
    global $pdo;
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    // Validate required fields
    $required = ['id', 'date', 'start_time', 'end_time', 'name', 'mobile', 'status'];
    foreach ($required as $field) {
        if (empty($data[$field])) {
            echo json_encode(['success' => false, 'message' => "{$field} is required"]);
            return;
        }
    }
    
    $stmt = $pdo->prepare("
        UPDATE booking_schedule 
        SET date = ?, start_time = ?, end_time = ?, name = ?, mobile = ?, status = ?, updated_at = CURRENT_TIMESTAMP 
        WHERE id = ?
    ");
    
    $success = $stmt->execute([
        $data['date'],
        $data['start_time'],
        $data['end_time'],
        $data['name'],
        $data['mobile'],
        $data['status'],
        $data['id']
    ]);
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Booking updated successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to update booking']);
    }
}

function deleteBooking() {
    global $pdo;
    
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (empty($data['id'])) {
        echo json_encode(['success' => false, 'message' => 'Booking ID is required']);
        return;
    }
    
    $stmt = $pdo->prepare("DELETE FROM booking_schedule WHERE id = ?");
    $success = $stmt->execute([$data['id']]);
    
    if ($success) {
        echo json_encode(['success' => true, 'message' => 'Booking deleted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to delete booking']);
    }
}



?>