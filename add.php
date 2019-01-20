<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
//including the database connection file
include_once("classes/Crud.php");
$link = mysqli_connect("localhost", "root", "usbw", "test");

$crud = new Crud();


if(isset($_POST['Submit'])) {	
	$name = $crud->escape_string($_POST['name']);	
	$phone = $crud->escape_string($_POST['phone']);
	$email = $crud->escape_string($_POST['email']);
	$table_num = $crud->escape_string($_POST['table']);
	$date = $crud->escape_string($_POST['date']);
	$num_pers = $crud->escape_string($_POST['num_pers']);
		
	






$user_name = "root";
$password = "usbw";
$database = "test";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
$result = mysql_query("SELECT * FROM `reservation` WHERE (date = '$date' and  table_num = '$table_num')");
if ($result && mysql_num_rows($result) > 0)

    {
        echo "<br/><a href='index.php'>Terug naar Index</a><br>";
        echo "De tafel is al gereserveerd!<br>";
        echo "<A HREF='javascript:javascript:history.go(-1)'>Probeer opnieuw</A>";
    }
else
    {

   include_once("add_require.php");

}


	
			
		
	


		
			}
		
    }

 




?>
</body>
</html>
