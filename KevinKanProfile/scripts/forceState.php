<?php
session_start();
if(isset($_POST['changeState'])){
	$_SESSION['forceState']=$_POST['changeState'];
	echo json_encode($_SESSION['forceState']);
}
?>