<?php

session_start();

if(isset($_SESSION['uid']))
{

	;
}

else
{
	header('location: ../Login.php');
}

?>


<html>

<head>
	<title> Student Managment System </title>
	<link rel="stylesheet" type="text/css" href="../CSS/Style.css">
</head>

<body>

<div class="admintitle" align="center">
	<h4><a href="Logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 17px;"> Logout </a></h4>
	<h1> Welcome to Admin Dashboard </h1>

</div>


<div class="dashboard">

	<table  align="center" style="width:50%; font-size: 25px; padding-top: 10px;">

		<tr>
			<td>1.</td><td><a href="AddStudent.php"> Insert Student Details </a> </td>
		</tr>

		<tr>
			<td>2.</td><td><a href="UpdateStudent.php"> Update Student Details </a></td>
		</tr>

		<tr>
			<td>3.</td><td><a href="DeleteStudent.php"> Delete Student Details </a></td>
		</tr>

	</table>

</div>


</body>
</html>