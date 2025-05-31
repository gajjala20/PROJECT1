<?php
session_start();
if ($_SESSION['role'] !== 'doctor') { header("Location: login.html"); exit(); }

$conn = new mysqli('localhost', 'root', '', 'hospital_db');
$username = $_SESSION['username'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>
<h2>Doctor Profile</h2>
<p><strong>Full Name:</strong> <?= $user['fullname'] ?></p>
<p><strong>Email:</strong> <?= $user['email'] ?></p>
<p><strong>Specialization:</strong> <?= $user['specialization'] ?? 'N/A' ?></p>
<p><strong>Contact:</strong> <?= $user['contact'] ?></p>
<a href="dashboard.php">Back</a>
