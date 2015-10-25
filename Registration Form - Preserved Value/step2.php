<?php

	@$fname 		=  $_GET['fname']; 
	@$mname 		=  $_GET['mname'];
	@$lname 		=  $_GET['lname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>	Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id='main'>
		<h1>Student Registration Form</h1>

		<form action="step3.php" method='GET'>

			<table border='3'>

				<!-- Caption Title for Fname, Mname, Lname -->
				<tr>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
				</tr>

				<!-- Input field for fname, mname, lname -->
				<tr>
					<td>
						<input type='text' name='fname' placeholder="Firstname" value="<?php echo $fname; ?>" />
					</td>
					<td>
						<input type='text' name='mname' placeholder="Middlename" value="<?php echo $mname; ?>" />
					</td>
					<td>
						<input type='text' name='lname' placeholder="Lastname" value="<?php echo $lname; ?>" />
					</td>
				</tr>

				<tr>
					<td id="title">Gender</td>
					<td>
						<input type='radio' value='Male' name='gender'>Male
					</td>
					<td>
						<input type='radio' value='Female' name='gender'>Female
					</td>
				</tr>

				<tr>
					<td colspan="3">
						<button style="float:right">Proceed to Step 3 &gt&gt</button>
						<button style="float:right">&lt&lt Back</button>
					</td>
				</tr>
			</table>
		
		</form>
	</div>
</body>
</html>