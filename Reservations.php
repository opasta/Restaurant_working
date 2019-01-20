<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM reservation ORDER BY date DESC";
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
<p>Reservations</p>
	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>datum</td>
		<td>table</td>
		<td>num_pers</td>

	</tr>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['date']."</td>";
		echo "<td>".$res['table_num']."</td>";
		echo "<td>".$res['num_pers']."</td>";	
		
	}
	?>
	</table>

	
</body>
</html>
