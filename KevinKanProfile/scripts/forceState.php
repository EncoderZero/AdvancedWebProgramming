<?php
if(isset($_POST['changeState'])){
	$_SESSION['forceState']=$_POST['changeState'];
}
?>