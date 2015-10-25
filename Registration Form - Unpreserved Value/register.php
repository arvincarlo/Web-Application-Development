<?php

//tertiary operator
$firstName = empty($_POST['firstname']) ? 'Undefined' : $_POST['firstname'] ; 
$middleName = empty($_POST['middlename']) ? 'Undefined' : $_POST['middlename'];
$lastName = empty($_POST['lastname']) ? 'Undefined' : $_POST['lastname'];
$gender = empty($_POST['gender']) ? 'Undefined' : $_POST['gender'];
//birthday
$month = empty($_POST['month']) ? 'Undefined' : $_POST['month'];
$day = empty($_POST['day']) ? 'Undefined' : $_POST['day'];
$year = empty($_POST['year']) ? 'Undefined' : $_POST['year'];
//program and student type
$program = empty($_POST['program']) ? 'Undefined' : $_POST['program'];
$studentType = empty($_POST['type']) ? 'Undefined' : $_POST['type'];
$address = empty($_POST['address']) ? 'Undefined' : $_POST['address'];
 ?>

 Firstname: <strong><?php echo $firstName; ?></strong><br />
 Middlename:<strong><?php echo $middleName; ?></strong><br />
 Lastname: <strong>	<?php echo $lastName; ?></strong><br />
 Gender: <strong><?php echo $gender; ?></strong><br />
 Birthday: <strong>	<?php echo $month." ".$day." ".$year; ?></strong><br />
 Program: <strong><?php echo $program; ?></strong><br />
 Student Type: <strong>	<?php echo $studentType; ?></strong><br />
 Address: <strong><?php echo $address; ?></strong>