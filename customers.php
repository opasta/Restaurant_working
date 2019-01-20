<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="index.php">index</a><br/><br/>

	<table width='80%' border=0>
<p>Customers</p>
	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>Name</td>
		<td>phone</td>
		<td>Email</td>

	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['email']."</td>";	
		
	}
	?>
	</table>
</body>
</html>
