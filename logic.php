<?php
session_start();
function startSession()
{
		 session_start();
}
function logout()
{
	unset($_SESSION['username']);
	header("location:login.php");
}


if(isset($_GET['logout']))
{
	logout();
}


?>