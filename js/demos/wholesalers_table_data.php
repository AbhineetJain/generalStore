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
	$wh['wholesaler_name'] = $wh['name'];
	$wh['DT_RowID'] = "row_".$count;
	$wh['update'] = '<a href="./wholesaler_edit_entry.php?id='.$wh['id'].'">Update</a>';
	$wh['delete'] = '<a href="scripts/delete.php?table=wholesalers&id='.$wh['id'].'">Delete</a>';
	$data['aaData'][$count-1] = $wh;
	$count++;
}

echo json_encode($data);

?>
