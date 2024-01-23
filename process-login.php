<?php
require_once 'config.php' ;

$username = $_POST['username'] ;
$password = $_POST['password'] ;

$sql = "SELECT * FROM users WHERE username = ?" ;
$stmt = $conn->prepare($sql) ;
$stmt->bind_param("s", $username) ;
$stmt->execute() ;
$result = $stmt->get_result() ;

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc() ;
    if (password_verify($password, $row['password'])) {
        session_start() ;
        $_SESSION['username'] = $row['username'] ;
        header('Location: dashboard.php') ;
    } else {
        echo "<script>alert('Incorrect password'); window.location.href = 'index.php';</script>" ;
    }
} else {
    echo "<script>alert('User not found'); window.location.href = 'index.php';</script>" ;
}

$conn->close() ;
?>