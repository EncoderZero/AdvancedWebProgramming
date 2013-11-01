<?php
session_start();
if(isset($_POST['changeState'])){
	$_SESSION['forceState']=$_POST['changeState'];
	$arr=array('forceState'=>$_SESSION['forceState'],'changeState'=>$_POST['changeState']);
	echo json_encode($arr);
}
else{
	$arr=array('forceState'=>$_SESSION['forceState'],'changeState'=>$_POST['changeState']);
	echo json_encode($arr);
}
?>