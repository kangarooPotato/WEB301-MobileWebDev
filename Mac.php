<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<title>Mac</title>
</head>

<body>
	<div id="overlay">
		<div id="lightboxWrapper">
			<div id="lightbox">
				<a href="#" id="close">X</a>
				<div id="lightboxContent"><img src="img/macicon.png" class="boximg">
					<p>Hi!</p>
					<p>Please look forward to a great function!!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div id=navigation>
			<?php
				include('includes/header.php');
			?>
		</div>

		<div id="main">
			<h4 class="title">About Mac</h4>
			<img src="img/mac1.jpg" class="imgD">
			<img src="img/mac2.jpg" class="imgM">
<!--			<img src="img/apple0.jpg" class="imgA">-->
		</div>

		<div class="row">
			<div class="col-12">
				<img src="img/finderimg.png" class="rownimg">
			</div>
		</div>

		<div class="row">
			<div class="col-4">Shop Mac</div>
			<div class="col-4">Compare all Mac models</div>
			<div class="col-4">macOS version history</div>
		</div>

		<div class="row">
			<div class="col-6">
				<p>Why Mac</p>
				<h2>Incredible power.</h2>
				<h2>Incredibly simple.</h2>
				<a id="lightboxBtn">Learn more &rarr;</a>
			</div>
			<div class="col-6">
				<p>Continuity</p>
				<h2>All your devices.</h2>
				<h2>One seamless experience.</h2>
				<a href="#" id="lightboxBtn2">Learn more &rarr;</a>
			</div>
		</div>

		<div class="footer">

			<?php
			include('includes/footer.php');
		?>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$("#mobilenav").click(function() {
				$("#nav").slideToggle("slow");
			});

			$("#lightboxBtn").click(function() {
				$("#overlay").fadeIn();
			});

			$("#lightboxBtn2").click(function() {
				$("#overlay").fadeIn();
			});

			$("#close").click(function() {
				$("#overlay").fadeOut();
			});

			$("#overlay").click(function() {
				$("#overlay").fadeOut();
			});
		});

	</script>
</body>

</html>
