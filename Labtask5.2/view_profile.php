<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $name = $_COOKIE['name'];
    $email = $_COOKIE['email'];
    $gender = $_COOKIE['gender'];
    $dob = $_COOKIE['dob'];
    
}else{
    header('location: login.php');
}

?>

<html lang="en">
<head>
    <title>View Profile</title>
</head>
<body>
    <table border="1" align="center"style="border-collapse: collapse;" width="30%">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right">
                Logged in as <a href="view_profile.php"><?php echo $name ?></a> | <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td valign="top" height="300px" width="200">
                <h3>Account</h3>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="profile_picture.php">Change Profile Picture</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
            <td colspan="2">
        <fieldset>
<Legend>Profile</Legend>
<table>
    <tr>
        <td>Name:<hr></td>
        <td><?php echo $name; ?><hr></td>
        <td rowspan="3"><img src="pic.png" width="100px" height="100px"></td>
    </tr>
    <tr>
        <td>Email:<hr></td>
        <td><?php echo $email; ?><hr></td>
    </tr>
    <tr>
        <td>Gender:<hr></td>
        <td><?php echo $gender; ?><hr></td>
    </tr>
    <tr>
        <td>Date of Birth:<hr></td>
        <td><?php echo $dob; ?><hr></td>
        <td align="center"><a href="profile_picture.php">Change</a></td>
    </tr>
    <tr>
        <td><a href="edit_profile.php">Edit Profile</a></td>
    </tr>
</table>
</fieldset>
        </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>