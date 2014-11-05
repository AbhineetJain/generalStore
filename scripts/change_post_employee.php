<?php

require 'config_sql.php';

$employee_id = @$_GET['employee_id'];
$post = @$_GET['post'];
$educational_qualifications = @$_GET['educational_qualifications'];
$user_id = @$_GET['user_id'];
$password = @$_GET['password'];

$tables = array('managers', 'salespersons', 'cleaners');

foreach($tables as $table)
	$mysqli->query("DELETE FROM $table WHERE employee_id='$employee_id'");

if($post == 'manager')
	$mysqli->query("INSERT INTO managers VALUES ('$employee_id', '$educational_qualifications', '$user_id', '$password')");
elseif($post == 'salesperson')
	$mysqli->query("INSERT INTO salespersons VALUES ('$employee_id', '$educational_qualifications', '$user_id', '$password')");
elseif($post == 'cleaner')
	$mysqli->query("INSERT INTO cleaners VALUES ('$employee_id')");

?>