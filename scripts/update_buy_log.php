<?php

include_once './access.php';

if(!isManager())
	die("YOU ARE NOT AUTHORISED!");
?>
<?php

require 'config_sql.php';

$id = @$_GET['id'];
$wholesaler = @$_GET['wholesaler_id'];
$date_of_purchase = @$_GET['date_of_purchase'];
$commodity = @$_GET['commodity'];
$price = @$_GET['price'];
$quantity = @$_GET['quantity'];

$mysqli->query("UPDATE buy_log SET 
		wholesaler_id='$wholesaler', 
		date_of_purchase='$date_of_purchase', 
		commodity='$commodity', 
		price='$price', 
		quantity='$quantity' 
		WHERE id='$id'");

header('location: ../buy_log_show.php');

?>
