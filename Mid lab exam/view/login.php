<?php

	require_once('../model/userModel.php');

	if(isset($_REQUEST['submit'])){

	$error_message = '';
	$userId = $_REQUEST['userId'];
	$password = $_REQUEST['password'];

	if($userId == ''){
		$error_message .= "You must fill User Id! <br>";
	}
	if($password == ''){
		$error_message .= "You must fill Password! <br>";
	}


	if($error_message == ''){

		$login = userLogin($userId, $password);

		$user_type = get_user_type($userId);
		$result = $user_type->fetch_assoc();


		if($login == true && $result['user_type'] == 'admin'){
			session_start();
			$_SESSION["username"] = $username;
			header("Location: admin_home.php");
		}elseif($login == true && $result['user_type'] == 'user'){
			session_start();
			$_SESSION["username"] = $username;
			header("Location: user_home.php");
		}
	}
	}

?>

<center>
<form>
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text"><br/>                               
					Password<br/>
					<input type="password">
					<br /><hr/>
					<input type="button" value="Login">
					<a href="registration.php">Register</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>