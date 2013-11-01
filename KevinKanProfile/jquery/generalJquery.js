$(document).ready(function() {
	$("#toggleMobileDesktop").click(function(){
		var value = $("#toggleMobileDesktop").attr('val');
		$.ajax ({
			type: "POST",
			url: "scripts/forceState.php",
			data:{"changeState":value},
			dataType:'json',
			success: function(result){
				if (result.forceState!=value){
					alert("Sorry there was a problem loading the Site, the state was changed to "+result.forceState);
				}
				else 
					{window.location.reload();}
			},
			error: function(){
				alert("Sorry there was a problem loading the Site.");
			}
		})
	})//end click of toggleMobileDesktop
})