<?php
	session_start();
	$link = mysql_connect('localhost', 'k0117641_yanuar', 'nyemnyem');
	if(!$link){
		die('Could not connect: '.mysql_error());
		
	}
	//$table = "INSERT INTO `k0117641_SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender',
	 //'$age', '$live')";
	 $table = "INSERT INTO `SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender',
	 '$age', '$live')";
	 if(mysql_query($table)){
		//echo "New record created successfully";
	} else{
		//echo "Error: " .mysql_error();
	}
	mysql_close($link);	
	header("Location: SurveyResult.php");
	die();
?>

<html>
<body>
</body>
</html>