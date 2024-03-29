<!doctype html>
<?php
	/*$fname = $_POST['first_name'];
	$lname = $_POST['last_name']
	$email = $_POST['email'];
	*/

/*	
define('DB_HOST', 'localhost');
define('DB_NAME', 'professor');
define('DB_USER', 'root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$query = mysql_query("SELECT firstName, lastName, email  FROM professorInfo") or die(mysql_error());
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "professor";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}
$sql = "SELECT firstName, lastName, email FROM professorInfo";
$result = $conn->query($sql);
$data = $result->fetch_assoc();

/*if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}*/
$conn->close();
?>

<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Black Board 0.1</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/profStyle.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body class = "line">
  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="images/avatar.png" alt="default avatar"></div>
      <?php
	  echo "<h1>Salutations ".$data["firstName"]."! </h1>";
	  ?>
      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Bio</a></li>
          <li><a href="#activity">Activity</a></li>
          <li><a href="#friends">Friends</a></li>
          <li><a href="#settings">Settings</a></li>
        </ul>
      </nav>
      
      <section id="bio">
        <p>Various content snippets courtesy of <a href="http://bluthipsum.com/">Bluth Ipsum</a>.</p>
        
        <p>Can't a guy call his mother pretty without it seeming strange? Amen. I think that's one of Mom's little fibs, you know, like I'll sacrifice anything for my children.</p>
        
        <p>She's always got to wedge herself in the middle of us so that she can control everything. Yeah. Mom's awesome. I run a pretty tight ship around here. With a pool table.</p>
      </section>
      
      <section id="activity" class="hidden">
        <p>Most recent actions:</p>
        
		<h2><a href="studentRegistrationPage.php">Create New Student Account</a></h2>
		
        <p class="activity">@10:15PM - Submitted a news article</p>
        
        <p class="activity">@9:50PM - Submitted a news article</p>
        
        <p class="activity">@8:15PM - Posted a comment</p>
        
        <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>
        
        <p class="activity">@12:30PM - Submitted a news article</p>
      </section>
      
      <section id="friends" class="hidden">
        <p>Friends list:</p>
        
        <ul id="friendslist" class="clearfix">
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> Username</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> SomeGuy123</a></li>
          <li><a href="#"><img src="images/avatar.png" width="22" height="22"> PurpleGiraffe</a></li>
        </ul>
      </section>
      
      <section id="settings" class="hidden">
        <p>Edit your user settings:</p>
        <?php
        echo "<p class='setting'><span>E-mail Address <img src='images/edit.png' alt='*Edit*'></span>".$data['email']."</p>";
        ?>
        <p class="setting"><span>Language <img src="images/edit.png" alt="*Edit*"></span> English(US)</p>
        
        <p class="setting"><span>Profile Status <img src="images/edit.png" alt="*Edit*"></span> Public</p>
        
        <p class="setting"><span>Update Frequency <img src="images/edit.png" alt="*Edit*"></span> Weekly</p>
        
        <p class="setting"><span>Connected Accounts <img src="images/edit.png" alt="*Edit*"></span> None</p>
      </section>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
  

<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>
</body>
</html>