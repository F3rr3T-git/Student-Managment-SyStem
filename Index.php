<!DOCTYPE html>

<html>

<head>

	<title>Student Managment System</title>

</head>


<body>

	
	<h3 align="right"><a href="Login.php"> Admin Login</a> </h3>

	<h1  align="center" style="margin-right: 20px"> Welcome to Student Managment System </h1>


	<form method="post">
		<table style="width: 30%;" align="center" border= "1">

			<tr>
				<td colspan="2" align="center"> Student Information </td>
			</tr>

			<tr>
				<td align="left"> Choose Standard </td>
				<td>
					<select name="std">
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
						<option value="7">7th</option>
						<option value="8">8th</option>
						<option value="9">9th</option>
						<option value="10">10th</option>
						<option value="11">11th</option>
						<option value="12">12th</option>
					</select>
				</td>
			</tr>

			<tr>
				<td align="left"> Enter Rollno </td>
				<td><input type="text" name="rollno" required="required"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"> <input type="submit" name="submit" value="Show Info"> </td>
			</tr>

		</table>
	</form>


</body>

</html>

<?php

if(isset($_POST['submit']))
{
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];

	include('dbcon.php');

	$qry = "SELECT * FROM Student WHERE RollNo = '$rollno' AND Standard = '$standard'";

	$run = mysqli_query($con, $qry);

	if(mysqli_num_rows($run) > 0)
	{
		$data = mysqli_fetch_assoc($run);
		
		?>

		<table border="1" align="center" style="width: 50%; margin-top: 20px">

			<tr>
				<th colspan="3"> Student Details </th>
			</tr>

			<tr>
				<td rowspan="5"> <img src="DataImages/<?php echo $data['Image']; ?>" style="min-width: 120px; max-height: 150px; padding-left: 10px;"> </td>
				<th> Roll No. </th>
				<td><?php echo $data['RollNo'];?></td>
			</tr>

			<tr>
				<th> Name </th>
				<td><?php echo $data['Name'];?></td>
			</tr>

			<tr>
				<th> Standard </th>
				<td><?php echo $data['Standard'];?></td>
			</tr>

			<tr>
				<th> Parent's Contact No.  </th>
				<td><?php echo $data['ParentContact'];?></td>
			</tr>

			<tr>
				<th> City </th>
				<td><?php echo $data['City'];?></td>
			</tr>

		</table>

		<?php

	}
	else
	{
		echo "<script>alert('No such student found')</script>";
	}
}


?>