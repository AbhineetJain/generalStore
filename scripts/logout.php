<?php

//starting the session.
session_start();

//Destroying all session variables.
unset($_SESSION['isadmin']);
unset($_SESSION['user']);

session_destroy();

//Redirecting to login page again.
header("Location: ../");
?>