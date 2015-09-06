<?php
	session_start();
	if($_SESSION['log'] == 'survey2'){
		header("Location: Survey2.php");
	} elseif ($_SESSION['log'] == 'result'){
		$_SESSION['log'] = null;
	}
	
?>
<html>
<body>
   
    <link rel="stylesheet" href="style.css">
	<h1>Dwani Survey</h1>
	<form action="next.php" method="post">
		<table>
			<tr>
				<td><label>Email Address: </label></td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><label>Gender: </label></td>
				<td><input type="radio" name="gender" value="Male"> Male</td>
				<td><input type="radio" name="gender" value="Female"> Female</td>
			</tr>
			<tr>
				<td><label>Age Group: </label></td>
				<td><input type="radio" name="age" value="15"> 15 or younger</td>
				<td><input type="radio" name="age" value="20"> 15 - 20</td>
				<td><input type="radio" name="age" value="25"> 20 - 25</td>
				<td><input type="radio" name="age" value="30"> 25 - 30</td>
				<td><input type="radio" name="age" value="35"> 30 - 35</td>
				<td><input type="radio" name="age" value="40"> 35 - 40</td>
				<td><input type="radio" name="age" value="45"> 40 or older</td>
			</tr>
			<tr>
				<td><label>Where do you live: </label></td>
				<td><input type="radio" name="live" value="North Jakarta"> North Jakarta</td>
				<td><input type="radio" name="live" value="West Jakarta"> West Jakarta</td>
				<td><input type="radio" name="live" value="East Jakarta"> East Jakarta</td>
				<td><input type="radio" name="live" value="South Jakarta"> South Jakarta</td>
				<td><input type="radio" name="live" value="Other"> Other</td>
			</tr>
			<tr>
				<td><input type="submit" value="Next"></td>
			</tr>
		</table>
	</form>
</body>
</html>