<?php
	include "con.php";
	session_start();
	$user = $_SESSION['user'];
	$msg = $con->query("SELECT * FROM chat");
?>
<html style="width:100%; height:70vh; "  >
	<head>
		<title></title>
		<meta name= >
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width , initial-scale=1.0" >
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script>
		<style type="text/css">
		
		body{
			margin:0;
			padding:0;
			width:100vw;
			height:50vh;
			background-color:#000117;
		}
		.right{
			text-align:right;
			width:50%;
			margin-left:50%;
			direction:rtl;
			color:white;
			padding-right:1.7vw;
		}
		.msg{
			padding:.5vw;
		}
		header{
			position: sticky;
			top:0;
			padding:1.7vh;
			height:7vh;
			background:orange;
			width:100%;
			z-index:100;
			margin-bottom:1vh;
		}
		.left{
			width:50%;
			direction:ltr;
			text-align:left;
			color:white;
			padding-left:1.7vw;
		}
		p{
			display:inline-block;
			padding:1vw;
			background:#114;
			border-radius:10px;
			line-break:word-ap;
			
		}
		.form-control:focus{
			border-color:orange;
			box-shadow:none;
			outline:none;
			background-color:#000;
			z-index:5 !important;
		}
		.form-control{
			background-color:#000;
			border-color:#666;
		}
		.ab{
			padding:1vw;
			background:#333;
			border-radius:20%;
		}
		</style>
	</head>
	<body>
		<div class="chat" >
			<?php
				foreach($msg as $row)
				{
					if($row['username'] == $user)
					{
						 echo "<div class='right'><p><span class='text-warning'>$user: </span>".$row['comment']."</p></div>";
					}
					else 
					{
						echo "<div class='left'><p><span class='text-success'>".$row['username'].": </span>".$row['comment']."</p></div>";;
					}
				}
			?>
		</div>
	</body>
</html>
