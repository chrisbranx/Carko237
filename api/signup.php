<?php
header("Content-Type: application/json");
require_once "../db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["status" => "error", "message" => "No data received"]);
    exit;
}

$firstName = trim($data['firstName'] ?? '');
$lastName  = trim($data['lastName'] ?? '');
$email     = trim($data['email'] ?? '');
$phone     = trim($data['phone'] ?? '');
$city      = trim($data['city'] ?? '');
$gender    = trim($data['gender'] ?? '');
$password  = $data['password'] ?? '';

if (!$firstName || !$lastName || !$email || !$password) {
    echo json_encode(["status" => "error", "message" => "Missing required fields"]);
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo json_encode(["status" => "error", "message" => "Email already exists"]);
    exit;
}

$stmt = $conn->prepare("
    INSERT INTO users (first_name, last_name, email, phone, city, gender, password)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "sssssss",
    $firstName,
    $lastName,
    $email,
    $phone,
    $city,
    $gender,
    $hashedPassword
);

$stmt->execute();

echo json_encode(["status" => "success", "message" => "Account created"]);
