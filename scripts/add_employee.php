<?php

require 'config_sql.php';

$name = @$_GET['name'];
$salary = @$_GET['salary'];
$address = @$_GET['address'];
$date_of_joining = @$_GET['date_of_joining'];
$contact = @$_GET['contact'];

$mysqli->query("INSERT INTO employees VALUES ('', '$name', '$salary', '$address', '$date_of_joining', '$contact', '')");

//echo '<script>alert("Successfully Added Employee"); window.location.href="../";</script>';

?>
