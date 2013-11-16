<?php
//Author Kevin Kan
//Version 1
//This php script contains database connections information .
try{
	$mySQLUsername = "db200213257";
	$mySQLPassword = "98660";
	$dsn = "mysql:host=localhost;dbname=db200213257";

	$database = new PDO($dsn, $mySQLUsername, $mySQLPassword);
}
catch(PDOException $ex){
	try{
		$mySQLUsername = "root";
		$mySQLPassword = "";
		$dsn = "mysql:host=localhost;dbname=db200213257";

		$database = new PDO($dsn, $mySQLUsername, $mySQLPassword);
	}
	catch(PDOException $ex)
	{
		echo "OOPS there was an error connecting to the database";
	}
}
 ?>