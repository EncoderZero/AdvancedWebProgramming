<?php 
//Written By: Kevin Kan
//Require the header file once (to ensure it doesn't appear multiple times.
//The header file contains the company logo and nav bar
//This page is the services I offer
require_once 'header.php';
$query = $database->prepare("SELECT * FROM  businesscontacts ORDER BY contactname");
$query->execute();
while ($row = $query->fetch(PDO::FETCH_ASSOC))
{
	echo "<div class='contactName'>".$row['contactname'];
			echo "<ul class='contactInfo'>";
				echo "<li>Telephone: <a href='tel:".$row['phonenumber']."'>".$row['phonenumber']."</a></li>";
				echo "<li>Address: ".$row['address']."</li>";
				echo "<li>E-mail: ".$row['email']."</li>";
			echo "</ul>";
	echo"</div>";
}
require_once 'footer.php';
?>

