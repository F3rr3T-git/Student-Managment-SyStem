
<?php

session_start();

if(isset($_SESSION[uid]))
header('location:Admin/AdminDash.php');


?>



<!DOCTYPE html>
<html>
<head>

	<title>Admin Login</title>

</head>

<body>

	<h1 align="center"> Admin Login</h1>

<form method="post" action="Login.php">

<table align="center">

	<tr>
		<td> Username </td> <td> <input type="text" name="uname"></td>
	</tr>


	<tr>
		<td> Password </td> <td> <input type="password" name="pass"></td>
	</tr>

	<tr>
		<td colspan="2" align="center"> <input type="submit" name="login" value="Login"> </td>
	</tr>

</table>

</body>
</html>

</form>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$password = $_POST['pass'];

	

	$query = "SELECT * FROM Admin WHERE Username = '$username' AND Password = '$password'";

	$run = mysqli_query($con, $query);

	$row = mysqli_num_rows($run);

	if($row < 1)
	{
		echo 
		"
		<script>
		alert('Username or Password did not match');
		window.open('Login.php','_self');
		</script>

		";
	}

	else
	{
		$data = mysqli_fetch_assoc($run);

		$id = $data['Id'];

		
	}
}

?>