<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <style>
        *{
					padding: 0;
				}
				.jumbotron{
		  	background-image: url("img/home2.jfif");
				background-size: cover;
				background-position: center;
				height: 100vh;
				width: 100%;
				display:flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				text-align: center;
				padding: 0 20px;
				padding-top: 0;
			    margin-bottom:0;
		        border-radius:0;
		    	}
		    	p{
		    	padding: :;
		    	}
		    	#cont1{
		    	background-size: cover;
					background-position: center;
					padding: 0 20px;
					display:flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					text-align: center;
					height: 60vh;
		    	}
    </style>
</head>
<body>
<div class="jumbotron text-center">
		      <div class="container">

						<p><h1>WELCOME</h1></p>
						<br><br>
		        <h1>MAGNETA CAR-POOLING APPLICATION</h1>
						<br><br>
						<p><h4>PLEASE SELECT YOUR DESIGNATION<h4></p>
		        <a href="dlr.php" class="btn btn-primary">DRIVER</a>
		        <a href="plr.php" class="btn btn-primary">PASSENGER</a>
		     </div>
					<?php
					if (isset($_SESSION['usersId'])) {
					  echo '<p class="login status">You are logged in</p>';
					}
					else {
					  echo '<p class="login status">You are logged out</p>';
					}

					 ?>
      </div>
</body>
</html>