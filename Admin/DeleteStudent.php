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

   
   <table align="center" style="margin-top: 10px;">

   <form method="post" action="DeleteStudent.php">

   		<tr>
   			<th> Enter Standard </th>
   			<td> <input type="number" name="standard" placeholder="Standard" required="required"></td>
   		
   			<th> Enter Student Name </th>
   			<td> <input type="text" name="stuname" placeholder="Student Name" required="required"></td>

   			<td colspan="2"><input type="submit" name="submit" value="Search"></td>

   		</tr>
   	
   </form>
   </table>


   <table align="center" width="80%" border="1" style="margin-top: 10px;">

	<tr style="background-color:#000; color:#fff;" align="center">

		<th> No. </th>
		<th> Image </th>
		<th> Name </th>
		<th> Roll No. </th>
		<th> Delete </th>

	</tr>


<?php

if(isset($_POST['submit']))
{
	include('../dbcon.php');

	$standard = $_POST['standard'];
	$name = $_POST['stuname'];


	$qry = " SELECT * FROM Student WHERE Standard = '$standard' AND Name LIKE '%$name%' ";

	$run = mysqli_query($con,$qry); 



	if(mysqli_num_rows($run) < 1)
	{
		echo "<tr colspan=2><td>No record found</tr></td>";
	}
	else
	{
		$c = 0;

		while($data=mysqli_fetch_assoc($run))
		{
			$c++; 

			?>
				<tr align="center">
					<td> <?php echo $c; ?> </td>
					<td> <img src = "../DataImages/<?php echo $data['Image']; ?>" style = "max-width:100px;"/> </td>
					<td> <?php echo $data['Name']; ?> </td>
					<td> <?php echo $data['RollNo']; ?> </td>
					<td> <a href="DeleteForm.php?sid=<?php echo $data['Id'];?>"><input type="submit" name="edit" value="Delete"></a> </td>

				</tr>

			<?php
		}
	}
}

?>

</table>

</body>
</html>