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
		<h1>The result has been sent to your email. Thank you</h1>
		<h1></h1>
	</body>
</html>