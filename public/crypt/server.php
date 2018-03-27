<?php

$username = "";
$email_address = "";
$password = "";
$confirm_password = "";
$secret_PIN = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'register');

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email_address = mysqli_real_escape_string($db, $_POST['email_address']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password'])
  $secret_PIN = mysqli_real_escape_string($db, $_POST['secret_PIN'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email_address)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (confirm_password != $confirm_password) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($secret_PIN)) { array_push($errors, "secret_PIN is required"); }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email_address'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email_address, password, secret_PIN) 
  			  VALUES('$username', '$email_address', '$password',secret_PIN)";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
