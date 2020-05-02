<?php

include('../dbcon.php');

	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$id = $_POST['sid'];
	$image = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name']; 

	move_uploaded_file($tempname, "../DataImages/$image");


	$qry = "UPDATE Student SET RollNo = '$rollno',Name = '$name', City = '$city', ParentContact = '$pcon' , Standard =      '$std',`Image`= '$image' WHERE Id = '$id' ";

	$run = mysqli_query($con, $qry);

	echo mysqli_error($con);

	if($run == true)
	{
		?>

		<script>
		alert('Data updated successfully !!');
		window.open('UpdateForm.php?sid=<?php echo $id;?>','_self');
		</script>

		<?php
		
	}


?>