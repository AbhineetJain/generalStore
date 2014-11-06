<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM buy_log WHERE id>0");

while($wh = $wholesalers->fetch_assoc())
{
	$wh['DT_RowID'] = "row_"+$count;
	$wh['wholesaler_name'] = $mysqli->query("SELECT name FROM wholesalers WHERE id='".$wh['id']."' LIMIT 1")->fetch_assoc()['name'];
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
