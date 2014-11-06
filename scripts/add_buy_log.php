<?php

require 'config_sql.php';

$wholesaler = $_GET['wholesaler_id'];
$date_of_purchase = $_GET['date_of_purchase'];
$commodity = $_GET['commodity'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];

$mysqli->query("INSERT INTO buy_log VALUES ('', '$wholesaler', '$date_of_purchase', '$commodity', '$price', '$quantity')");

header('location: ../buy_log_show.php');

?>
