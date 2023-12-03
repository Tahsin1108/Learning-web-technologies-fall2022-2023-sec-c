<?php

require_once('model/personsModel.php');

$users_data = get_current_user_info();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <p>Name: <strong><?php echo $users_data['name']; ?></strong></p>
    <p>Email: <strong><?php echo $users_data['email']; ?></strong></p>
    <p>Phone: <strong><?php echo $users_data['phone']; ?></strong></p>

</body>
</html>