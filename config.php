<!DOCTYPE html>
<body>
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="lcw";
	$connect = new mysqli ($servername, $username, $password, $dbname);

	if (!$connect) {
		die ("Connection failed: ". mysqli_connect_error());
    }

?>
</body>
</html>