$("#send").click(function(){
	var message = $("#input").val();
	$("#input").val("");
	$.ajax({
		url: 'add.php',
		type: 'POST',
		data: {msg : message},
		error: function(){alert("error")}
	}); 
});
