<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){
    $name = $_COOKIE['name'];
    
}else{
    header('location: login.php');
}
?>

<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body>
    <table align ="center" border="1" style="border-collapse: collapse;" width="50%">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right">
            Logged in as <a href="view_profile.php"> <?php echo $name; ?></a> | <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td valign="top" height="300px" width="300">
                <h3><br>&nbsp;Account</h3><hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="view_profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="profile_picture.php">Change Profile Picture</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
            <td valign="top" width="60%">
            <h3>Welcome <?php echo $name; ?></h3>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>