<?php
session_start();
$show="home";
exec('grep user /root/auth.txt |awk -F"=" \'{print $2}\'',$user);
exec('grep passwd /root/auth.txt |awk -F"=" \'{print $2}\'',$pass);
if ($_GET['login']) {
     if ($_POST['username'] == $user[0]
         && $_POST['password'] == $pass[0]) {
         $_SESSION['loggedin'] = 1;
         header("Location: index.php");
         exit;
     } else 
echo '<script type="text/javascript">
alert("Username atau Password salah!");
</script>';
}
echo '<!DOCTYPE>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="img/ico.png">
		<title>Xderm Mini</title>
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script></head>
	<style>
		body{
			font-family: sans-serif;
			background-image: url(img/background.jpg);
			background-size: cover;
			-webkit-background-size: cover;
			background-repeat: no-repeat;
		}

		.header_login {
			text-align: center;
			text-transform: uppercase;
		}

		.box_login {
			width: 450px;
			border: none;
			border-radius: 10px;
			margin: 5% auto;
			padding: 1px 20px;
			box-shadow: 0px 0px 5px 2px #132130
;
		}
		
		label{
			font-size: 11pt;
			font-weight: bold;
			color: #000;
			
		}
		
		hr {
			color: #132130
;
		}

		.form_login {
			box-sizing : border-box;
			width: 100%;
			padding: 8px;
			font-size: 11pt;
			margin-bottom: 10px;
			border: 2px solid #132130
;
			border-radius: 5px;
			background: hsla(0, 0%, 100%, .3);
		}

		.btn_login {
			-moz-appearance: none;
			background: #00ACD0;
			color: #000;
			font-size: 12pt;
			width: 100%;
			border: 2px solid #00ACD0 ;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
		}
		
		.btn_login:hover, .btn_login:focus {
			color: #000000;
			outline: 0;
		}
		.geser {
			border-color: #00ACD0;
			color: #ffffff;
			padding: 8px 20px;
			background-image: linear-gradient(45deg, #132130 50%, transparent 50%);
			background-position: 100%;
			background-size: 400%;
			transition: background 300ms ease-in-out;
		}
		
		.geser:hover {
			 background-position: 0;
		}
		
		.footer {
			width: 100%;
			height: 50px;
			display: flex;
			justify-content: center;
			align-items: center;
			color: #ffffff;
			font-weight: bold;
			position: fixed;
			bottom: 0px;
			z-index: 1;
			background: repeating-linear-gradient(-45deg, red 0%, yellow 7.14%, rgb(0,255,0) 14.28%,
						rgb(0,255,255) 21.4%, cyan 28.56%, blue 35.7%, magenta 42.84%, red 50%);
			background-size: 600vw 600vw;
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			animation: slide 10s linear infinite forwards;
		}
		
		@keyframes slide {
			0% {background-position-x: 0%;}
			100% {background-position-x: 600vw;}
		}	
		
</style>';
if ($show == "home"){
	echo'
<body>
	<div class="box_login">
		<div>
			<p class="header_login"><img src="img/image.png"></p>

			<form action="?login=1" method="post">
				<label>Username</label>
				<input type="text" autofocus name="username" class="form_login" placeholder="Username">
				<hr>
				<label>Password</label>
				<input type="password" autofocus name="password" class="form_login" placeholder="Password">
			
				<button type="submit" class="btn_login geser">LOGIN</button>
			</form>
		</div>
	</div>
	<div class="footer slide">
        Theme Design by Agus Sriawan<br>
		Copyright&copy Ryan Fauzi
    </div>';
}
    session_unset();
    session_destroy();
?>
