<?php

require("dbh.inc.php");

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['userEmail'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if($password != $confirmPassword) {
    header("Location: /signup?passwords_dont_match");
}

$stmt = $conn -> prepare("INSERT INTO users (username, password, firstName, lastName, email) VALUES (?, ?, ?, ?, ?)");
$stmt -> bind_param("sssss", $email, $password, $firstName, $lastName, $email);
if($stmt -> execute()) {
    header("Location: /login?signup_success");
}
