<?php
//$user = $_SESSION['user'];
function Check_Login(){
	session_start_once();
	if(!isset($_SESSION['user'])){
		header("Location: Login.php");
}
}
function Check_Admin(){
	Check_Login();
	if($_SESSION['user']['Status']!="A"){
		header("Location: AccsesDenied.php");
}
}
function session_start_once(){
	if (!isset($_SESSION)) {//session_status() == PHP_SESSION_NONE
    	session_start();
	}
}
function Logout(){
	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location: index.php");
}
?>