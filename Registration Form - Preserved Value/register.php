<?php

	$fname 		= empty($_GET['fname']) 			? 'Undefined' 		: $_GET['fname']; 
	$mname 		= empty($_GET['mname'])				? 'Undefined' 		: $_GET['mname'];
	$lname 		= empty($_GET['lname']) 			? 'Undefined' 		: $_GET['lname'];
	$gender 	= empty($_GET['gender'])			? 'Undefined' 		: $_GET['gender'];

	$month 		= ($_GET['month'] == "NULL") 		? 'xx' 		: $_GET['month'];
	$day 		= ($_GET['day'] == "NULL") 			? 'xx' 		: $_GET['day'];
	$year 		= ($_GET['year'] == "NULL") 		? 'xxxx' 	: $_GET['year'];

	// Concatenate Month, Day, Year Variable into single Variable
	$bdate 		= $month ." ". $day .", ". $year;

	$program 	= ($_GET['program'] == "NULL") 		? 'Undefined' 		: $_GET['program'];
	$sType 		= empty($_GET['stype']) 			? 'Undefined' 		: $_GET['stype'];
	$address 	= empty($_GET['address'])			? 'Undefined' 		: $_GET['address'];

?>

 Firstname: <strong><?php echo @$fname; ?></strong><br />
 Middlename:<strong><?php echo @$mname; ?></strong><br />
 Lastname: <strong>	<?php echo @$lname; ?></strong><br />
 Gender: <strong><?php echo @$gender; ?></strong><br />
 Birthday: <strong>	<?php echo @$bdate; ?></strong><br />
 Program: <strong><?php echo @$program; ?></strong><br />
 Student Type: <strong>	<?php echo @$sType; ?></strong><br />
 Address: <strong><?php echo @$address; ?></strong>