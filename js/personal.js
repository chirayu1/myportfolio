$(document).ready(function(){
	$('#update').click(function(){
		var personal = $('#personal').val();

		$.ajax({
			type: "POST",
			url: 'updatePersonal.php',
			data: 'personal='+personal,
			error: function(xhr, status, error) {
				alert( "Error Message:  \r\nNumeric code is: "  + xhr.status + " \r\nError is " + error); 	},
			success: function(data){
				console.log(data);
				var data = $.parseJSON(data);
				var status = data["status"];
				var message = data["message"];
				if(status == "success")
				{
					$('#success').show();
					$('#success').html("Success! " + message);
				} else{
					$('#failed').show();
					$('#failed').html("Error: " + message);
				}
						
			}
		});
	});
});