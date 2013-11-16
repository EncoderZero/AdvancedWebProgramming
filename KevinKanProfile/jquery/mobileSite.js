/*Author Kevin Kan
 * Version 1
 * This handles the jquery mobile files
 */
var mobile = true;
$(document).bind("mobileinit", function(){
$.mobile.ajaxEnabled=false;
});
$(document).ready(function() {
	$('nav').hide();//initially hide the nav if this file loads so that if this file breaks nav is avalible
	$("#toggleNav").click(function(){
		$('nav').slideToggle('slow');
	})//end click of toggleNav
})