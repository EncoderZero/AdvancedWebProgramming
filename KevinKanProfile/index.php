<?php
//Written By: Kevin Kan
//Require the header file once (to ensure it doesn't appear multiple times.
//The header file contains the company logo and nav bar
require_once 'header.php';
?>
<div class='pageContent'>
	<h1>Welcome!</h1>
	<h2>Kevin's Personal Tagline</h2>
	<p>I'm Kevin and I am a Computer Programmer Analyist. I work with programming design and implementation. The three main reasons I
	choose this profession is; being able to solve problems, learning how to use new technologies and a love of creating things that
	I enjoy using.</p>
	<!-- slider section -->
	<div id='featuredWork'>
		<h2>Featured Work</h2>
		<div id='slider' class='nivoSlider'>
			<a href='https://github.com/EncoderZero/RapidApplication/tree/master/Assignments/KevinKAssignment1'><img src='media/CSharpMailOrderImg.jpg'></a>
			<a href='https://github.com/EncoderZero/WebPrograming'><img src='media/PHPCRUDFormImg.jpg'></a>
			<a href='https://github.com/EncoderZero/MastermindProgramFinal'><img src='media/ArduinoImg.jpg'></a>
		</div>
		<a id='moreProjectsButton' href='projects.php'>More Projects</a>
	</div>
</div>
<?php 
//footer file contains the closing to the body and document
//also contains the footer(legal disclaimer).
require_once 'footer.php';
?>