<?php
	session_start();
	$link = mysql_connect('localhost', 'k0117641_yanuar', 'nyemnyem');
	if(!$link){
		die('Could not connect: '.mysql_error());
		
	}
	$email = $_SESSION['email'];
	$gender = $_SESSION['gender'];
	$age = $_SESSION['age'];
	$live = $_SESSION['live'];
	$table = "INSERT INTO `k0117641_SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender','$age', '$live')";
	//$table = "INSERT INTO `SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender', '$age', '$live')";
	 if(mysql_query($table)){
		//echo "New record created successfully";
	} else{
		//echo "Error: " .mysql_error();
	}
	
	$to = $email;
	$subject = 'TEST EMAIL';
	$message = "Dear Participants\r\nThanks for completing our survey!";
	$headers = 'From: dwanigroup.com' . "\r\n";
	$bool = mail($to, $subject, $message,$headers);
	
	$_SESSION['log'] = "result";
	mysql_close($link);	
	header("Location: SurveyResult.php");
	die();
?>

<html>
<body>
</body>
</html>