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
	$wh['DT_RowID'] = "row_".$count;
	$wh['wholesaler_name'] = $mysqli->query("SELECT name FROM wholesalers WHERE id='".$wh['wholesaler_id']."' LIMIT 1")->fetch_assoc()['name'];
	if($wh['wholesaler_name'] == "")
		$wh['wholesaler_name'] = "Wholeslaer name not found";
	$wh['update'] = '<a href="./buy_log_edit_entry.php?id='.$wh['id'].'">Update</a>';
	$wh['delete'] = '<a href="scripts/delete.php?table=buy_log&id='.$wh['id'].'">Delete</a>';
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
