<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['name'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

if ($username == 'admin' && $password == 'admin123') {
$_SESSION['login_user']=$username; // Initializing Session
//header("location: bonafide.php"); // Redirecting To Other Page
} else {
$error = "Username  or Password is invalid";
}

}
}

?>