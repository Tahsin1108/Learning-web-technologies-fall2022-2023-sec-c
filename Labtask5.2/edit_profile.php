<?php

session_start();

if(isset($_SESSION['user_login']) && $_SESSION['user_login'] == 'login_success'){

    $cookie_name = $_COOKIE['name'];
    $cookie_email = $_COOKIE['email'];
    $cookie_gender = $_COOKIE['gender'];
    $cookie_dob = $_COOKIE['dob'];
    
}else{
    header('location: login.php');
}


if(isset($_REQUEST['submit'])){

    $error_message = '';

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $dob = $_REQUEST['dob'];

    if($name == ''){
        $error_message .= "You must fill Name! <br>";
    }
    if($email == ''){
        $error_message .= "You must fill Email! <br>";
    }
    if($gender == ''){
        $error_message .= "You must fill Gender! <br>";
    }
    if ($dob == '') {
        $error_message .= "You must fill Date of Birth! <br>";
    }


    if ($name !== '' && $email !== '' && $gender !== '' && $dob !== '') {

        setcookie('name', $name, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('gender', $gender, time() + (86400 * 30), "/");
        setcookie('dob', $dob, time() + (86400 * 30), "/");

        header("location: edit_profile.php");
    }
 }

?>

<html lang="en">
<head>
    <title>Edit Profile</title>
</head>
<body>
    <table align="center" border="1" style="border-collapse: collapse;" width="30%">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right">
                Logged in as <a href="view_profile.php"><?php echo $cookie_name?></a> | <a href="login.php">Logout</a>
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
                    <li><a href="change_password.php">Change password</a></li>
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </td>
        <td colspan="2">
        <form method="post" action="#">
        <fieldset>
            <legend>EDIT PROFILE</legend>
            <table align="left" style="border-collapse: collapse; height: 50%;" width: 50%;>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" value="<?php echo $cookie_name; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="email" id="email" name="email" value="<?php echo $cookie_email; ?>">
                        <input type="button" value="i" title="hint: example@gmail.com">
                    </td>
                </tr>
                <tr>
                <td colspan="2" align="left">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" id="male" name="gender" value="Male"  <?php if($cookie_gender == 'Male'){echo 'checked' ;} ?>> Male
                            <input type="radio" id="female" name="gender" value="Female"  <?php if($cookie_gender == 'Female'){echo 'checked' ;} ?>> Female
                            <input type="radio" id="other" name="gender" value="Other"  <?php if($cookie_gender == 'Other'){echo 'checked' ;} ?>> Other
                        </fieldset>
                        <br>
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" id="dob" name="dob"  value="<?php echo $cookie_dob; ?>" required>
                        </fieldset>
                        <br>
                        <input type="submit" value="Save changes" name="submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
</form>
        </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>