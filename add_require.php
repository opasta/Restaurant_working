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
	$table = $crud->escape_string($_POST['table']);
	$date = $crud->escape_string($_POST['date']);
	$num_pers = $crud->escape_string($_POST['num_pers']);
		
	








	
			
		//insert data to database	
		$sql = "INSERT INTO users (name, phone, email) VALUES ('$name', '$phone', '$email')";
		if(mysqli_query($link, $sql)){
		    $last_id = mysqli_insert_id($link);
		   
		} 
			}
		$result = $crud->execute("INSERT INTO reservation(date,table_num,num_pers,user_id) VALUES('$date','$table','$num_pers','$last_id')");
				//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	







 


 




?>
</body>
</html>
