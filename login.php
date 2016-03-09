<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>	
<head>
	<title>Web Security Project One</title>
		<meta charset="utf-8">
		<link href="css/loginStyle.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<script type="application/x-javascript"> 
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
		<!-----start-main---->
		<div class="login-form">
			<h1>Sign In</h1>

				<form method = "POST" action = "connection.php" >
				<?php 
				if (isset($_GET["status"]) && $_GET["status"] == "fail") 
					echo "<h2 style = 'color: red'> The credentials that you entered do not match!</h2>" 
				?>
					<li>
						<input name = "em" type="text" class="text" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input name = "pass" type="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					<input id="button" type="submit" name="submit" value="Log-In">
					<!-- <div class ="forgot">
						<h3><a href="#">Forgot Password?</a></h3>
						<input type="submit" onclick="myFunction()" value="Sign In" > <a href="#" class=" icon arrow"></a>                                                                                                                                                                                                                                 </h4>
					</div>-->
				</form>
		</div>
</body>
</html>