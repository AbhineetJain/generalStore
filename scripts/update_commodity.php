<?php

include_once './access.php';

if(!isManager())
	die("YOU ARE NOT AUTHORISED!");
?>
<?php

require 'config_sql.php';;

$id = @$_GET['id'];
$name = @$_GET['name'];
$description = @$_GET['description'];
$price = @$_GET['price'];
$location_in_shop = @$_GET['location_in_shop'];
$qty_in_shop = @$_GET['qty_in_shop'];
$qty_in_godown = @$_GET['qty_in_godown'];

$mysqli->query("UPDATE commodities SET 
		name='$name', 
		description='$description', 
		price='$price', 
		location_in_shop='$location_in_shop', 
		qty_in_shop='$qty_in_shop', 
		qty_in_godown='$qty_in_godown' 
		WHERE id='$id'");

header('location: ../commodities_show.php');

?>
