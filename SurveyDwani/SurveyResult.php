<?php
	session_start();
	if($_SESSION['log'] == 'survey2'){
		header("Location: Survey2.php");
	} elseif ($_SESSION['log'] == null){
		header("Location: Survey1.php");
	}
	//echo($_SESSION['result']);
	//$_SESSION['log'] = null;
<<<<<<< Updated upstream
?>
<html>
	<body>
		<h1>The result has been sent to your email. Thank you</h1>
		<h1></h1>
=======
?><html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Result</title>
    <link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
	<body>
		<h1>Result</h1>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
>>>>>>> Stashed changes
	</body>
</html>