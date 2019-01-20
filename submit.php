<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM menu WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	
}
}
?>




				
				

	
<html>
<head>

	<title>Add Data</title>
</head>

<body>



 <?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>

				<?php
//including the database connection file
include_once("classes/Crud.php");
$link = mysqli_connect("localhost", "root", "usbw", "test");

$crud = new Crud();


if(isset($_POST['Submit'])) {	
	$table = $crud->escape_string($_POST['table']);
	$date = $crud->escape_string($_POST['date']);
	$code_generator = $item["code"];
	$quantity_generator = $item["quantity"]; 
		
			
		//insert data to database	

			}
		$result = $crud->execute("INSERT INTO `order` (`table_num`, `date`, `code`, `amount`) VALUES ('$table', '$date', '$code_generator', '$quantity_generator')");
				//display success message
	
	





				


		}







	echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";


		?>


</body>
</html>
