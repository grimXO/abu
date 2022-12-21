<?php
session_start();
if (!isset($_SESSION["user"])) {
	//user tried to access the page without logging in
	//redirect them to the login page
	header("Location: login.php");
}
;
?>