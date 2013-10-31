$(document).ready(function() {
	$("#toggleMobileDesktop").click(function(){
		var value = this.attr('val');
		$.ajax ({
			url: "scripts/forceState.php",
			data:{changeState:value},
			success: function(){
				windows.location.reload();
			},
			error: function(){
				alert("Sorry there was a problem loading the Site.");
			}
		})
	})//end click of toggleMobileDesktop
})