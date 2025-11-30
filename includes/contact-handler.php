<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 0);

header('Content-Type: application/json');

// Initialize response
$response = [
    'success' => false,
    'message' => ''
];

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    $response['message'] = 'Method not allowed';
    echo json_encode($response);
    exit;
}

// Get and sanitize form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Server-side validation
$errors = [];

if (empty($name)) {
    $errors['name'] = 'Name is required';
} elseif (strlen($name) < 2) {
    $errors['name'] = 'Name must be at least 2 characters';
} elseif (strlen($name) > 100) {
    $errors['name'] = 'Name must not exceed 100 characters';
}

if (empty($email)) {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (empty($message)) {
    $errors['message'] = 'Message is required';
} elseif (strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters';
} elseif (strlen($message) > 5000) {
    $errors['message'] = 'Message must not exceed 5000 characters';
}

// If there are validation errors
if (!empty($errors)) {
    http_response_code(400);
    $response['message'] = 'Validation failed';
    $response['errors'] = $errors;
    echo json_encode($response);
    exit;
}

// Sanitize data for storage/display
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Here you could:
// 1. Store data in a database
// 2. Send an email notification
// 3. Log the submission

// For this demo, we'll simulate a successful submission
// In a real application, you would store this data or send emails

// Example: Log to file (optional)
$log_file = dirname(__DIR__) . '/logs/submissions.log';
$log_dir = dirname(__DIR__) . '/logs';

if (!is_dir($log_dir)) {
    mkdir($log_dir, 0755, true);
}

$log_entry = date('Y-m-d H:i:s') . " | Name: $name | Email: $email | Message: " . substr($message, 0, 50) . "...\n";
file_put_contents($log_file, $log_entry, FILE_APPEND);

// Return success response
http_response_code(200);
$response['success'] = true;
$response['message'] = 'Thank you for your message! We will contact you soon.';

echo json_encode($response);
exit;
