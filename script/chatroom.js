$("#send").click(function(){
	var message = $("#input").val();
	$("#input").val("");
	if(message !== "")
	{
		$.ajax({
			url: 'add.php',
			type: 'POST',
			data: {msg : message},
			error : function(){alert("error")}
		}); 
	}
});
function show()
{
	$("#show").load("log.php");
}
setInterval(show , 700)