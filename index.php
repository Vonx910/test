<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background-image: url("image/back.jpeg");
			background-repeat: no-repeat;
		}
		nav {
			margin-top: 15px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 10%;
		}
		nav p {
			font-size: 40px;
			font-family: Kaushan Script;
			font-style: italic;
			color: white;
		}

		i {
			margin: 5px;
			color: white;
		}

		main {
			text-align: center;
		}

		main p {
			padding-top: 200px;
			color: white;
			font-size: 60px;
		}

		main button {
			background-color: #757DFF;
			border: none;
			outline: none;
			padding: 10px;
			font-size: 30px;
			margin: 0 auto;
			color: white;
			border-radius: 5px;
			align-items: center;
			cursor: pointer;
		}

		.modal {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.2);
		}

		.modal-content {
			background-color: #202020;
			box-shadow: 0 4px 8px 0 rgba(105, 105, 105, 0.2), 0 6px 20px 0 rgba(105, 105, 105, 0.19);
			margin: auto;
			width: 60%;
		}

		.close {
			color: #aaaaaa;
			float: right;
			margin-right: 5px;
			font-size: 28px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}

	</style>

</head>
<body>
	<nav>
		<p>DvDab</p>
		<section style="font-size: 20px;">
			<a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a href="https://www.whatsapp.com/"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
			<a href="https://twitter.com/login"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</section>
	</nav>

	<main>
		<p>Welcome to DvD Dab</p><br>
		<button id="signup">Sign Up</button>
	</main>

	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<?php 
				include("signup.html");
			?>
		</div>
	</div>

	<script>
		var modal = document.getElementById("myModal");
		var btn = document.getElementById("signup");
		var span = document.getElementsByClassName("close")[0];

		btn.onclick = function() {
			modal.style.display = "block";
		}

		span.onclick = function() {
			modal.style.display = "none";
		}

		window.onclick = function(event) {
			if(event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>

</body>
</html>