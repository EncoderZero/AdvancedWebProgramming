<?php
//Written By: Kevin Kan
//Require the header file once (to ensure it doesn't appear multiple times.
//The header file contains the company logo and nav bar
require_once 'header.php';
?>
<div class='pageContent'>
	<h1>Kevin Kan' Bio</h1>
	<img id='KevinKanPhoto' src='media/KevinKanPhoto.jpg' alt='Kevin Kan Portrait'/>
	<h2>Short Bio</h2>
	<p>Let me tell you a little about myself.My name is Kevin Kan, 
	I'm Chinese Canadian that grew up in northern Ontario in a small town called Iroquois Falls.
	I don't really have any favorite colours or anything to that effect. In general my hobbies and 
	passions are music (specifically the piano), playing video games, reading good stories and
	debating just about anyting with my friends.  
	</p>
	<h2>CV</h2>
	<p>To view my CV on a seperate page <a href="pdf/KevinKanResumeSept2013.pdf">click here.</a></p>
	<embed id='embedCV' src="pdf/KevinKanResumeSept2013.pdf">
</div>

<?php 
//footer file contains the closing to the body and document
//also contains the footer(legal disclaimer).
require_once 'footer.php';
?>