<?php
/*Author Kevin Kan
 * Version 1
 * Changes the session variable that controls force state of mobile or desktop.
 */
session_start();
if(isset($_POST['changeState'])){
	$_SESSION['forceState']=$_POST['changeState'];
	echo json_encode($_SESSION['forceState']);
}
?>