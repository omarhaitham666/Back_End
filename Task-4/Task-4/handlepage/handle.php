<?php
session_start(); 

// Receive data
$mail = $_POST['mail'];
$pass = $_POST['pass'];

// Clean data
function cleanData($input) {
    return htmlspecialchars(stripslashes(trim($input)));
}

$mail = cleanData($mail);
$pass = cleanData($pass);

// Validate data
$errors = [];

if (empty($mail)) {
    $errors['email'] = "Email is required";
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Email is not valid";
}

if (empty($pass)) {
    $errors['password'] = "Password is required";
} elseif (strlen($pass) < 8) {
    $errors['password'] = "Password must be at least 8 characters";
}

// Handle errors or redirect
if (count($errors) > 0) {
    session_start();
    $_SESSION['errors'] = $errors;
    header("Location: ../login.php");
    exit(); 
} else {
   session_start();
    $_SESSION['userEmail'] = $mail; 
    return header("Location: ../profile.php"); 
}
?>
