<?php

include_once './access.php';

if(!isManager())
	die("YOU ARE NOT AUTHORISED!");
?>
<?php

require 'config_sql.php';;

$name = @$_GET['name'];
$description = @$_GET['description'];
$price = @$_GET['price'];
$location_in_shop = @$_GET['location_in_shop'];
$qty_in_shop = @$_GET['qty_in_shop'];
$qty_in_godown = @$_GET['qty_in_godown'];
$type = @$_GET['type'];
$batch_no = @$_GET['batch_no'];
$date_of_expiry = @$_GET['date_of_expiry'];

$mysqli->query("INSERT INTO commodities VALUES ('', '$name', '$description', '$price', '$location_in_shop', '$qty_in_shop', '$qty_in_godown', '$type')");
$commodity_id = $mysqli->insert_id;

if($type == 'Confectionery')
	$mysqli->query("INSERT INTO confectioneries VALUES ('$commodity_id', '$batch_no', '$date_of_expiry')");
elseif($type == 'Toiletries')
	$mysqli->query("INSERT INTO toiletries VALUES ('$commodity_id', '$batch_no', '$date_of_expiry')");
elseif($type == 'Stationery')
	$mysqli->query("INSERT INTO stationery VALUES ('$commodity_id')");
elseif($type == 'Miscellaneous')
	$mysqli->query("INSERT INTO miscellaneous VALUES ('$commodity_id')");

header('location: ../commodities_show.php');

?>
