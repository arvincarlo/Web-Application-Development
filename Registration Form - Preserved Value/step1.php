<!DOCTYPE html>
<html lang="en">
<head>
	<title>	Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id='main'>
		<h1>Student Registration Form</h1>

		<form action='step2.php' method='GET'>

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
						<input type='text' name='fname' placeholder="Firstname" />
					</td>
					<td>
						<input type='text' name='mname' placeholder="Middlename" />
					</td>
					<td>
						<input type='text' name='lname' placeholder="Lastname" />
					</td>
				</tr>	
				<tr>
					<td colspan="3">
						<button style="float:right">Proceed to Step 2 &gt &gt</button>
					</td>
				</tr>
			</table>
		
		</form>
	</div>
</body>
</html>