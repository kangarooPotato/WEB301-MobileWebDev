<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<title>Home</title>
</head>

<body>
	<div class="container">
		<div id=navigation>
			<?php
				include('includes/header.php');
			?>
		</div>

		<div id="main">
			<h4 class="title">Home</h4>
			<img src="img/apple1.jpg" class="imgD">
			<img src="img/apple2.jpg" class="imgM">
		</div>

		<div class="row">
			<div class="col-12">
				<img src="img/appleimg01.jpg" class="rowimg">
			</div>
		</div>

		<div class="row">
			<div class="col-3">Find a Store</div>
			<div class="col-3">Shop Online</div>
			<div class="col-3">Genius Bar</div>
			<div class="col-3">Today at Apple</div>
		</div>


		<div class="row">
			<div class="col-2">Youth Programs</div>
			<div class="col-2">Apple Store App</div>
			<div class="col-2">Financing</div>
			<div class="col-2">Apple Trade In</div>
			<div class="col-2">Order Status</div>
			<div class="col-2">Shopping Help</div>
		</div>


		<div class="footer">

			<?php
			include('includes/footer.php');
		?>
			<!--
			<div class="col1"></div>
			<div class="col2"></div>
			<div class="col3"></div>
-->
		</div>
	</div>

</body>

</html>
