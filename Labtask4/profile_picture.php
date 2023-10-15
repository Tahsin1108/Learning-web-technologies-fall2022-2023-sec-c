<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile Picture</title>
</head>
<body>
    <table align="center" border="1" style="border-collapse: collapse;" width="50%">
        <tr>
            <td><h2>&nbsp;X Company</h2></td>
            <td align="right">
                Logged in as <a href="view_profile.php">name</a> | <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td valign="top" height="300px" width="300">
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
            <form action="" method="" ecntype="">
        <fieldset>
            <legend>PROFILE PICTURE</legend>
            <table align="left" style="border-collapse: collapse; height: 50%;" width: 50%;>
            <tr rowspan="3">
                <td><img src="profile_picture.png" width="100px" height="100px" align = "left"></td>
            </tr>
            <tr>
                <td><input type="file" id="Picture" name="Picture"><br></td>
            </tr><br>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr><br>
            </table>
        </fieldset>
</form>
        </td>
        <tr>
            <td colspan="2" align="center">Copyright © 2023</td>
        </tr>
    </table>
</body>
</html>