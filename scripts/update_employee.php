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
$name = @$_GET['name'];
$salary = @$_GET['salary'];
$address = @$_GET['address'];
$date_of_joining = @$_GET['date_of_joining'];
$contact = @$_GET['contact'];
$number_of_leaves = @$_GET['number_of_leaves'];

$mysqli->query("UPDATE employees SET 
		name='$name', 
		salary='$salary', 
		address='$address', 
		date_of_joining='$date_of_joining', 
		contact='$contact', 
		number_of_leaves='$number_of_leaves'
		WHERE id='$id'");

header('location: ../employee_show.php');

?>
