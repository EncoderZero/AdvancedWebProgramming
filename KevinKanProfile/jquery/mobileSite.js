$(document).ready(function() {
	$('#siteNav').hide();//initially hide the nav if this file loads so that if this file breaks nav is avalible
	$("#toggleNav").click(function(){
		$('#siteNav').slideToggle('slow');
	})//end click of toggleNav
})