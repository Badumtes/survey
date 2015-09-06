<?php
	session_start();
	if($_SESSION['log'] == 'survey2'){
		header("Location: Survey2.php");
	} elseif ($_SESSION['log'] == null){
		header("Location: Survey1.php");
	}
	//$_SESSION['log'] = null;
?><html>
	<body>
		<h1>Result</h1>
		
	</body>
</html>