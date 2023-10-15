<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    
    if (strlen($username) < 2 || !isValidUsername($username)) {
        $error_messages[] = "Username is invalid. It must contain at least two alphanumeric characters, period, dash, or underscore only.";
    }

    
    if (strlen($password) < 8 || !isValidPassword($password)) {
        $error_messages[] = "Password is invalid. It must not be less than eight characters and contain at least one of the special characters (@, #, $, %).";
    }

    if ($password !== $cpassword) {
        $error_messages[] = "Password and confirm password do not match.";
    }

    if (empty($error_messages)) {
        
        echo "Registration successful!";
    } else {
        
        foreach ($error_messages as $error_message) {
            echo '<font color="black">' . $error_message . '</font><br>';
        }
    }
}

function isValidUsername($username) {
    $validCharacters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789.-_';

    if (strlen($username) < 2) {
        return false;
    }

    for ($i = 0; $i < strlen($username); $i++) {
        if (strpos($validCharacters, $username[$i]) === false) {
            return false;
        }
    }

    return true;
}

function isValidPassword($password) {
    if (strlen($password) < 8) {
        return false;
    }

    if (strpbrk($password, '@#$%') === false) {
        return false;
    }

    return true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <table align="center" width="30%" style="border-collapse: collapse;">
        <tr>
            <td colspan="3">
                <form method="post" action="">
                <br>
                <br>
                    <fieldset>
                        <legend>REGISTRATION</legend>
                        <table align="center" style="border-collapse: collapse; height: 50%;" width="50%">
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
                                <td>Username:</td>
                                <td>
                                    <input type="text" id="username" name="username" required>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Password:</td>
                                <td>
                                    <input type="password" id="password" name="password" required>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>Confirm Password:</td>
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
        <p><?php if(isset($error_message)){echo $error_message;} ?></p>
        </tr>
    </table>
</body>
</html>