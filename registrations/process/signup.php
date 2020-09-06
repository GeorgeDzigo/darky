<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
      session_start();
      // Users info
$firstname = $_POST['signupfirstname'];
$lastname = $_POST['signuplastname'];
$email = $_POST['signupemail'];
$username = $_POST['signupusername'];
$password = $_POST['signuppassword'];


// Connection to DB

$conn = new mysqli("localhost", "root", "gabogio210", "portfolio");
$sql = "INSERT INTO users (first_name, last_name, email, username, user_password)
VALUES ('$firstname',' $lastname', '$email', '$username', '$password')";
if($conn->query($sql) === TRUE) {
      $_SESSION['username'] = $username;
      header("location: ../../index.php");
} else {
      echo $conn->error;
}
$conn->close();
} else {
      header("location : ../signupin.php");
}
