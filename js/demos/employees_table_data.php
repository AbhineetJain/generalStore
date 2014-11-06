<?php

$data = array(
  "id"=> -1,
  "fieldErrors"=> [],
  "sError"=> "",
  "aaData"=> array()
);
   
$count = 1;

require '../../scripts/config_sql.php';

$wholesalers = $mysqli->query("SELECT * FROM employees WHERE id>0");

while($wh = $wholesalers->fetch_assoc())
{
	$wh['DT_RowID'] = "row_".$count;
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
