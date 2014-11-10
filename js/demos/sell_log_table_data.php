<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM sell_log WHERE id>0");

while($wh = $wholesalers->fetch_assoc())
{
	$wh["DT_RowID"] = "row_".$count;
	$wh['show'] = '<a href="./sell_log_bill_show.php?id='.$wh['id'].'">Show</a>';
	$wh['delete'] = '<a href="scripts/delete.php?table=sell_log&id='.$wh['id'].'">Delete</a>';
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
