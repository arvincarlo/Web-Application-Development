<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<form action='register.php' method='post'>
		<div id='what'>
			<h1>Student Registration Form</h1>
			<table border='3'>
			<tr>
				<td>
					First Name
				</td>
				<td>
					Middle Name
				</td>
				<td>
					Last Name
				</td>
			</tr>
			<tr>
				<td>
					<input type='text' name='firstname' id='first_name'>
				</td>
				<td>
					<input type='text' name='middlename' id='middle_name'>
				</td>
				<td>
					<input type='text' name='lastname' id='last_name'>
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type='radio' value='male' name='gender'>Male
				</td>
				<td>
					<input type='radio' value='female' name='gender'>Female
				</td>
			</tr>
			<tr>
				<td colspan="3">
					Birthday
				</td>
			</tr>
			<tr>
				<td>
					Month 
					<select name='month'>
							<option>---</option>
							<option value='January'>January</option>
							<option value='February'>February</option>
							<option value='March'>March</option>
							<option value='April'>April</option>
							<option value='May'>May</option>
							<option value='June'>June</option>
							<option value='July'>July</option>
							<option value='August'>August</option>
							<option value='September'>September</option>
							<option value='October'>October</option>
							<option value='November'>November</option>
							<option value='December'>December</option>	
					</select>
				</td>
				<td>
						Day
						<select name='day'>
							<option>---</option>
							<?php 	
								for ($i=1; $i<32; $i++): ?>
									<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
							<?php endfor; ?>
						</select>	
				</td>
				<td>
						Year
						<select name='year'>
								<option>---</option>
							<?php 	
								for ($i=1990; $i<2015; $i++): ?>
									<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
							<?php endfor; ?>
						</select>	
				</td>
			</tr>
			<tr>	
					<td>Program</td>
					<td colspan="3">
					<select name = 'program'>
							<option></option>
							<option name = 'program' value='AB Broadcasting'>AB Broadcasting</option>
							<option name = 'program' value='B.S. Information System'>B.S. Information System</option>
							<option name = 'program' value='B.S. Accounting Technology'>B.S. Accounting Technology</option>
								
					</select>
					</td>
			</tr>
			<tr>	
					<td colspan="3"> Student Type </td>
			</tr>
			<tr>
					<td colspan="3">	
						<input type="radio" value="Full" name="type">Full <br>
						<input type="radio" value="Partial" name="type">Partial <br>
						<input type="radio" value="Payee" name="type">Payee
					</td>
			</tr>
			<tr>	
					<td colspan="3">
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
					<button>Submit</button>
				</td>
			</tr>
			</table>
			</div>
		</form>
</body>
</html>