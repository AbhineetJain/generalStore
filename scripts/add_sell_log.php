<?php

require 'config_sql.php';

$data = json_decode(@$_GET['data']);

$discount = $data->discount;
$billing_amount = $data->billing_amount;
$time = date('Y-m-d H:i:s');

$mysqli->query("INSERT INTO sell_log VALUES ('', '$discount', '$billing_amount', '$time')");

$sell_log_id = $mysqli->insert_id;

foreach ($data->items as $item) {
	$item_id = $item->item;
	$qty = $item->qty;
	$total_price = $item->total_price;
	$mysqli->query("INSERT INTO sold_items VALUES ('', '$sell_log_id', '$item_id', '$qty', '$total_price')");
}

?>
