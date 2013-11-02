$(document).ready(function() {
	$("#toggleMobileDesktop").click(function(){
		var value = $("#toggleMobileDesktop").attr('value');
			var value = $("#toggleMobileDesktop").attr('value');
			$.ajax ({
				type: "POST",
				url: "scripts/forceState.php",
				data:{changeState:value},
				success: function(result){
					if (result!='"'+value+'"'){
						alert("Sorry there was a problem loading the Site, the state was changed to "+result+" instead of "+value);
					}
					else 
						{window.location.reload();}
				},
				error: function(xhr,err){
					alert("Error: Sorry there was a problem loading the Site.");
				}
			})
	})//end click of toggleMobileDesktop
})