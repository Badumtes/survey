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
	$term = $_SESSION['term'];
	$table = "INSERT INTO `k0117641_SurveyDwani`.`Participants` (Email, Gender, Age, Address, Term) VALUES ('$email', '$gender','$age', '$live','$term')";
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
	$group1 = array($tame, $thedrums, $bbc, $sun, $alt, $temples, $kooks, $datsun, $wolf, $royal, $foals, $death, $war, $haim);
	$value1 = 0;
	foreach ($group1 as $band){
		if ($band != "no"){
			$value1 += 1;
		}
	}
	$value1 = $value1 / 14;
	$value1 += 1;
	//echo "group1 is $value1\n";
	//array_push($group1, $tame, $thedrums, $bbc, $sun, $alt, $temples, $kooks, $datsun, $wolf, $royal, $foals, $death, $war, $haim);
	
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
	$group2 = array($chrv, $tdcc, $mayer, $chromeo, $toro, $breakbot, $disc, $last, $san, $metro, $banks, $sbrtkt, $bag, $years, $broods, $grimes, $rudi, $purity);
	$value2 = 0;
	foreach ($group2 as $band){
		if ($band != "no"){
			$value2 += 1;
		}
	}
	$value2 = $value2 / 18;
	$value2 += 1;
	//echo "group2 is $value2\n";
	
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
	$group3 = array($snake, $fkj, $zhu, $class, $flume, $tom, $chet, $taku, $childish, $karma, $chris, $odesza, $touch, $mura, $bondax, $alina, $honne, $kaasi);
	$value3 = 0;
	foreach ($group3 as $band){
		if ($band != "no"){
			$value3 += 1;
		}
	}
	$value3 = $value3 / 18;
	$value3 += 1;
	//echo "group3 is $value3\n";
	
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
	$group4 = array($daugther, $london, $koc, $ajs, $monster, $rhye, $kodaline, $birdy, $odell, $tahiti, $sigur, $feist, $belle, $copeland, $beirut, $jamesbay);
	$value4 = 0;
	foreach ($group4 as $band){
		if ($band != "no"){
			$value4 += 1;
		}
	}
	$value4 = $value4 / 16;
	$value4 += 1;
	//echo "group4 is $value4\n";
	
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
	$group5 = array($sam, $sos, $jack, $hozier, $charlie, $the, $mark, $marina, $shawn, $halsey, $lenka, $tove);
	$value5 = 0;
	foreach ($group5 as $band){
		if ($band != "no"){
			$value5 += 1;
		}
	}
	$value5 = $value5 / 12;
	$value5 += 1;
	//echo "group5 is $value5\n";
	
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
	$group6 = array($madeon, $deorro, $vegas, $dyro, $flux, $carl, $dirty, $unmet, $alison, $amtrac, $kygo, $what);
	$value6 = 0;
	foreach ($group6 as $band){
		if ($band != "no"){
			$value6 += 1;
		}
	}
	$value6 = $value6 / 12;
	$value6 += 1;
	//echo "group6 is $value6 \n" ;
	
	if($_POST['add1'] != null or $_POST['add2'] != null or $_POST['add3'] != null){
		$add1 = $_POST['add1'];
		$add2 = $_POST['add2'];
		$add3 = $_POST['add3'];
		$query = "INSERT INTO `k0117641_SurveyDwani`.`Additional` VALUES ('$email', '$add1','$add2', '$add3')";
		mysql_query($query);
		
	}
	//Calculating Algorithm
	$counter = 0;
	$value = array("1"=>$value1, "2"=>$value2, "3"=>$value3, "4"=>$value4, "5"=>$value5, "6"=> $value6);
	$res = array($value1, $value2, $value3, $value4, $value5, $value6);
	foreach ($res as $val){
		if ($val >= 1.4){
			$counter += 1;	
		}
	}
	rsort($res);
	$result = "";
	
	if($counter < 2){
		while($test = current($value)){
			if($test == $res[0]){
				$result = key($value);
			}
			next($value);
		}
		
	} else{
		while($test = current($value)){
			if($test == $res[0] or $test == $res[1]){
				$result = $result . key($value);
			}
			next($value);
			
			if(strlen($result) >= 2){
				break;
			}
		}
				
	}
	
	//echo "result is $result \n";
	
	if(strlen($result) > 1){
		if($result == "12" or $result == "21" or $result == "13" or $result == "31" or $result == "23" or $result == "32" or
		$result == "24" or $result == "42" or $result == "34" or $result == "43"){
			$result = "7";
		} elseif($result == "14" or $result == "41"){
			$result = "8";
		} elseif($result == "15" or $result == "51" or $result == "16" or $result == "61" or $result == "45" or $result == "54" or
		$result == "46" or $result == "64"){
			$result = "11";
		} elseif($result == "26" or $result == "62" or $result == "36" or $result == "63"){
			$result = "9";
		} elseif($result == "25" or $result == "52"){
			$result = "2";
		} elseif($result == "35" or $result == "53"){
			$result = "5";
		} elseif($result == "56" or $result == "65"){
			$result = "10";
		}
	}
	//echo "new result is $result";
	
	$_SESSION['result'] = $result;
	
	$_SESSION['log'] = "result";
	
	$pic = 'bg.png';
	
	if($result == "1"){
		$pic = 'survey-illustration/survey_rock.jpg';
	} elseif($result == "2"){
		$pic = 'survey-illustration/survey_electronic.jpg';
	} elseif($result == "3"){
		$pic = 'survey-illustration/survey_deephouse.jpg';
	} elseif($result == "4"){
		$pic = 'survey-illustration/survey_folk.jpg';
	} elseif($result == "5"){
		$pic = 'survey-illustration/survey_korbanprambors.jpg';
	} elseif($result == "6"){
		$pic = 'survey-illustration/survey_dwp.jpg';
	} elseif($result == "7"){
		$pic = 'survey-illustration/survey_gaul.jpg';
	} elseif($result == "8"){
		$pic = 'survey-illustration/survey_indie.jpg';
	} elseif($result == "9"){
		$pic = 'survey-illustration/survey_dancy.jpg';
	} elseif($result == "10"){
		$pic = 'survey-illustration/survey_pop.jpg';
	} elseif($result == "11"){
		$pic = 'survey-illustration/survey_universal.jpg';
	}
	
	
	require_once('PHPMailer-master/class.phpmailer.php');
	
	$emails = new PHPMailer();
	$emails->From = 'survey@dwanigroup.com';
	$emails->FromName = 'dwanigroup.com';
	$emails->Subject = 'Test Email';
	$emails->Body = "Dear Participants\r\nThanks for completing our survey!";
	$emails->AddAddress($email);
	
	$file = $pic;
	
	$emails->AddAttachment($file);
	
	$emails->Send();
	/*
	$to = $email;
	$subject = 'TEST EMAIL';
	$message = "Dear Participants\r\nThanks for completing our survey!";
	$headers = 'From: dwanigroup.com' . "\r\n";
	$bool = mail($to, $subject, $message,$headers);
	*/
	mysql_close($link);	
	header("Location: SurveyResult.php");
	die();
?>

<html>
<body>
</body>
</html>