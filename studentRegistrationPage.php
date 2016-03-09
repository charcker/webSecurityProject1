<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>


<html>
	
<head>
<title>Demo Beautiful Registration Form with HTML5 and CSS3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="http://www.freshdesignweb.com/wp-content/themes/fv28/images/icon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/fdw-demo.css" media="all">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet" type="text/css">

	<script type="text/javascript">try {
		window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener('DOMContentLoaded', func); } };
		window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
		window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
		window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
		var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
} 		catch (ex) { console.error('Error executing AG js: ' + ex); }
	</script>

</head>
<body class = "backPic">
 <div class="container">
      
			<header>
				<h1><strong> New Student Account!</strong></h1>
            </header>       
      <div class="form">

    		<form id="contactform" action = "insertStudent.php" method = "post"> 
    			<p class="contact"><label for="first_name">First Name</label></p> 
    			<input id="first_name" name="first_name" value = "First" type="text"> 
    			 
				 <p class="contact"><label for="last_name">Last Name</label></p> 
    			<input id="last_name" name="last_name" value = "Last" type="text">
				
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" value = "hence@ncat.edu" type="email"> 
                
                <!--<p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" value = "hence" placeholder="username" required="" tabindex="4" type="text"> 
    			 -->
				 <p class="contact"><label for="banner">Banner ID</label></p> 
    			<input id="banner" name="banner" type="text"> 
				
				 <p class="contact"><label for="addre">Mailing Address</label></p> 
    			<input id="addre" name="addre" type="text">
				
				 <p class="contact"><label for="phNum">Phone Number</label></p> 
    			<input id="phNum" name="phNum" type="text">
				 
				  <p class="contact"><label for="gPa">GPA</label></p> 
    			<input id="gPa" name="gPa" type="text">
				
				 <p class="contact"><label for="tCred">Total Credits</label></p> 
    			<input id="tCred" name="tCred" type="text">
				
				 <p class="contact"><label for="banner">Tuition Charge</label></p> 
    			<input id="charge" name="charge" type="text">
				 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input id="password" name="password" type="password"> 
				
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<?php 
				if (isset($_GET["password"]) && $_GET["password"] == "noMatch") 
					echo "<p> style = 'color: red'> The credentials that you entered do not match!</p>" 
				?>
				<input id="repassword" name="repassword" type="password"> 
        
               <!-- <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select class="select-style" name="BirthMonth">
                  <option value="">Month</option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                  
                 </select>    
                <label>Day<input class="birthday" maxlength="2" name="BirthDay" placeholder="Day" required=""></label>
                <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
              </label></fieldset> -->
  
           <!--  <select class="select-style gender" name="gender">
            <option value="select">i am..</option>
            <option value="m">Male</option>
            <option value="f">Female</option>
            <option value="others">Other</option>
            </select><br><br>
            
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> --> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
  </div>       
</div>
            


</body>
</html>