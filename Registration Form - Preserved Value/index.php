<?php
	//Initialize course,months array to lessen consumed space
	$courses = [
				'Bachelor of Arts in Broadcasting',
				'Bachelor of Science in Information System', 
				'Bachelor of Science in Accounting Technology', 
				'Mass Communication Technology',
				'Associate in Computer Technology',
				'International Cookery',
				'Nursing Assistant',
				'Office Management'
			];

	$months = [
				'January',
				'February',
				'March',
				'May',
				'June',
				'July',
				'August',
				'September',
				'October',
				'November',
				'December',
			];
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

			<form action='register.php' method='post'>

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
						<td id="title">Gender</td>
						<td>
							<input type='radio' value='Male' name='gender'>Male
						</td>
						<td>
							<input type='radio' value='Female' name='gender'>Female
						</td>
					</tr>
				<tr>
					<td colspan="3" id="bday">
						Birthday
					</td>
				</tr>
				<tr>
					<td>
						Month 
						<select name='month'>
								<option value="NULL"> --- </option>
								<?php for ($i=0; $i<11; $i++): ?>
									<option value="<?php echo $months[$i]; ?>"> <?php echo $months[$i]; ?> </option>
								<?php endfor; ?>
						</select>
					</td>
					<td>
							Day
							<select name='day'>
								<option value="NULL">---</option>
								<?php for ($i=1; $i<32; $i++): ?>
										<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
								<?php endfor; ?>
							</select>	
					</td>
					<td>
							Year
							<select name='year'>
									<option value="NULL">---</option>
								<?php 	
									for ($i=1990; $i<2015; $i++): ?>
										<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
								<?php endfor; ?>
							</select>	
					</td>
				</tr>
				<tr>	
						<td id="title">Program</td>
						<td colspan="3">
						<select name = 'program'>
								<option value="NULL">----- Select Program -----</option>
								<?php for ($i=0; $i<8; $i++): ?>
									<option value="<?php echo $courses[$i]; ?>"> <?php echo $courses[$i]; ?> </option>
								<?php endfor; ?>
						</select>
						</td>
				</tr>
				<tr>	
						<td colspan="3" id="stype"> Student Type </td>
				</tr>
				<tr>
						<td colspan="3">	
							<input type="radio" value="Full" name="stype">Full <br>
							<input type="radio" value="Partial" name="stype">Partial <br>
							<input type="radio" value="Payee" name="stype">Payee
						</td>
				</tr>
				<tr>	
						<td colspan="3" id="add">
								Address
						</td>
				</tr>
				<tr>
					<td colspan="3">
						<textarea name='address' cols="75"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button>Submit Form</button>
					</td>
				</tr>
				</table>
			</div>
		</form>
</body>
</html>