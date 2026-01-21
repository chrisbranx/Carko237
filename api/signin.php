<?php
session_start();
header("Content-Type: application/json");
require_once "../db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "error", "message" => "No data received"]);
    exit;
}

$email = trim($data['email'] ?? '');
$password = $data['password'] ?? '';

if (!$email || !$password) {
    echo json_encode(["status" => "error", "message" => "Email and password required"]);
    exit;
}

/* Fetch user */
$stmt = $conn->prepare("
    SELECT id, first_name, last_name, password 
    FROM users 
    WHERE email = ?
");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(["status" => "error", "message" => "Invalid email or password"]);
    exit;
}

$user = $result->fetch_assoc();

/* Verify password */
if (!password_verify($password, $user['password'])) {
    echo json_encode(["status" => "error", "message" => "Invalid email or password"]);
    exit;
}

/* Save session */
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['first_name'];

echo json_encode([
    "status" => "success",
    "message" => "Login successful"
]);
