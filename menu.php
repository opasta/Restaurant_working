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
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script type="text/javascript">
function validate()
{
 var error="";
  var table = document.getElementById( "table" );
 if( table.value == "" )
 {
  error = "Voer tafel in";
  document.getElementById( "error_table" ).innerHTML = error;
  return false;
 }

  var date = document.getElementById( "datepicker" );
 if( date.value == "" )
 {
  error = "Voer datum in";
  document.getElementById( "error_date" ).innerHTML = error;
  return false;
 }

 else
 {
  return true;
 }
}

</script>
</HEAD>
<BODY>
<a href="index.php">Home</a>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="menu.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="menu.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>




<?php
mysql_connect("localhost","root", "usbw") or die( 'geen verbinding');
mysql_select_db("test") or die('geen verbinding met database');

$output = '';
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

	$query = mysql_query("SELECT * FROM menu WHERE name LIKE '%$searchq%'") or die('Geen verbinding');
	$count = mysql_num_rows($query);
	if ($count == 0) {
		$output = 'Geen zoekresultaten';
	}else{
		while($row = mysql_fetch_array($query)){
			$code = $row['code'];
			$name = $row['name'];
			$image = $row['image'];
			$price = $row['price'];

			$output .= '<div class="product-item">
			<form method="post" action="menu.php?action=add&code='.$code.'">
			<div class="product-image"><img src="'.$image.'"></div>
			<div class="product-tile-footer">
			<div class="product-title">'.$name.'</div>
			<div class="product-price">'.$price.'</div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>';
		}
		
	}
}








?>
<form action="menu.php" method="post">
	<input type="text" name="search" placeholder="voer zoekterm in"/>
	<input type="submit" name="film" value="Zoek" />

</form>
<?php print("$output"); ?>


<html>
<head>
  <title>Add Data</title>
  
</head>

<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>

<p><span class="error">* Verplicht veld!</span></p>
<form method="post" name="form1" action="submit.php" onsubmit="return validate();">  

  Tafelnummer: <input type="text" name="table" id="table">
  <span class="error"><span id="error_table" ></span>
  <br><br>
  Datum: <input type="text" id="datepicker" name="date">
  <span class="error"><span id="error_date" ></span>
  <br><br>
  
  <input type="submit" name="Submit" value="Add"></td>
  <p id="error_para" ></p>

</form>

</body>
</html>


</div>
</BODY>
</HTML>
