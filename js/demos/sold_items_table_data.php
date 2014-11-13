<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;
$id = $_GET['id'];

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM sold_items WHERE sell_log_id='$id'");

while($wh = $wholesalers->fetch_assoc())
{
	$wh["DT_RowID"] = "row_".$count;
	$item_id = $wh['item_id'];
	$wh['item_name'] = $mysqli->query("SELECT name FROM commodities WHERE id='$item_id' LIMIT 1")->fetch_assoc()['name'];
	if($wh['item_name'] == "")
		$wh['item_name'] = "Item name not available";
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
