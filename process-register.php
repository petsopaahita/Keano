<?php
require_once 'config.php';

$regUsername = $_POST['regUsername'];
$regPassword = $_POST['regPassword'];
$confirmPassword = $_POST['confirmPassword'];

if ($regPassword === $confirmPassword) {
    $hashedPassword = password_hash($regPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $regUsername, $hashedPassword);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href = 'index.php';</script>" ;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "<script>alert('Passwords do not match'); window.location.href = 'index.php';</script>" ;
}

$conn->close();
?>