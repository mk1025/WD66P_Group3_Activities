<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve user input from the form
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Perform server-side validation (e.g., check against database)

  // Redirect to the desired page upon successful login
  header("Location: welcome.php");
  exit;
}

