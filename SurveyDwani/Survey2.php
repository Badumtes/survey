<?php session_start();
	
	if($_SESSION['log'] == null){
		header("Location: Survey1.php");
	} elseif ($_SESSION['log'] == 'result'){
		header("Location: SurveyResult.php");
	}
	

?>
<html>
     <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dwani Survey</title>
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
		<h1>Dwani Survey</h1>
		
		<form action="next2.php" method="post">
			<div class="col-md-12">
            <table class="table table-striped">
            
            
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
				<tr>
					<td><h3>Tame Impala</h3></td>
					<td><input type="radio" name="tame" value="no" checked="yes"></td>
					<td><input type="radio" name="tame" value="<300"></td>
					<td><input type="radio" name="tame" value="300-500"></td>
					<td><input type="radio" name="tame" value="500-1000"></td>
					<td><input type="radio" name="tame" value=">1000"></td>
				</tr>
			
			
			
				<tr>
					<td><h3>The Drums</h3></td>
					<td><input type="radio" name="thedrums" value="no" checked="yes"></td>
					<td><input type="radio" name="thedrums" value="<300"></td>
					<td><input type="radio" name="thedrums" value="300-500"></td>
					<td><input type="radio" name="thedrums" value="500-1000"></td>
					<td><input type="radio" name="thedrums" value=">1000"></td>
				</tr>
			
				<tr>
					<td><h3>Bombay Bicycle Club</h3></td>
					<td><input type="radio" name="bbc" value="no" checked="yes"></td>
					<td><input type="radio" name="bbc" value="<300"></td>
					<td><input type="radio" name="bbc" value="300-500"></td>
					<td><input type="radio" name="bbc" value="500-1000"></td>
					<td><input type="radio" name="bbc" value=">1000"></td>
				</tr>
				
			
				
			
				
			
				
				<tr>
					<td><h3>Empire Of The Sun</h3></td>
					<td><input type="radio" name="sun" value="no" checked="yes"></td>
					<td><input type="radio" name="sun" value="<300"></td>
					<td><input type="radio" name="sun" value="300-500"></td>
					<td><input type="radio" name="sun" value="500-1000"></td>
					<td><input type="radio" name="sun" value=">1000"></td>
				</tr>
				<tr>
					<td><h3>Alt-J</h3></td>
					<td><input type="radio" name="alt" value="no" checked="yes"></td>
					<td><input type="radio" name="alt" value="<300"></td>
					<td><input type="radio" name="alt" value="300-500"></td>
					<td><input type="radio" name="alt" value="500-1000"></td>
					<td><input type="radio" name="alt" value=">1000"></td>
				</tr>
				
				
                <tr>
					<td><h3>Temples</h3></td>
					<td><input type="radio" name="temples" value="no" checked="yes"></td>
					<td><input type="radio" name="temples" value="<300"></td>
					<td><input type="radio" name="temples" value="300-500"></td>
					<td><input type="radio" name="temples" value="500-1000"></td>
					<td><input type="radio" name="temples" value=">1000"></td>
				</tr>
                <tr>
					<td><h3>The Kooks</h3></td>
					<td><input type="radio" name="kooks" value="no" checked="yes"></td>
					<td><input type="radio" name="kooks" value="<300"></td>
					<td><input type="radio" name="kooks" value="300-500"></td>
					<td><input type="radio" name="kooks" value="500-1000"></td>
					<td><input type="radio" name="kooks" value=">1000"></td>
				</tr>
				<tr>
					<td><h3>Datsuns</h3></td>
					<td><input type="radio" name="datsun" value="no" checked="yes"></td>
					<td><input type="radio" name="datsun" value="<300"></td>
					<td><input type="radio" name="datsun" value="300-500"></td>
					<td><input type="radio" name="datsun" value="500-1000"></td>
					<td><input type="radio" name="datsun" value=">1000"></td>
				</tr>
				<tr>
					<td><h3>Wolfmother</h3></td>
					<td><input type="radio" name="wolf" value="no" checked="yes"></td>
					<td><input type="radio" name="wolf" value="<300"></td>
					<td><input type="radio" name="wolf" value="300-500"></td>
					<td><input type="radio" name="wolf" value="500-1000"></td>
					<td><input type="radio" name="wolf" value=">1000"></td>
				</tr>
				<tr>
					<td><h3>Royal Blood</h3></td>
					<td><input type="radio" name="royal" value="no" checked="yes"></td>
					<td><input type="radio" name="royal" value="<300"></td>
					<td><input type="radio" name="royal" value="300-500"></td>
					<td><input type="radio" name="royal" value="500-1000"></td>
					<td><input type="radio" name="royal" value=">1000"></td>
				</tr>
                	
                	<tr>
					<td><h3>The Foals</h3></td>
					<td><input type="radio" name="foals" value="no" checked="yes"></td>
					<td><input type="radio" name="foals" value="<300"></td>
					<td><input type="radio" name="foals" value="300-500"></td>
					<td><input type="radio" name="foals" value="500-1000"></td>
					<td><input type="radio" name="foals" value=">1000"></td>
				</tr>
				<tr>
					<td><h3>Death Cab for Cutie</h3></td>
					<td><input type="radio" name="death" value="no" checked="yes"></td>
					<td><input type="radio" name="death" value="<300"></td>
					<td><input type="radio" name="death" value="300-500"></td>
					<td><input type="radio" name="death" value="500-1000"></td>
					<td><input type="radio" name="death" value=">1000"></td>
				</tr>
                <tr>
					<td><h3>Warpaint</h3></td>
					<td><input type="radio" name="war" value="no" checked="yes"></td>
					<td><input type="radio" name="war" value="<300"></td>
					<td><input type="radio" name="war" value="300-500"></td>
					<td><input type="radio" name="war" value="500-1000"></td>
					<td><input type="radio" name="war" value=">1000"></td>
				</tr>
               
                <tr>
					<td><h3>Haim</h3></td>
					<td><input type="radio" name="haim" value="no" checked="yes"></td>
					<td><input type="radio" name="haim" value="<300"></td>
					<td><input type="radio" name="haim" value="300-500"></td>
					<td><input type="radio" name="haim" value="500-1000"></td>
					<td><input type="radio" name="haim" value=">1000"></td>
				</tr>
               
               
				
				<!--end of group 1-->
				<br><br>
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
                
                 <tr>
					<td><h3>Chvrches</h3></td>
					<td><input type="radio" name="chvrches" value="no" checked="yes"></td>
					<td><input type="radio" name="chvrches" value="300"></td>
					<td><input type="radio" name="chvrches" value="500"></td>
					<td><input type="radio" name="chvrches" value="1000"></td>
					<td><input type="radio" name="chvrches" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Two Door Cinema Club</h3></td>
					<td><input type="radio" name="tdcc" value="no" checked="yes"></td>
					<td><input type="radio" name="tdcc" value="300"></td>
					<td><input type="radio" name="tdcc" value="500"></td>
					<td><input type="radio" name="tdcc" value="1000"></td>
					<td><input type="radio" name="tdcc" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Mayer Hawthorne</h3></td>
					<td><input type="radio" name="mayer" value="no" checked="yes"></td>
					<td><input type="radio" name="mayer" value="300"></td>
					<td><input type="radio" name="mayer" value="500"></td>
					<td><input type="radio" name="mayer" value="1000"></td>
					<td><input type="radio" name="mayer" value="1500"></td>
				</tr>
                
                
                	<tr>
					<td><h3>Chromeo</h3></td>
					<td><input type="radio" name="chromeo" value="no" checked="yes"></td>
					<td><input type="radio" name="chromeo" value="300"></td>
					<td><input type="radio" name="chromeo" value="500"></td>
					<td><input type="radio" name="chromeo" value="1000"></td>
					<td><input type="radio" name="chromeo" value="1500"></td>
				</tr>
                
                <tr>
					<td><h3>Toro Y Moi</h3></td>
					<td><input type="radio" name="toro" value="no" checked="yes"></td>
					<td><input type="radio" name="toro" value="300"></td>
					<td><input type="radio" name="toro" value="500"></td>
					<td><input type="radio" name="toro" value="1000"></td>
					<td><input type="radio" name="toro" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Breakbot</h3></td>
					<td><input type="radio" name="breakbot" value="no" checked="yes"></td>
					<td><input type="radio" name="breakbot" value="300"></td>
					<td><input type="radio" name="breakbot" value="500"></td>
					<td><input type="radio" name="breakbot" value="1000"></td>
					<td><input type="radio" name="breakbot" value="1500"></td>
				</tr>

                
                
				<tr>
					<td><h3>Disclosure</h3></td>
					<td><input type="radio" name="disc" value="no" checked="yes"></td>
					<td><input type="radio" name="disc" value="300"></td>
					<td><input type="radio" name="disc" value="500"></td>
					<td><input type="radio" name="disc" value="1000"></td>
					<td><input type="radio" name="disc" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Last Dinosaurs</h3></td>
					<td><input type="radio" name="last" value="no" checked="yes"></td>
					<td><input type="radio" name="last" value="300"></td>
					<td><input type="radio" name="last" value="500"></td>
					<td><input type="radio" name="last" value="1000"></td>
					<td><input type="radio" name="last" value="1500"></td>
				</tr>
				<tr>
					<td><h3>San Cisco</h3></td>
					<td><input type="radio" name="san" value="no" checked="yes"></td>
					<td><input type="radio" name="san" value="300"></td>
					<td><input type="radio" name="san" value="500"></td>
					<td><input type="radio" name="san" value="1000"></td>
					<td><input type="radio" name="san" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Metronomy</h3></td>
					<td><input type="radio" name="metro" value="no" checked="yes"></td>
					<td><input type="radio" name="metro" value="300"></td>
					<td><input type="radio" name="metro" value="500"></td>
					<td><input type="radio" name="metro" value="1000"></td>
					<td><input type="radio" name="metro" value="1500"></td>
				</tr>
				
                <tr>
					<td><h3>Banks</h3></td>
					<td><input type="radio" name="banks" value="no" checked="yes"></td>
					<td><input type="radio" name="banks" value="300"></td>
					<td><input type="radio" name="banks" value="500"></td>
					<td><input type="radio" name="banks" value="1000"></td>
					<td><input type="radio" name="banks" value="1500"></td>
				</tr>
				
                <tr>
					<td><h3>SBRTKT</h3></td>
					<td><input type="radio" name="sbrtkt" value="no" checked="yes"></td>
					<td><input type="radio" name="sbrtkt" value="300"></td>
					<td><input type="radio" name="sbrtkt" value="500"></td>
					<td><input type="radio" name="sbrtkt" value="1000"></td>
					<td><input type="radio" name="sbrtkt" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Bag Raiders</h3></td>
					<td><input type="radio" name="bag" value="no" checked="yes"></td>
					<td><input type="radio" name="bag" value="300"></td>
					<td><input type="radio" name="bag" value="500"></td>
					<td><input type="radio" name="bag" value="1000"></td>
					<td><input type="radio" name="bag" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>Years & Years</h3></td>
					<td><input type="radio" name="years" value="no" checked="yes" ></td>
					<td><input type="radio" name="years" value="300"></td>
					<td><input type="radio" name="years" value="500"></td>
					<td><input type="radio" name="years" value="1000"></td>
					<td><input type="radio" name="years" value="1500"></td>
				</tr>
           
				<tr>
                	<td><h3>Broods</h3></td>
					<td><input type="radio" name="broods" value="no" checked="yes"></td>
					<td><input type="radio" name="broods" value="300"></td>
					<td><input type="radio" name="broods" value="500"></td>
					<td><input type="radio" name="broods" value="1000"></td>
					<td><input type="radio" name="broods" value="1500"></td>
				</tr>
            		<td><h3>Grimes</h3></td>
					<td><input type="radio" name="grimes" value="no" checked="yes"></td>
					<td><input type="radio" name="grimes" value="300"></td>
					<td><input type="radio" name="grimes" value="500"></td>
					<td><input type="radio" name="grimes" value="1000"></td>
					<td><input type="radio" name="grimes" value="1500"></td>
				</tr>
        	<td><h3>Rudimental</h3></td>
					<td><input type="radio" name="rudi" value="no" checked="yes"></td>
					<td><input type="radio" name="rudi" value="300"></td>
					<td><input type="radio" name="rudi" value="500"></td>
					<td><input type="radio" name="rudi" value="1000"></td>
					<td><input type="radio" name="rudi" value="1500"></td>
				</tr>
    	<td><h3>Purity Ring</h3></td>
					<td><input type="radio" name="purity" value="no" checked="yes"></td>
					<td><input type="radio" name="purity" value="300"></td>
					<td><input type="radio" name="purity" value="500"></td>
					<td><input type="radio" name="purity" value="1000"></td>
					<td><input type="radio" name="purity" value="1500"></td>
				</tr>
				
			<!-- end of group 2-->
				
			
				
	
				<br><br>
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
                <tr>
					<td><h3>Snakehips</h3></td>
					<td><input type="radio" name="snake" value="no" checked="yes"></td>
					<td><input type="radio" name="snake" value="300"></td>
					<td><input type="radio" name="snake" value="500"></td>
					<td><input type="radio" name="snake" value="1000"></td>
					<td><input type="radio" name="snake" value="1500"></td>
				</tr>
                
            	<tr>
					<td><h3>FKJ</h3></td>
					<td><input type="radio" name="fkj" value="no" checked="yes"></td>
					<td><input type="radio" name="fkj" value="300"></td>
					<td><input type="radio" name="fkj" value="500"></td>
					<td><input type="radio" name="fkj" value="1000"></td>
					<td><input type="radio" name="fkj" value="1500"></td>
				</tr>
		
				<tr>
					<td><h3>Zhu</h3></td>
					<td><input type="radio" name="zhu" value="no" checked="yes"></td>
					<td><input type="radio" name="zhu" value="300"></td>
					<td><input type="radio" name="zhu" value="500"></td>
					<td><input type="radio" name="zhu" value="1000"></td>
					<td><input type="radio" name="zhu" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Classixx</h3></td>
					<td><input type="radio" name="class" value="no" checked="yes"></td>
					<td><input type="radio" name="class" value="300"></td>
					<td><input type="radio" name="class" value="500"></td>
					<td><input type="radio" name="class" value="1000"></td>
					<td><input type="radio" name="class" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Flume</h3></td>
					<td><input type="radio" name="flume" value="no" checked="yes"></td>
					<td><input type="radio" name="flume" value="300"></td>
					<td><input type="radio" name="flume" value="500"></td>
					<td><input type="radio" name="flume" value="1000"></td>
					<td><input type="radio" name="flume" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Tom Misch</h3></td>
					<td><input type="radio" name="tom" value="no" checked="yes"></td>
					<td><input type="radio" name="tom" value="300"></td>
					<td><input type="radio" name="tom" value="500"></td>
					<td><input type="radio" name="tom" value="1000"></td>
					<td><input type="radio" name="tom" value="1500"></td>
				</tr>
                
                	<tr>
					<td><h3>Chet Faker</h3></td>
					<td><input type="radio" name="chet" value="no" checked="yes"></td>
					<td><input type="radio" name="chet" value="300"></td>
					<td><input type="radio" name="chet" value="500"></td>
					<td><input type="radio" name="chet" value="1000"></td>
					<td><input type="radio" name="chet" value="1500"></td>
				</tr>
				
                <tr>
					<td><h3>Ta-ku</h3></td>
					<td><input type="radio" name="taku" value="no" checked="yes"></td>
					<td><input type="radio" name="taku" value="300"></td>
					<td><input type="radio" name="taku" value="500"></td>
					<td><input type="radio" name="taku" value="1000"></td>
					<td><input type="radio" name="taku" value="1500"></td>
				</tr>
	<tr>
					<td><h3>Childish Gambino</h3></td>
					<td><input type="radio" name="childish" value="no" checked="yes"></td>
					<td><input type="radio" name="childish" value="300"></td>
					<td><input type="radio" name="childish" value="500"></td>
					<td><input type="radio" name="childish" value="1000"></td>
					<td><input type="radio" name="childish" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Karma kid</h3></td>
					<td><input type="radio" name="karma" value="no" checked="yes"></td>
					<td><input type="radio" name="karma" value="300"></td>
					<td><input type="radio" name="karma" value="500"></td>
					<td><input type="radio" name="karma" value="1000"></td>
					<td><input type="radio" name="karma" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Chris Malinchak</h3></td>
					<td><input type="radio" name="chris" value="no" checked="yes"></td>
					<td><input type="radio" name="chris" value="300"></td>
					<td><input type="radio" name="chris" value="500"></td>
					<td><input type="radio" name="chris" value="1000"></td>
					<td><input type="radio" name="chris" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Odesza</h3></td>
					<td><input type="radio" name="odesza" value="no" checked="yes"></td>
					<td><input type="radio" name="odesza" value="300"></td>
					<td><input type="radio" name="odesza" value="500"></td>
					<td><input type="radio" name="odesza" value="1000"></td>
					<td><input type="radio" name="odesza" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Touch Sensitive</h3></td>
					<td><input type="radio" name="touch" value="no" checked="yes"></td>
					<td><input type="radio" name="touch" value="300"></td>
					<td><input type="radio" name="touch" value="500"></td>
					<td><input type="radio" name="touch" value="1000"></td>
					<td><input type="radio" name="touch" value="1500"></td>
				</tr>
               
                <tr>
					<td><h3>Mura Masa</h3></td>
					<td><input type="radio" name="mura" value="no" checked="yes"></td>
					<td><input type="radio" name="mura" value="300"></td>
					<td><input type="radio" name="mura" value="500"></td>
					<td><input type="radio" name="mura" value="1000"></td>
					<td><input type="radio" name="mura" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Bondax</h3></td>
					<td><input type="radio" name="bondax" value="no" checked="yes"></td>
					<td><input type="radio" name="bondax" value="300"></td>
					<td><input type="radio" name="bondax" value="500"></td>
					<td><input type="radio" name="bondax" value="1000"></td>
					<td><input type="radio" name="bondax" value="1500"></td>
				</tr>
                 <tr>
					<td><h3>Alina Baraz</h3></td>
					<td><input type="radio" name="alina" value="no" checked="yes"></td>
					<td><input type="radio" name="alina" value="300"></td>
					<td><input type="radio" name="alina" value="500"></td>
					<td><input type="radio" name="alina" value="1000"></td>
					<td><input type="radio" name="alina" value="1500"></td>
				</tr>
 <tr>
					<td><h3>Honne</h3></td>
					<td><input type="radio" name="honne" value="no" checked="yes"></td>
					<td><input type="radio" name="honne" value="300"></td>
					<td><input type="radio" name="honne" value="500"></td>
					<td><input type="radio" name="honne" value="1000"></td>
					<td><input type="radio" name="honne" value="1500"></td>
				</tr>
 <tr>
					<td><h3>Kaasi</h3></td>
					<td><input type="radio" name="kaasi" value="no" checked="yes"></td>
					<td><input type="radio" name="kaasi" value="300"></td>
					<td><input type="radio" name="kaasi" value="500"></td>
					<td><input type="radio" name="kaasi" value="1000"></td>
					<td><input type="radio" name="kaasi" value="1500"></td>
				</tr>
            
                
                <!-- end of group 3-->
                
                
                <br><br>
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
                
              
                
                	<tr>
					<td><h3>Daugther</h3></td>
					<td><input type="radio" name="daugther" value="no" checked="yes"></td>
					<td><input type="radio" name="daugther" value="300"></td>
					<td><input type="radio" name="daugther" value="500"></td>
					<td><input type="radio" name="daugther" value="1000"></td>
					<td><input type="radio" name="daugther" value="1500"></td>
				</tr>
                
              
              <tr>
					<td><h3>London Grammar</h3></td>
					<td><input type="radio" name="london" value="no" checked="yes"></td>
					<td><input type="radio" name="london" value="300"></td>
					<td><input type="radio" name="london" value="500"></td>
					<td><input type="radio" name="london" value="1000"></td>
					<td><input type="radio" name="london" value="1500"></td>
				</tr>
                
                	<tr>
					<td><h3>Kings Of Convenience</h3></td>
					<td><input type="radio" name="koc" value="no" checked="yes"></td>
					<td><input type="radio" name="koc" value="300"></td>
					<td><input type="radio" name="koc" value="500"></td>
					<td><input type="radio" name="koc" value="1000"></td>
					<td><input type="radio" name="koc" value="1500"></td>
				</tr>
                
                
                <tr>
					<td><h3>Angus and Julia Stone</h3></td>
					<td><input type="radio" name="ajs" value="no" checked="yes"></td>
					<td><input type="radio" name="ajs" value="300"></td>
					<td><input type="radio" name="ajs" value="500"></td>
					<td><input type="radio" name="ajs" value="1000"></td>
					<td><input type="radio" name="ajs" value="1500"></td>
				</tr>
                
                <tr>
					<td><h3>Of Monster and Men</h3></td>
					<td><input type="radio" name="monster" value="no" checked="yes"></td>
					<td><input type="radio" name="monster" value="300"></td>
					<td><input type="radio" name="monster" value="500"></td>
					<td><input type="radio" name="monster" value="1000"></td>
					<td><input type="radio" name="monster" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Rhye</h3></td>
					<td><input type="radio" name="rhye" value="no" checked="yes"></td>
					<td><input type="radio" name="rhye" value="300"></td>
					<td><input type="radio" name="rhye" value="500"></td>
					<td><input type="radio" name="rhye" value="1000"></td>
					<td><input type="radio" name="rhye" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Kodaline</h3></td>
					<td><input type="radio" name="kodaline" value="no" checked="yes"></td>
					<td><input type="radio" name="kodaline" value="300"></td>
					<td><input type="radio" name="kodaline" value="500"></td>
					<td><input type="radio" name="kodaline" value="1000"></td>
					<td><input type="radio" name="kodaline" value="1500"></td>
				</tr>
                	<tr>
					<td><h3>Birdy</h3></td>
					<td><input type="radio" name="birdy" value="no" checked="yes"></td>
					<td><input type="radio" name="birdy" value="300"></td>
					<td><input type="radio" name="birdy" value="500"></td>
					<td><input type="radio" name="birdy" value="1000"></td>
					<td><input type="radio" name="birdy" value="1500"></td>
				</tr>
           
                <tr>
					<td><h3>Tom Odell</h3></td>
					<td><input type="radio" name="odell" value="no" checked="yes"></td>
					<td><input type="radio" name="odell" value="300"></td>
					<td><input type="radio" name="odell" value="500"></td>
					<td><input type="radio" name="odell" value="1000"></td>
					<td><input type="radio" name="odell" value="1500"></td>
				</tr>
                 <tr>
					<td><h3>Tahiti 80</h3></td>
					<td><input type="radio" name="tahiti" value="no" checked="yes"></td>
					<td><input type="radio" name="tahiti" value="300"></td>
					<td><input type="radio" name="tahiti" value="500"></td>
					<td><input type="radio" name="tahiti" value="1000"></td>
					<td><input type="radio" name="tahiti" value="1500"></td>
				</tr>
                 <tr>
					<td><h3>Sigur Ros</h3></td>
					<td><input type="radio" name="sigur" value="no" checked="yes"></td>
					<td><input type="radio" name="sigur" value="300"></td>
					<td><input type="radio" name="sigur" value="500"></td>
					<td><input type="radio" name="sigut" value="1000"></td>
					<td><input type="radio" name="sigut" value="1500"></td>
				</tr>
                 <tr>
					<td><h3>Feist</h3></td>
					<td><input type="radio" name="feist" value="no" checked="yes"></td>
					<td><input type="radio" name="feist" value="300"></td>
					<td><input type="radio" name="feist" value="500"></td>
					<td><input type="radio" name="feist" value="1000"></td>
					<td><input type="radio" name="feist" value="1500"></td>
				</tr>
                     <tr>
                         <td><h3>Belle and Sebastian</h3></td>
					<td><input type="radio" name="belle" value="no" checked="yes"></td>
					<td><input type="radio" name="belle" value="300"></td>
					<td><input type="radio" name="belle" value="500"></td>
					<td><input type="radio" name="belle" value="1000"></td>
					<td><input type="radio" name="belle" value="1500"></td>
				</tr>
                    <tr>
                         <td><h3>Copeland</h3></td>
					<td><input type="radio" name="copeland" value="no" checked="yes"></td>
					<td><input type="radio" name="copeland" value="300"></td>
					<td><input type="radio" name="copeland" value="500"></td>
					<td><input type="radio" name="copeland" value="1000"></td>
					<td><input type="radio" name="copeland" value="1500"></td>
				</tr>
<tr>
                         <td><h3>Beirut</h3></td>
					<td><input type="radio" name="beirut" value="no" checked="yes"></td>
					<td><input type="radio" name="beirut" value="300"></td>
					<td><input type="radio" name="beirut" value="500"></td>
					<td><input type="radio" name="beirut" value="1000"></td>
					<td><input type="radio" name="beirut" value="1500"></td>
				</tr>
<tr>
                         <td><h3>James Bay</h3></td>
					<td><input type="radio" name="jamesbay" value="no" checked="yes"></td>
					<td><input type="radio" name="jamesbay" value="300"></td>
					<td><input type="radio" name="jamesbay" value="500"></td>
					<td><input type="radio" name="jamesbay" value="1000"></td>
					<td><input type="radio" name="jamesbay" value="1500"></td>
				</tr>
                
                <!-- end of group 4-->
			
				<br><br>
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
				<tr>
					<td><h3>Sam Smith</h3></td>
					<td><input type="radio" name="sam" value="no" checked="yes"></td>
					<td><input type="radio" name="sam" value="300"></td>
					<td><input type="radio" name="sam" value="500"></td>
					<td><input type="radio" name="sam" value="1000"></td>
					<td><input type="radio" name="sam" value="1500"></td>
				</tr><tr>
					<td><h3>5 SOS</h3></td>
					<td><input type="radio" name="sos" value="no" checked="yes"></td>
					<td><input type="radio" name="sos" value="300"></td>
					<td><input type="radio" name="sos" value="500"></td>
					<td><input type="radio" name="sos" value="1000"></td>
					<td><input type="radio" name="sos" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Jack and Jack</h3></td>
					<td><input type="radio" name="jack" value="no" checked="yes"></td>
					<td><input type="radio" name="jack" value="300"></td>
					<td><input type="radio" name="jack" value="500"></td>
					<td><input type="radio" name="jack" value="1000"></td>
					<td><input type="radio" name="jack" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Hozier</h3></td>
					<td><input type="radio" name="hozier" value="no" checked="yes"></td>
					<td><input type="radio" name="hozier" value="300"></td>
					<td><input type="radio" name="hozier" value="500"></td>
					<td><input type="radio" name="hozier" value="1000"></td>
					<td><input type="radio" name="hozier" value="1500"></td>
				</tr>
			
				<tr>
					<td><h3>Charlie Puth</h3></td>
					<td><input type="radio" name="charlie" value="no" checked="yes"></td>
					<td><input type="radio" name="charlie" value="300"></td>
					<td><input type="radio" name="charlie" value="500"></td>
					<td><input type="radio" name="charlie" value="1000"></td>
					<td><input type="radio" name="charlie" value="1500"></td>
				</tr>
				
				
				<tr>
					<td><h3>The 1975</h3></td>
					<td><input type="radio" name="1975" value="no" checked="yes"></td>
					<td><input type="radio" name="1975" value="300"></td>
					<td><input type="radio" name="1975" value="500"></td>
					<td><input type="radio" name="1975" value="1000"></td>
					<td><input type="radio" name="1975" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Mark Ronson</h3></td>
					<td><input type="radio" name="mark" value="no" checked="yes"></td>
					<td><input type="radio" name="mark" value="300"></td>
					<td><input type="radio" name="mark" value="500"></td>
					<td><input type="radio" name="mark" value="1000"></td>
					<td><input type="radio" name="mark" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Marina and The Diamond</h3></td>
					<td><input type="radio" name="marina" value="no" checked="yes"></td>
					<td><input type="radio" name="marina" value="300"></td>
					<td><input type="radio" name="marina" value="500"></td>
					<td><input type="radio" name="marina" value="1000"></td>
					<td><input type="radio" name="marina" value="1500"></td>
				</tr>
				
			
				
				<tr>
					<td><h3>Shawn Mendes</h3></td>
					<td><input type="radio" name="shawn" value="no" checked="yes"></td>
					<td><input type="radio" name="shawn" value="300"></td>
					<td><input type="radio" name="shawn" value="500"></td>
					<td><input type="radio" name="shawn" value="1000"></td>
					<td><input type="radio" name="shawn" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Halsey</h3></td>
					<td><input type="radio" name="halsey" value="no" checked="yes"></td>
					<td><input type="radio" name="halsey" value="300"></td>
					<td><input type="radio" name="halsey" value="500"></td>
					<td><input type="radio" name="halsey" value="1000"></td>
					<td><input type="radio" name="halsey" value="1500"></td>
				</tr>
				 <tr>
					<td><h3>Lenka</h3></td>
					<td><input type="radio" name="lenka" value="no" checked="yes"></td>
					<td><input type="radio" name="lenka" value="300"></td>
					<td><input type="radio" name="lenka" value="500"></td>
					<td><input type="radio" name="lenka" value="1000"></td>
					<td><input type="radio" name="lenka" value="1500"></td>
				</tr>
				
                 <tr>
					<td><h3>Tove Lo</h3></td>
					<td><input type="radio" name="tove" value="no" checked="yes"></td>
					<td><input type="radio" name="tove" value="300"></td>
					<td><input type="radio" name="tove" value="500"></td>
					<td><input type="radio" name="tove" value="1000"></td>
					<td><input type="radio" name="tove" value="1500"></td>
				</tr>
				
                <!-- end of group 5-->
				
				<tr>
					<td></td>
					<td><h2>No</h2></td>
					<td><h2> < 300 </h2></td>
					<td><h2>300-500</h2></td>
					<td><h2>500-1000</h2></td>
					<td><h2>>1000</h2></td>
				</tr>
				<tr>
					<td><h3>Madeon</h3></td>
					<td><input type="radio" name="madeon" value="no" checked="yes"></td>
					<td><input type="radio" name="madeon" value="300"></td>
					<td><input type="radio" name="madeon" value="500"></td>
					<td><input type="radio" name="madeon" value="1000"></td>
					<td><input type="radio" name="madeon" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Deorro</h3></td>
					<td><input type="radio" name="deorro" value="no" checked="yes"></td>
					<td><input type="radio" name="deorro" value="300"></td>
					<td><input type="radio" name="deorro" value="500"></td>
					<td><input type="radio" name="deorro" value="1000"></td>
					<td><input type="radio" name="deorro" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Dimitri Vegas</h3></td>
					<td><input type="radio" name="vegas" value="no" checked="yes"></td>
					<td><input type="radio" name="vegas" value="300"></td>
					<td><input type="radio" name="vegas" value="500"></td>
					<td><input type="radio" name="vegas" value="1000"></td>
					<td><input type="radio" name="vegas" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Dyro</h3></td>
					<td><input type="radio" name="dyro" value="no" checked="yes"></td>
					<td><input type="radio" name="dyro" value="300"></td>
					<td><input type="radio" name="dyro" value="500"></td>
					<td><input type="radio" name="dyro" value="1000"></td>
					<td><input type="radio" name="dyro" value="1500"></td>
				</tr>
				
				<tr>
					<td><h3>What So Not</h3></td>
					<td><input type="radio" name="what" value="no" checked="yes"></td>
					<td><input type="radio" name="what" value="300"></td>
					<td><input type="radio" name="what" value="500"></td>
					<td><input type="radio" name="what" value="1000"></td>
					<td><input type="radio" name="what" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Flux Pavullion</h3></td>
					<td><input type="radio" name="flux" value="no" checked="yes"></td>
					<td><input type="radio" name="flux" value="300"></td>
					<td><input type="radio" name="flux" value="500"></td>
					<td><input type="radio" name="flux" value="1000"></td>
					<td><input type="radio" name="flux" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Carl Cox</h3></td>
					<td><input type="radio" name="carl" value="no" checked="yes"></td>
					<td><input type="radio" name="carl" value="300"></td>
					<td><input type="radio" name="carl" value="500"></td>
					<td><input type="radio" name="carl" value="1000"></td>
					<td><input type="radio" name="carl" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Dirty South</h3></td>
					<td><input type="radio" name="dirty" value="no" checked="yes"></td>
					<td><input type="radio" name="dirty" value="300"></td>
					<td><input type="radio" name="dirty" value="500"></td>
					<td><input type="radio" name="dirty" value="1000"></td>
					<td><input type="radio" name="dirty" value="1500"></td>
				</tr>
				<tr>
					<td><h3>Unmet Ozcan</h3></td>
					<td><input type="radio" name="unmet" value="no" checked="yes"></td>
					<td><input type="radio" name="unmet" value="300"></td>
					<td><input type="radio" name="unmet" value="500"></td>
					<td><input type="radio" name="unmet" value="1000"></td>
					<td><input type="radio" name="unmet" value="1500"></td>
				</tr>
                <tr>
					<td><h3>Alison Wonderland</h3></td>
					<td><input type="radio" name="alison" value="no" checked="yes"></td>
					<td><input type="radio" name="alison" value="300"></td>
					<td><input type="radio" name="alison" value="500"></td>
					<td><input type="radio" name="alison" value="1000"></td>
					<td><input type="radio" name="alison" value="1500"></td>
				</tr>
				
				 <tr>
					<td><h3>Amtrac</h3></td>
					<td><input type="radio" name="amtrac" value="no" checked="yes"></td>
					<td><input type="radio" name="amtrac" value="300"></td>
					<td><input type="radio" name="amtrac" value="500"></td>
					<td><input type="radio" name="amtrac" value="1000"></td>
					<td><input type="radio" name="amtrac" value="1500"></td>
				</tr>
				
                <tr>
					<td><h3>Kygo</h3></td>
					<td><input type="radio" name="kygo" value="no" checked="yes"></td>
					<td><input type="radio" name="kygo" value="300"></td>
					<td><input type="radio" name="kygo" value="500"></td>
					<td><input type="radio" name="kygo" value="1000"></td>
					<td><input type="radio" name="kygo" value="1500"></td>
				</tr>
                <td><label>Any other artist you have in mind: </label></td>
				<td><input type="text" name="add1"></td>
                <td><input type="text" name="add2"></td>
                <td><input type="text" name="add3"></td>
				<tr>
					<td><input type="submit" value="submit"></td>
				</tr>
			</table>
		</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>