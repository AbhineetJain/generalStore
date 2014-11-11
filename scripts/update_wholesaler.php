<?php

include_once './access.php';

if(!isManager())
	die("YOU ARE NOT AUTHORISED!");
?>
<?php

require 'config_sql.php';

$id = @$_GET['id'];
$name = @$_GET['name'];
$tc = @$_GET['transportation_cost'];

$mysqli->query("UPDATE wholesalers SET 
		name='$name', 
		transportation_cost='$tc' 
		WHERE id='$id'");

header('location: ../wholesaler_show.php');

?>
