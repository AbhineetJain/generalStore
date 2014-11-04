<?php

require 'config_sql.php';

$name = @$_GET['name'];
$tc = @$_GET['transportation_cost'];

$mysqli->query("INSERT INTO wholesalers VALUES ('', '$name', '$tc')");

//echo '<script>alert("Successfully Added Wholesaler"); window.location.href="../";</script>';

?>
