<?php
include ('registration.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="style.css">

		
	</head>
	<body>
		<form method="post" action="registration.php">
			<center>
		<h1>REGISTRATION FORM</h1>

			<div class="input">
				<input type="text" name="uname" placeholder="Enter Your Name" style="width: 200px; height: 40px;" />

				   <div class="input">
				<input type="email" name="email" placeholder="Enter your Email Address" style="width: 200px; height: 40px;" />
			</div>
			<div class="input">
				<input type="password" name="pwd" placeholder="Enter Your Password" style="width: 200px; height: 40px;" />
			
			</div>

			<h1>PERSONAL INFORMATION</h1>
			<div class="input">
				<input type="text" name="fname"  placeholder="Enter your first name" style="width: 200px; height: 40px;" />		
			</div>
			<div class="input">
				<input type="text" name="lname"  placeholder="Enter your last name" style="width: 200px; height: 40px;" />

				
			</div>
			<label>Gender </lable>
	   	<div style="display: inline;">
	   		<input type="radio" name="gender" value="male">male
	   		<input type="radio" name="gender" value="female">female
	   		<input type="radio" name="gender" value="other">other
	   	</div><br><br><br>

		</div>
			<div class="input">
        <input type="text" name="describe" placeholder="Describe yourself in ONE word" style="width: 200px; height: 45px;" />


			<div class="input">
				<input type="submit" name="save" class="button" value="save" style="width: 200px; height: 30px;" />
			</div>
		</div>
	</center>
		</form>
	</body>
</html>