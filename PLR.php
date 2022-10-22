<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
	<style type="text/css">
		*{
			font-family: sans-serif;
		}
		.hero{
			height: 150%;
			width: 100%;
			background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(img/aladin.jpg);
			background-position: center;
			background-size: cover;
			position: absolute;
		}
		.form-box{
			width: 380px;
			height: 450px;
			position: relative;
			margin: 6% auto;
			background: #fff;
			padding: 5px#;
			overflow: hidden;
			border-radius: 15px;
		}
		.button-box{
			width: 220px;
			margin: 35px auto;
			position: relative;
			box-shadow: 0 0 20px 9px #ff612141f;
			border-radius: 30px;
			transition: .5s;
		}
		.toggle-btn{
			padding: 10px 30px;
			cursor: pointer;
			background: transparent;
			border: 0;
			outline: none;
			position: relative;
		}
		#btn{
			top: 0;
			left: 0;
			position: absolute;
			width: 110px;
			height: 100%;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border-radius: 30px;
			transition: .5s;
		}
		.input-group{
			top:180px;
			position: absolute;
			width: 280px;
			transition: .5s;
		}
		.input-field{
			width: 100%;
			padding: 10px 0;
			margin: 5px 0;
			border-left: 0;
			border-top: 0;
			border-right: 0;
			border-bottom: 1px solid #999;
			outline: none;
			background: transparent;
		}
		.submit-btn{
			width: 85%;
			padding: 10px 30px;
			cursor: pointer;
			display: block;
			margin: auto;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border: none;
			border-radius: 30px;
		}
		#login{
			left: 50px;
		}
		#register{
			left: 450px;
		}
		select{
			font-size: 1rem;
			padding: 0.5em 0.5em;
			background: linear-gradient(to right, #ff105f, #ffad06);
			border: 0;
			position: relative;
		}
    </style>
</head>
<body>
<div class="hero" id="fullPage">
		<div class="form-box" id="formBox">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn"onclick="register()">Register</button>
			</div>

			<form id="login" class="input-group" action="plogin.inc.php" method="post">
				<input type="phone" name="lphone" class="input-field" placeholder="Phone Number" required="">
				<br><br>
				<input type="password" name="lpassword" class="input-field" placeholder="Password" required="">
				<br><br><br>
				<button type="submit" class="submit-btn" name="plsubmit"><b>LogIn</b></button>

			</form>

			<form id="register" class="input-group" action="plr.inc.php" method="post">
				<input type="text" name="name" class="input-field" placeholder="Full Name" required="">
				<br><br>
				<input type="email" name="email" class="input-field" placeholder="Email Address" required="">
				<br><br>
				<input type="phone" name="phone" class="input-field" placeholder="Phone-Number" required="">
				<br><br>
				<input type="password" name="rpassword" class="input-field" placeholder="Password" required="">
				<br><br>
				<input type="password" name="confirmPassword" class="input-field" placeholder="Re-Enter Password" required="">
				<br><br>

				<br><br><br>
				<button type="submit" class="submit-btn" name="prsubmit"><b>Register</b></button>

			</form>
		</div>
	</div>

	<script type="text/javascript">

		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		var w = document.getElementById("formBox");
		var v = document.getElementById("fullPage");

		function register(){
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
			w.style.height = "800px";
		}
		function login(){
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
			w.style.height = "450px";
		}


	</script>
</body>
</html>