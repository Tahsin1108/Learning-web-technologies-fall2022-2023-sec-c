<?php
session_start();
if (isset($_POST['submit'])) {
    $error_message = '';
    $login_success = false;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '') {
        $error_message .= "You must fill in the Username! <br>";
    }
    if ($password == '') {
        $error_message .= "You must fill in the Password! <br>";
    }

    $cookie_username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
    $cookie_password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

    if ($username == $cookie_username && $password == $cookie_password) {
        $login_success = true;
    }

    if ($login_success) {
        $_SESSION["user_login"] = "login_success";
        header('location: dashboard.php');
        exit();
    } else {
        $error_message = "Invalid login details! Try Again!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <table border="1" align="center" width="30%" style="border-collapse: collapse;">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right"><a href="public_home.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration&nbsp;</a></td>
        </tr>
        <tr>
            <td colspan="2">
                <form method="post" action="#">
                <br>
                <br>
                    <fieldset>
                        <legend>LOGIN</legend>
                        Username: <input type="text" name="username" value="" /> <br><br>
                        Password: <input type="password" name="password" value="" /> <hr>
                        <input type="checkbox" name="remember_me" id="" /> Remember Me <br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="forgot_password.php" align="left">Forgot Password?</a><br> 
                    </fieldset>
                    <br>
                <br>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>
