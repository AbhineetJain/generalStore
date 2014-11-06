<?php

require 'config_sql.php';

$name = @$_GET['name'];
$salary = @$_GET['salary'];
$address = @$_GET['address'];
$date_of_joining = @$_GET['date_of_joining'];
$contact = @$_GET['contact'];

$mysqli->query("INSERT INTO employees VALUES ('', '$name', '$salary', '$address', '$date_of_joining', '$contact', '')");

header('location: ../employee_show.php');

?>
