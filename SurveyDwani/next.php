<?php
	session_start();
	if(isset($_POST)){
		if(empty($_POST['email'])){
			$_SESSION['errors']['email'] = 'Email is missing';
		}
		if(empty($_POST['gender'])){
			$_SESSION['errors']['gender'] = 'Gender is missing';
		}
		if(empty($_POST['age'])){
			$_SESSION['errors']['age'] = 'Age is missing';
		}
		if(empty($_POST['live'])){
			$_SESSION['errors']['live'] = 'Address is missing';
		}
		if(count($_SESSION['errors']) > 0){
			if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
				echo json_encode($_SESSION['errors']);
				exit;
			}
			echo "<ul>";
			foreach($_SESSION['errors'] as $key=>$value){
				echo "<li>" . $value . "</li>";
			}
			echo "</ul>";
			exit;
		} else{
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['gender'] = $_POST['gender'];
			$_SESSION['age'] = $_POST['age'];
			$_SESSION['live'] = $_POST['live'];
			$_SESSION['term'] = $_POST['term'];
			$_SESSION['log'] = "survey2";
			header("Location: Survey2.php");
			die();
		}
	}
	/*
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['gender'] = $_POST['gender'];
	$_SESSION['age'] = $_POST['age'];
	$_SESSION['live'] = $_POST['live'];
	$_SESSION['log'] = "survey2";
	header("Location: Survey2.php");
	die();
	*/
?>
<html>
	<body>
		<h1>Test</h1>
		<h1><?php
			echo($_SESSION['email']);
		?></h1>
	</body>
	
</html>