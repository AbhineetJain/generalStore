<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM wholesalers WHERE id>0");

while($wh = $wholesalers->fetch_assoc())
{
	$data['aaData'][$count-1] = array(
		"DT_RowID" => "row_".$count,
		"wholesaler_name" => $wh['name'],
		"transportation_cost" => $wh['transportation_cost']
	);
	$count++;
}

echo json_encode($data);

?>
