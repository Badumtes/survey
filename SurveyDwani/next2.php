<?php
	session_start();
	$link = mysql_connect('localhost', 'k0117641_yanuar', 'nyemnyem');
	if(!$link){
		die('Could not connect: '.mysql_error());
		
	}
	//Participants
	$email = $_SESSION['email'];
	$gender = $_SESSION['gender'];
	$age = $_SESSION['age'];
	$live = $_SESSION['live'];
	$table = "INSERT INTO `k0117641_SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender','$age', '$live')";
	//$table = "INSERT INTO `SurveyDwani`.`Participants` (Email, Gender, Age, Address) VALUES ('$email', '$gender', '$age', '$live')";
	mysql_query($table);
	
	//Group 1
	$tame = $_POST['tame'];
	$thedrums = $_POST['thedrums'];
	$bbc = $_POST['bbc'];
	$sun = $_POST['sun'];
	$alt = $_POST['alt'];
	$temples = $_POST['temples'];
	$kooks = $_POST['kooks'];
	$datsun = $_POST['datsun'];
	$wolf = $_POST['wolf'];
	$royal = $_POST['royal'];
	$foals = $_POST['foals'];
	$death = $_POST['death'];
	$war = $_POST['war'];
	$haim = $_POST['haim'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 1` VALUES ('$email', '$tame','$thedrums', '$bbc', '$sun', '$alt', '$temples', '$kooks', '$datsun', '$wolf', '$royal', '$foals', '$death', '$war', '$haim')";
	mysql_query($query);
	
	//Group 2
	$chrv = $_POST['chvrches'];
	$tdcc = $_POST['tdcc'];
	$mayer = $_POST['mayer'];
	$chromeo = $_POST['chromeo'];
	$toro = $_POST['toro'];
	$breakbot = $_POST['breakbot'];
	$disc = $_POST['disc'];
	$last = $_POST['last'];
	$san = $_POST['san'];
	$metro = $_POST['metro'];
	$banks = $_POST['banks'];
	$sbrtkt = $_POST['sbrtkt'];
	$bag = $_POST['bag'];
	$years = $_POST['years'];
	$broods = $_POST['broods'];
	$grimes = $_POST['grimes'];
	$rudi = $_POST['rudi'];
	$purity = $_POST['purity'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 2` VALUES ('$email', '$chrv','$tdcc', '$mayer', '$chromeo', '$toro', '$breakbot', '$disc', '$last', '$san', '$metro', '$banks', '$sbrtkt', '$bag', '$years', '$broods', '$grimes', '$rudi', '$purity')";
	mysql_query($query);
	
	//group 3
	$snake = $_POST['snake'];
	$fkj = $_POST['fkj'];
	$zhu = $_POST['zhu'];
	$class = $_POST['class'];
	$flume = $_POST['flume'];
	$tom = $_POST['tom'];
	$chet = $_POST['chet'];
	$taku = $_POST['taku'];
	$childish = $_POST['childish'];
	$karma = $_POST['karma'];
	$chris = $_POST['chris'];
	$odesza = $_POST['odesza'];
	$touch = $_POST['touch'];
	$mura = $_POST['mura'];
	$bondax = $_POST['bondax'];
	$alina = $_POST['alina'];
	$honne = $_POST['honne'];
	$kaasi = $_POST['kaasi'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 3` VALUES ('$email', '$snake','$fkj', '$zhu', '$class', '$flume', '$tom', '$mura', '$bondax', '$chet', '$alina', '$taku', '$karma', '$chris', '$childish', '$odesza', '$touch', '$honne', '$kaasi')";
	mysql_query($query);
	
	//group 4
	$daugther = $_POST['daugther'];
	$london = $_POST['london'];
	$koc = $_POST['koc'];
	$ajs = $_POST['ajs'];
	$monster = $_POST['monster'];
	$rhye = $_POST['rhye'];
	$kodaline = $_POST['kodaline'];
	$birdy = $_POST['birdy'];
	$odell = $_POST['odell'];
	$tahiti = $_POST['tahiti'];
	$sigur = $_POST['sigur'];
	$feist = $_POST['feist'];
	$belle = $_POST['belle'];
	$copeland = $_POST['copeland'];
	$beirut = $_POST['beirut'];
	$jamesbay = $_POST['jamesbay'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 4` VALUES ('$email', '$daugther','$london', '$koc', '$ajs', '$monster', '$belle', '$tahiti', '$kodaline', '$birdy', '$rhye', '$sigur', '$copeland', '$odell', '$feist', '$beirut', '$jamesbay')";
	mysql_query($query);
	
	//group 5
	$sam = $_POST['sam'];
	$sos = $_POST['sos'];
	$jack = $_POST['jack'];
	$hozier = $_POST['hozier'];
	$charlie = $_POST['charlie'];
	$the = $_POST['1975'];
	$mark = $_POST['mark'];
	$marina = $_POST['marina'];
	$shawn = $_POST['shawn'];
	$halsey = $_POST['halsey'];
	$lenka = $_POST['lenka'];
	$tove = $_POST['tove'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 5` VALUES ('$email', '$marina','$mark', '$hozier', '$shawn', '$jack', '$the', '$charlie', '$sam', '$sos', '$halsey', '$lenka', '$tove')";
	mysql_query($query);
	
	//group 6
	$madeon = $_POST['madeon'];
	$deorro = $_POST['deorro'];
	$vegas = $_POST['vegas'];
	$dyro = $_POST['dyro'];
	$flux = $_POST['flux'];
	$carl = $_POST['carl'];
	$dirty = $_POST['dirty'];
	$unmet = $_POST['unmet'];
	$alison = $_POST['alison'];
	$amtrac = $_POST['amtrac'];
	$kygo = $_POST['kygo'];
	$what = $_POST['what'];
	$query = "INSERT INTO `k0117641_SurveyDwani`.`Group 6` VALUES ('$email', '$deorro','$vegas', '$dyro', '$kygo', '$what', '$flux', '$amtrac', '$carl', '$dirty', '$unmet', '$alison', '$madeon')";
	mysql_query($query);
	
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