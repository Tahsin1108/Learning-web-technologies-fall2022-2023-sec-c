<?php 
   require_once('../controller/sessionCheck.php');
   require_once('../model/userModel.php');
   $users = getAllUser();
?>
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>USER TYPE</td>
		</tr>
		<tr>
			<td>15-10101-1</td><td>Bob</td><td>Admin</td>
		</tr>
		<tr>
			<td>16-10102-2</td><td>Anne</td><td>User</td>
		</tr>
		<tr>
			<td>16-10103-2</td><td>Kent</td><td>User</td>
		</tr>
		<tr>
			<td>16-10104-3</td><td>James</td><td>Admin</td>
		</tr>
		<tr>
			<td colspan="3" align="right">
				<a href="home.php">Go Home</a>
			</td>
		</tr>
	</table>			
</center>