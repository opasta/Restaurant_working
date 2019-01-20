<?php
//including the database connection file
include_once("classes/Crud.php");
$time_stamp = date('m/d/Y');
$crud = new Crud();

//fetching data in descending order (lastest entry first)

$query = "SELECT * FROM `reservation` INNER JOIN users ON reservation.user_id=users.id WHERE (`date`) > '$time_stamp' ORDER BY date  ";	
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="index.php">Home</a><br>
<a href="form.php">Add New Data</a><br/><br/>


	<table width='80%' border=0>
<p>Reservations</p>
	<tr bgcolor='#CCCCCC'>

		<td>Naam</td>
		<td>Telfoonnummer</td>
		<td>Email</td>
		<td>User ID</td>
		<td>Datum</td>
		<td>Tafel Nummer</td>
		<td>Aantal personen</td>

	</tr>
<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['date']."</td>";
		echo "<td>".$res['table_num']."</td>";
		echo "<td>".$res['num_pers']."</td>";
		
	}



	?>



	</table>
		<a href="reservations.php">reservations</a><br/><br/>
	<a href="customers.php">customers</a><br/><br/>
</body>
</html>




