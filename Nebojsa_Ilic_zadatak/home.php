<?php

session_start();
include_once 'class_user.php';
$user = new class_user();
$uid = $_SESSION['id'];
if (!$user->get_session()) {
    header("location:login.php");
}
if (isset($_GET['q'])) {
    $user->user_logout();
    header("location:login.php");
}


