<?php
	$con = mysqli_connect('localhost' , 'root' , 'pass' , 'chat' );
	if(!$con)
	{
		echo mysqli_connect_error();
	}
?>