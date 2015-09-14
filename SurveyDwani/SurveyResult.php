<?php
	session_start();
	if($_SESSION['log'] == 'survey2'){
		header("Location: Survey2.php");
	} elseif ($_SESSION['log'] == null){
		header("Location: Survey1.php");
	}
	//echo($_SESSION['result']);
	//$_SESSION['log'] = null;
?>
<html>
	<body>
		<h1>Result is <?php echo $_SESSION['result']; ?></h1>
		<h1></h1>
	</body>
</html>