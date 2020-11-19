<?php 
	session_start();
	$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
	<head>
	
		<meta name="viewport" content="width=device-width , initial-scale=1.0" >
		<title></title>
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="style/chatroom.css" >
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script>
	</head>
	<body>
		<header class="hhh">
			<p style="background:none; padding:0 !important;"  class="abc center p" >Welcome <?php echo $user;?></p>
		</header>
		<div class="show-chat" id="show"  ></div>
		<div class="field" >
			<div class="input-group input-group-lg" >
				<input type="text" class="form-control" id="input"  placeholder="Type your message" autocomplete="off" >
				<div class="input-group-append">
					<button class="btn btn-outline-warning" id="send" >send</button>
			</div>
		</div>
		<script src="script/chatroom.js" type="text/javascript"></script>
	</body>
</html>
