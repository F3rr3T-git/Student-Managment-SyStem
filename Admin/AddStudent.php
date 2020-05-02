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
	<h4><a href="AdminDash.php" style="float: left; margin-left: 30px; color: #fff; font-size: 17px;"> Back </a></h4>
	<h4><a href="Logout.php" style="float: right; margin-right: 30px; color: #fff; font-size: 17px;"> Logout </a></h4>
	<h1> Welcome to Admin Dashboard </h1>

</div>

<form method="post" action="AddStudent.php" enctype="multipart/form-data">

	<table align="center" border="1" style="width: 50%; margin-top: 40px;">

		<tr>
			<th> Roll No. </th>
			<td><input type="number" name="rollno" placeholder="Roll No." required="required"></td>
		</tr>


		<tr>
			<th> Name </th>
			<td><input type="text" name="name" placeholder="Full Name" required="required"></td>
		</tr>


		<tr>
			<th> City </th>
			<td><input type="text" name="city" placeholder="City" required="required"></td>
		</tr>


		<tr>
			<th> Parent Contact No. </th>
			<td><input type="number" name="pcon" placeholder="Parent's Contact No." required="required"></td>
		</tr>


		<tr>
			<th> Standard </th>
			<td><input type="number" name="std" placeholder="Standard" required="required"></td>
		</tr>


		<tr>
			<th> Image </th>
			<td><input type="file" name="simg" required="required"></td>
		</tr>


		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" ></td>
		</tr>
		
	</table>
	
</form>


</body>
</html>


<?php

if(isset($_POST['submit']))
{
	include('../dbcon.php');

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$image = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name']; 

	move_uploaded_file($tempname, "../DataImages/$image");


	$qry = "INSERT INTO Student (RollNo, Name, City, ParentContact, Standard, Image) VALUES (
	'$rollno','$name','$city','$pcon','$std', '$image')";

	$run = mysqli_query($con, $qry);

	echo mysqli_error($con);

	if($run == true)
	{
		echo 
		"<script>
		alert('Data inserted successfully !!')
		</script>
		";
	}

}


?>