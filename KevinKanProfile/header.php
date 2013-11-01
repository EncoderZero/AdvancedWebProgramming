<?php 
session_start();
$_SESSION['forceState']='none';
echo $_SESSION['forceState'];
?>
<!DOCTYPE html>
<html>
<!-- Written By: Kevin Kan
	Header File to be included in all files
	Handels Navigation menu and company logo.
	also handels current navigation menu -->
	<head>
		<title>Kevin Kan's Profile</title>
		<meta charset='utf-8' />
		<?php
		//array of file types to parse for
		$fileTypes=array("/.php$/","/.html$/");
		//get the current page name
		$currentPage=preg_replace($fileTypes,'', basename($_SERVER['SCRIPT_NAME'])); 
		//vars to hold all css and script files to be linked depending on script name with default common files on all pages
		$cssFiles=array("//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css");
		$scriptFiles=array('http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js','http://code.jquery.com/ui/1.10.3/jquery-ui.js','jquery/generalJquery.js');
		//check if mobile
		$userString=strtoupper($_SERVER['HTTP_USER_AGENT']);
		$listOfMobileUserAgents=array("/IPHONE/","/ANDROID/","/IPOD/","/BLACKBERRY/","/BLAZER/","/BOLT/", "/MOBILE/");
		$isMobile=false;//set default state to be desktop
		
		if($_SESSION['forceState']==='none'){//if no overide state (as in not mobile requesting desktop)
			foreach($listOfMobileUserAgents as $pattern){
				if (preg_match($pattern,$userString)==true){
					$isMobile=true;
				}
			}
		}
		elseif($_SESSION['forceState']==='mobile'){//if forced mobile state to mobile
			$isMobile=true;
		}
		else{//if any other state request
			$isMobile=false;//set to desktop
		}
		if($isMobile==true){
			//if the site accessed by mobile device and not foced into a different state or if forced into mobile
			array_push($cssFiles,"css/themes/themeRollerCustom.min.css");
			array_push($cssFiles,"http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css");
			array_push($cssFiles,"css/mobileSite.css");
			array_push($scriptFiles,'http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js');
			array_push($scriptFiles,'jquery/mobileSite.js');
		}
		else{//display desktop stuff
			array_push($cssFiles,"css/site.css");			
		}
		
		if ($currentPage=='index'){//if home page
			array_push($cssFiles,"css/homePage.css");
			array_push($cssFiles,"css/nivo-slider.css");
			array_push($scriptFiles,'jquery/jquery.nivo.slider.pack.js');
			array_push($scriptFiles,'jquery/featuredWorkSlider.js');
		}
		elseif ($currentPage!='services'){//if not services page (services page only one without specific css)
			array_push($cssFiles,"css/".trim($currentPage).".css");
		}
		//add external css
		foreach($cssFiles as $fileName){
			echo"<link rel='stylesheet' type='text/css' href='".$fileName."' media='screen' /> \n";
		}
		//add external scripts
		foreach($scriptFiles as $scriptName){
			echo"<script src='".$scriptName."' type='text/javascript'></script> \n";
		}
		?>
		
	</head>
	<body>
		
		<nav> 
			<img id='logoImg' src="media/logo.png" alt='Kevin Kan Logo'/>
			<ul>
				<a href='index.php'><li <?php echo ($currentPage=='index') ? "class='activeNav'":NULL;     ?>>Home<i class="fa fa-home fa-fw"></i></li></a>
				<a href='aboutMe.php'><li <?php echo ($currentPage=='aboutMe') ? "class='activeNav'":NULL;   ?>>About Me<i class="fa fa-smile-o fa-fw"></i></li></a>
				<a href='projects.php'><li <?php echo ($currentPage=='projects') ? "class='activeNav'":NULL;  ?>>Projects <i class="fa fa-trophy fa-fw"></i></li></a>
				<a href='services.php'><li <?php echo ($currentPage=='services') ? "class='activeNav'":NULL;  ?>>Services <i class="fa fa-suitcase fa-fw"></i></li></a>
				<a href='https://github.com/EncoderZero/'><li>GitHub<i class="fa fa-github fa-fw"></i> </li></a>
				<a href='contactMe.php'><li <?php echo ($currentPage=='contactMe') ? "class='activeNav'":NULL; ?>>Contact Me <i class="fa fa-phone fa-fw"></i></li></a>
			</ul>
			<div id='socialMediaLinks'>
				<p>Stay Connected</p>
				<a href='http://www.linkedin.com/pub/kevin-kan/76/632/318'><img src='media/linkedin_icon.png' alt='LinkedIN' /></a>
				<a href='https://twitter.com/EncoderZero'><img src='media/twitter_icon.png' alt='Twitter' /></a>
			</div>
		</nav>
