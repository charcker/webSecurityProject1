<?php
$first_name = trim( $_POST['first_name'] );
$last_name = trim( $_POST['last_name'] );
$email = trim( $_POST['email'] );
$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

@ $db = new mysqli('localhost', 'root', '', 'login_database' );
if ( mysqli_connect_errno() )
	exit( "<p>Could not connect to DB. Error ". mysqli_connect_errno(). "</p></body></html>" );

$query = "insert into user values ".
   "('2', '$first_name', '$last_name', '$email', ".
	"'$username', '$password', '2')";
	$result = $db->query( $query );
	
	if ( $result ) 
	echo 
	 "<p>{$db->affected_rows} student inserted into the database.";
	else 
	echo "<p>{$db->error}</p>";
echo "<p>{$query}</p>";
	$db->close();
?>