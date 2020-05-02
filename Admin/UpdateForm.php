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

<?php

include('../dbcon.php');

$sid = $_GET['sid'];

$qry = "SELECT * FROM Student WHERE Id = '$sid'";

$run = mysqli_query($con,$qry);

$data  = mysqli_fetch_assoc($run);

?>


<form method="post" action="UpdateData.php" enctype="multipart/form-data">

	<table align="center" border="1" style="width: 50%; margin-top: 40px;">

		<tr>
			<th> Roll No. </th>
			<td><input type="number" name="rollno" value="<?php echo $data['RollNo'];?>" required="required"></td>
		</tr>


		<tr>
			<th> Name </th>
			<td><input type="text" name="name" value="<?php echo $data['Name'];?>" required="required"></td>
		</tr>


		<tr>
			<th> City </th>
			<td><input type="text" name="city" value="<?php echo $data['City'];?>" required="required"></td>
		</tr>


		<tr>
			<th> Parent Contact No. </th>
			<td><input type="number" name="pcon" value="<?php echo $data['ParentContact'];?>" required="required"></td>
		</tr>


		<tr>
			<th> Standard </th>
			<td><input type="number" name="std" value="<?php echo $data['Standard'];?>" required="required"></td>
		</tr>


		<tr>
			<th> Image </th>
			<td><input type="file" name="simg" ></td>
		</tr>


		<tr>
			<td colspan="2" align="center">
			<input type="hidden" name="sid" value="<?php echo $data['Id'];?>">
			<input type="submit" name="submit" value="Submit" ></td>
		</tr>
		
	</table>
	
</form>


</body>
</html>