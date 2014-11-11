<?php

function isLoggedIn()
{
	session_start();
	return (isset($_SESSION['isadmin']) && isset($_SESSION['user']));
}

function isManager()
{
	session_start();
	if(isLoggedIn() && $_SESSION['isadmin']==true)
		return true;
	return false;
}

function isSalesperson()
{
	session_start();
	if(isLoggedIn() && $_SESSION['isadmin']==false)
		return true;
	return false;
}

?>
