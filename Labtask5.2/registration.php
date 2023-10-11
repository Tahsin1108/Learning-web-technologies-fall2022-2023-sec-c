<?php
if(isset($_REQUEST['submit'])){
    $error_message = '';
}

if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        $gender = '';
    }

    $dob = $_POST['dob'];

    if ($name == '') {
        $error_message .= "Please insert a name <br>";
    }
    if ($email == '') {
        $error_message .= "Please insert an email <br>";
    }
    if ($username == '') {
        $error_message .= "Please insert a valid username <br>";
    }
    if ($password == '') {
        $error_message .= "Please insert a Password! <br>";
    }
    if ($cpassword == '' || $cpassword !== $password) {
        $error_message .= "Your password doesn't match! <br>";
    }
    if ($gender == '') {
        $error_message .= "Please fill in the gender! <br>";
    }
    if ($dob == '') {
        $error_message .= "Please fill in the date of birth! <br>";
    }

    if ($name !== '' && $email !== '' && $username !== '' && $password !== '' && $cpassword !== '' && $cpassword == $password && $gender !== '' && $dob !== '') {
        
        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('password', $password, time() + (86400 * 30), "/");
        setcookie('confirm_pass', $cpassword, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('dob', $dob, time() + (86400 * 30), "/");

        header('location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <table border="1" align="center" width="30%" style="border-collapse: collapse;">
        <tr>
            <td><h2><br>&nbsp;X Company</h2></td>
            <td align="right"><a href="public_home.php">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration&nbsp;</a></td>
        </tr>
        <tr>
            <td colspan="3">
                <form method="post" action="">
                <br>
                <br>
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        <table align="center" style="border-collapse: collapse; height: 50%;" width="50%"> <!-- Added quotes around width -->
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" id="name" name="name" required></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>
                                    <input type="email" id="email" name="email" required>
                                    <input type="button" value="i" title="hint: example@gmail.com">
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" id="username" name="username" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" id="password" name="password" required>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>
                                    <input type="password" id="cpassword" name="cpassword" required>
                                </td>
                            </tr>
                            <tr>
                            <td colspan="2" align="left">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" id="male" name="gender" value="Male" required> Male
                                        <input type="radio" id="female" name="gender" value="Female" required> Female
                                        <input type="radio" id="other" name="gender" value="Other" required> Other
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <legend>Date of Birth</legend>
                                        <input type="date" id="dob" name="dob" required>
                                    </fieldset>
                                    <br>
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <br>
                <br>
                </form>
            </td>
        </tr>
        <tr>
        <td colspan="3" align="center">Copyright © 2023</td>
        <p><?php if(isset($error_message)){echo $error_message;} ?></p>
        </tr>
    </table>
</body>
</html>