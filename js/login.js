$(document).ready(function(){
	$('#login').click(function(){
		var username = $('#InputUsername').val();
		var password = $('#InputPassword').val();

		$.ajax({
			type: "POST",
			url: 'logincheck.php',
			data: 'username='+username+'&password='+password,
			error: function(xhr, status, error) {
				alert( "Error Message:  \r\nNumeric code is: "  + xhr.status + " \r\nError is " + error); 	},
			success: function(data){
				console.log(data);
				var data = $.parseJSON(data);
				var status = data["status"];
				var message = data["message"];
				if(status == true)
				{
					window.location.href = "dashboard.php";
				}
				else
				{
					$('#failed').show();
					$('#failed').html("Error: " + message);
				}		
			}
		});
	});
});