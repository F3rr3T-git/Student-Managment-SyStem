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