<?php

require_once('../model/userModel.php');
session_start();

if (!isset($_SESSION["userId"])) {
    header("Location: login.php");
}

$userId = $_SESSION["userId"];


$name = get_user($userId);
$result = $name->fetch_assoc();

?>
<center>
	<h1>Welcome Bob!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>