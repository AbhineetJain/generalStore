<?php

function my_alert($string)
{
	echo "<script>alert('".$string."')</script>";
}

require 'config_sql.php';

$user_id = @$_GET['user_id'];
$password = @$_GET['password'];

$sql = $mysqli->query("SELECT * FROM managers WHERE user_id='$user_id' AND password='$password' LIMIT 1");

if($sql->num_rows)
{
	session_start();
	$_SESSION['isadmin'] = true;
	$emp_id = $sql->fetch_assoc()['employee_id'];
	$_SESSION['user'] = $mysqli->query("SELECT * FROM employees WHERE id='$emp_id' LIMIT 1")->fetch_assoc();
	header("location: ../home.php");
}
else
{
	$sql = $mysqli->query("SELECT * FROM salespersons WHERE user_id='$user_id' AND password='$password' LIMIT 1");
	if($sql->num_rows == 0)
		header("location: ../index.php?failed=1");
	else
	{
		session_start();
		$_SESSION['isadmin'] = false;
		$emp_id = $sql->fetch_assoc()['employee_id'];
		$_SESSION['user'] = $mysqli->query("SELECT * FROM employees WHERE id='$emp_id' LIMIT 1")->fetch_assoc();
		header("location: ../home.php");
	}
}

?>
