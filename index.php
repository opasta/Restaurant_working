<html>
<head>
	<title>Add Data</title>
	
</head>

<body>
	<a href="index.php">Home</a>
	<br>
	<a href="all_reservations.php">Reserveringen</a>
	<br>
	<a href="menu.php">Menukaart</a>
	<br>
	<a href="bon.php">Bon</a>
	
</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

?>

</body>
</html>