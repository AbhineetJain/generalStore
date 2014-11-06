<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM commodities WHERE id>0");

while($wh = $wholesalers->fetch_assoc())
{
	$wh['DT_RowID'] = "row_".$count;

	$type = $wh['type'];
	$table = "";

	if($type == 'Confectionery')
		$table = "confectioneries";
	elseif($type == 'Toiletries')
		$table = "toiletries";
	
	if($table == "")
	{
		$wh['batch_no'] = "";
		$wh['date_of_expiry'] = "";
	}
	else
	{
		$commodity_id = $wh['id'];
		$row = $mysqli->query("SELECT * FROM {$table} WHERE commodity_id='$commodity_id'")->fetch_assoc();
		$wh['batch_no'] = $row['batch_no'];
		$wh['date_of_expiry'] = $row['date_of_expiry'];
	}

	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
