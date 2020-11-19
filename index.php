<?php 
	session_start();
	if(isset($_POST['submit']))
	{
	$_SESSION['user'] = $_POST['username'];
	$_SESSION['name'] = $_POST['name']; 
	header('location:chatroom.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta name="viewport" content="width=device-width , initial-scale=1.0" >
	
		<title></title>
		
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="style/main.css" >
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script> 
		
	</head>
	<body>
	<!-- Login  -->
	
		<div>
			<div id="login">
				<p class="header" >ورود</p>
				<form action="" method="post"  >
					<input type="name" class="input form-control"  name="name" id="name" placeholder="نام" autocomplete="off" required >
					<input type="username" class="input form-control" id="username"   name="username" placeholder="نام کاربری"  autocomplete="off"  required >
					<input class="submit btn-outline-secondary"  type="submit" name="submit"  value="ورود" class="input"> 
				</form>
			</div>
		</div>
		
	<!-- LogIn -->
	
	</body>
</html>