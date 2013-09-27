<?php
//Written By: Kevin Kan
//Require the header file once (to ensure it doesn't appear multiple times.
//The header file contains the company logo and nav bar
require_once 'header.php';
?>
<div class='pageContent'>			
	<h1>Kevin Kan's Projects</h1>
	<div class='projectBox'>
		<a href='https://github.com/EncoderZero/RapidApplication/tree/master/Assignments/KevinKAssignment1'><img src='media/CSharpMailOrderImg.jpg'></a>
		<h4>Rapid Application Development: Visual C#</h4>
		<p>This little project is a short intro to Visual C# language. This simple form can be modified for simple calculation programs such
		as payroll deductions or other simple input to output calculations. click the picture above to see the code on GitHub</p>
	</div>
	<div class='projectBox'>
		<a href='https://github.com/EncoderZero/WebPrograming'><img src='media/PHPCRUDFormImg.jpg'></a>
		<h4>PHP C.R.U.D. From Demo</h4>
		<p>This little project shows how to set up a basic login page with C.R.U.D. (Create Read Update Delete) functions.
		C.R.U.D. simply put creates, reads , updates and deletes information give by the user on a database. To see the code click the
		image above to take you to my GitHub repository. Please note that in the code
		the data base setup isn't there so you'll need to write the code from scratch or you can e-mail me and I can send you
		the sql file to help set up the database structure. For my contact information <a href='contactMe.php'>click here</a></p>
	</div>
	<div class='projectBox'>
		<a href='https://github.com/EncoderZero/MastermindProgramFinal'><img src='media/ArduinoImg.jpg'></a>
		<h4>Arduino: Mastermind Game</h4>
		<p>This project shows how to make the Mastermind game using a standard adruino kit that includes, an arduino, a 4x7 dot
		matrix display, some resistors, some wires, a breadboard , a remote (tv) and a remote reciever. To check out the code click
		the above image to take you to my GitHub repository.</p>
	</div>
</div>
<?php 
//footer file contains the closing to the body and document
//also contains the footer(legal disclaimer).
require_once 'footer.php';
?>