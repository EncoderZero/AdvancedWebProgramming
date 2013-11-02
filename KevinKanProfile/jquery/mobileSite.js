var mobile = true;
$(document).ready(function() {
	$('nav').hide();//initially hide the nav if this file loads so that if this file breaks nav is avalible
	$("#toggleNav").click(function(){
		$('nav').slideToggle('slow');
	})//end click of toggleNav
})