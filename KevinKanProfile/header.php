<!DOCTYPE html>
<html>
<!-- Written By: Kevin Kan
	Header File to be included in all files
	Handels Navigation menu and company logo.
	also handels current navigation menu -->
	<head>
		<title>Kevin Kan's Profile</title>
		<meta charset='utf-8' />
		<?php $currentPage=basename($_SERVER['SCRIPT_NAME']); 
		$cssFiles=array("css/site.css");
		if ($currentPage=='index.php'){
			array_push($cssFiles,"css.homePage.css");
		}
		foreach($cssFiles as $fileName){
			echo"<link rel='stylesheet' type='text/css' href='".$fileName."' media='screen' />";
		}
		?>
	</head>
	<body>
		<img src="" alt='Kevin Kan Logo'/>
		<nav> 
			<ul>
				<li <?php echo ($currentPage=='index.php') ? "class='activeNav'":NULL;     ?>><a href='index.php'>Home</a></li>
				<li <?php echo ($currentPage=='aboutMe.php') ? "class='activeNav'":NULL;   ?>><a href='index.php'>About Me</a></li>
				<li <?php echo ($currentPage=='projects.php') ? "class='activeNav'":NULL;  ?>><a href='index.php'>Projects</a></li>
				<li <?php echo ($currentPage=='services.php') ? "class='activeNav'":NULL;  ?>><a href='index.php'>Services</a></li>
				<li><a href='https://github.com/EncoderZero/'>GitHub</a></li>
				<li <?php echo ($currentPage=='contactMe.php') ? "class='activeNav'":NULL; ?>><a href='index.php'>Contact Me</a></li>
			</ul>
		</nav>
