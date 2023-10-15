<?php
if (isset($_POST['submit'])) {
    $error_messages = [];

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < 2 || !isValidUsername($username)) {
        $error_messages[] = "Username is invalid. It must contain at least two alphanumeric characters, period, dash, or underscore only.";
    }

    
    if (strlen($password) < 8 || !isValidPassword($password)) {
        $error_messages[] = "Password is invalid. It must not be less than eight characters and contain at least one of the special characters (@, #, $, %).";
    }


    if (empty($error_messages)) {
        
        echo "login successful!";
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

<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table align="center">
            <tr>
                <td>
                     <form method="post" action="#">
            <fieldset >
            <legend>Login</legend>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value=""><br><br><hr>
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Remember Me</label><br><br>
            <input type="submit" name="submit" value="Submit">
            <a href="forgotPassword.php">Forgot Password</a><br><br>     
        </fieldset>
    </form>
            </td>
            </tr>           
           </table>
</body>
</html>