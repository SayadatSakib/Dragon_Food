<?php
session_start();

$_SESSION = array();

session_destroy();
if(!isset($_SESSION['m_email'])){
	header('location:ManagerLogin.php');
}
?>