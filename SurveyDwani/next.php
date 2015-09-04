<?php
	session_start();
	
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['live'] = $_POST['live'];
	
	header("Location: Survey2.php");
	die();
?>
<html>
	<body>
		<h1>Test</h1>
		<h1><?php
			echo($_SESSION['email']);
		?></h1>
	</body>
	
</html>