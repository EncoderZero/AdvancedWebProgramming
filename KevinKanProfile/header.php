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
		$scriptFiles=array('http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js');
		if ($currentPage=='index.php'){
			array_push($cssFiles,"css/homePage.css");
			array_push($cssFiles,"css/nivo-slider.css");
			array_push($scriptFiles,'jquery/featuredWorkSlider.js');
			array_push($scriptFiles,'jquery/jquery.nivo.slider.pack.js');
		}
		foreach($cssFiles as $fileName){
			echo"<link rel='stylesheet' type='text/css' href='".$fileName."' media='screen' />";
		}
		foreach($scriptFiles as $scriptName){
			echo"<script src='".$scriptName."' type='text/javascript'></script>";
		}
		?>
		
	</head>
	<body>
		<img id='logoImg' src="media/logo.png" alt='Kevin Kan Logo'/>
		<nav> 
			<ul>
				<a href='index.php'><li <?php echo ($currentPage=='index.php') ? "class='activeNav'":NULL;     ?>>Home</li></a>
				<a href='aboutMe.php'><li <?php echo ($currentPage=='aboutMe.php') ? "class='activeNav'":NULL;   ?>>About Me</li></a>
				<a href='projects.php'><li <?php echo ($currentPage=='projects.php') ? "class='activeNav'":NULL;  ?>>Projects</li></a>
				<a href='services.php'><li <?php echo ($currentPage=='services.php') ? "class='activeNav'":NULL;  ?>>Services</li></a>
				<a href='https://github.com/EncoderZero/'><li>GitHub</li></a>
				<a href='contactMe.php'><li <?php echo ($currentPage=='contactMe.php') ? "class='activeNav'":NULL; ?>>Contact Me</li></a>
			</ul>
			<div id='socialMediaLinks'>
				<p>Stay Connected</p>
				<a href='http://www.linkedin.com/pub/kevin-kan/76/632/318'><img scr='' alt='LinkedIN' /></a>
				<a href='https://twitter.com/EncoderZero'><img scr='' alt='Twitter' /></a>
			</div>
		</nav>
