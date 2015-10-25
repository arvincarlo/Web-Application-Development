<?php

	@$fname 		=  $_GET['fname']; 
	@$mname 		=  $_GET['mname'];
	@$lname 		=  $_GET['lname'];
	@$gender 		=  $_GET['gender'];

	@$month 		=  $_GET['month'];
	@$day 			=  $_GET['day'];
	@$year 			=  $_GET['year'];

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

		<form action='step5.php' method='GET'>

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
						<input type='radio' value='Male' name='gender' <?php if($gender=='Male') echo "checked" ?>>Male
					</td>
					<td>
						<input type='radio' value='Female' name='gender' <?php if($gender=='Female') echo "checked" ?>>Female
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
								<option value="<?php echo $month ?>" selected> <?php echo $month; ?> </option>
								<option value=""> --- </option>
								<?php for ($i=0; $i<11; $i++): ?>
									<option value="<?php echo $months[$i]; ?>"> <?php echo $months[$i]; ?> </option>
								<?php endfor; ?>
						</select>
					</td>
					<td>
							Day
							<select name='day'>
								<option value="<?php echo $day ?>" selected> <?php echo $day; ?> </option>
								<option value=""> --- </option>
								<?php for ($i=1; $i<32; $i++): ?>
										<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
								<?php endfor; ?>
							</select>	
					</td>
					<td>
							Year
							<select name='year'>
									<option value="<?php echo $year ?>" selected> <?php echo $year; ?> </option>
									<option value=""> --- </option>
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
					<td colspan="3">
						<button style="float:right">Proceed to Step 5 &gt&gt</button>
						<button style="float:right">&lt&lt Back</button>
					</td>
				</tr>
			</table>
		
		</form>
	</div>
</body>
</html>