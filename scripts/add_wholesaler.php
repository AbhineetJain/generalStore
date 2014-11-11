<?php

include_once './access.php';

if(!isManager())
	die("YOU ARE NOT AUTHORISED!");
?>
<?php

require 'config_sql.php';

$name = @$_GET['name'];
$tc = @$_GET['transportation_cost'];

$mysqli->query("INSERT INTO wholesalers VALUES ('', '$name', '$tc')");

header('location: ../wholesaler_show.php');

?>
