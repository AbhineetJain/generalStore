<?php

include_once './access.php';

if(!isManager()){
	echo '<script>
		alert("YOU ARE NOT AUTHORISED");
		location.href = "../";
		</script>';
	die();
}
?>
<?php

require 'config_sql.php';

$id = @$_GET['id'];
$table = @$_GET['table'];

$mysqli->query("DELETE FROM $table WHERE id='$id'");

if($table == 'commodities')
{
	$mysqli->query("DELETE FROM confectioneries WHERE commodity_id='$id'");
	$mysqli->query("DELETE FROM miscellaneous WHERE commodity_id='$id'");
	$mysqli->query("DELETE FROM stationery WHERE commodity_id='$id'");
	$mysqli->query("DELETE FROM toiletries WHERE commodity_id='$id'");
}
else if($table == 'employees')
{

	$mysqli->query("DELETE FROM managers WHERE employee_id='$id'");
	$mysqli->query("DELETE FROM salespersons WHERE employee_id='$id'");
	$mysqli->query("DELETE FROM cleaners WHERE employee_id='$id'");
	$table = 'employee';
}
else if($table == 'sell_log')
	$mysqli->query("DELETE FROM sold_items WHERE sell_log_id='$id'");
else if($table == 'wholesalers')
	$table = 'wholesaler';

$url = "../".$table."_show.php";

header("location: ".$url);
?>
