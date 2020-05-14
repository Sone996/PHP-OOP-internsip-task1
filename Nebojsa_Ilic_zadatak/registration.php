<?php
include_once 'class_user.php';  
$user = new class_user(); // Checking for user logged in or not
 if (isset($_REQUEST['submit'])){
 extract($_REQUEST);
 $register = $user->reg_user($username, $password);
 if ($register) {
 // Registration Success
 echo 'Registration successful <a href="login.php">Click here</a> to login';
 } else {
 // Registration Failed
 echo 'Registration failed. Email or Username already exits please try again';
 }
 }

