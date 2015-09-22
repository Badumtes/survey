<?php
	session_start();
	if($_SESSION['log'] == 'survey2'){
		header("Location: Survey2.php");
	} elseif ($_SESSION['log'] == 'result'){
		$_SESSION['log'] = null;
	}
	
?>
<html>
<head>
	<script src="jquery-2.1.4.min.js"></script>
</head>
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
				<td><input type="radio" name="live" value="Central Jakarta"> Central Jakarta</td>
				<td><input type="radio" name="live" value="East Jakarta"> East Jakarta</td>
				<td><input type="radio" name="live" value="South Jakarta"> South Jakarta</td>
				<td><input type="radio" name="live" value="Other"> Other</td>
			</tr>
			<tr>
				<td><input type="checkbox" name="term" value="yes">By Clicking Continue </td>
			</tr>
			<tr>
				<td><input type="submit" value="Next"></td>
			</tr>
		</table>
	</form>
	<script>
		var data = {};
		$(document).ready(function(){
			$('input[type="submit"]').on('click',function(){
				resetErrors();
				var url = 'next.php';
				$.each($('form input, form select'), function(i,v){
					if(v.type !== 'submit'){
						data[v.name] = v.value;					
					}
				});
				$.ajax({
					dataType: 'json',
					type: 'POST',
					url: url,
					data: data,
					success: function(resp){
						if(resp === true){
							$('form').submit();
							return false;
						} else{
							$.each(resp,function(i,v){
								console.log(i + "=>" + v);
								var msg = '<label class="error" for="'+i+'">'+v+'</label>';
								$('input[name="'+i+'"],select[name="'+i+'"]').addClass('inputTxtError').after(msg);
							});
							var keys = Object.keys(resp);
							$('input[name="'+keys[0]+'"]').focus();
						}
						return false;
					},
					error: function(){
						console.log('there was a problem checking the fields');
					}
				});
				return false;
			});
		});
		function resetErrors(){
			$('form input, form select').removeClass('inputTxtError');
			$('label.error').remove();
		}
	</script>
</body>
</html>