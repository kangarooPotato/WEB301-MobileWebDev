<html>
	<head>
		<title>Simple Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style>
			* { box-sizing: border-box; font-family: helvetica, arial, sans-serif; }
			input[type=text], input[type=tel], textarea { font-size: 18px; outline: 1px solid black;}	
			button { background: #166; color: #fff; }
			button:hover { background: #222831; }
			form { display: flex; flex-wrap: wrap; }
			.fieldWrap { padding: 10px; flex-direction: column; flex: 0 50%; }
						
		@media screen and (max-width: 639px) {
			/* label {display: none;  } */
			input[type=text], input[type=tel] { font-size: 28px; width: 100%; padding: 10px; outline: none; border: none;  border-bottom: 1px solid black; margin-bottom: 20px; }
			button { width: 100%; padding: 15px; border-radius: 5px; font-size: 48px;}
			.fieldWrap { flex-direction: column; flex: 0 100%; padding: 0 10px; }
		}
		</style>
	</head>
	<body>
		<div id="message"></div>
		<form action="includes/form-action.php" method="post" name="myform" id="myForm">
			<div class="fieldWrap">
				<label for="fname">First Name</label><br>
				<input type="text" name="fname" id="fname" value="" size="30" placeholder="Your First Name">
			</div>
			<div class="fieldWrap">
				<label for="lname">Last Name</label><br>
				<input type="text" name="lname" id="lname" value="" size="30" placeholder="Your Last Name">
			</div>
			<div class="fieldWrap">
				<label for="email">Email Address</label><br>
				<input type="text" name="email" id="email" value="" size="25" placeholder="name@domain.com">
			</div>
			<div class="fieldWrap">
				<label for="phone">Phone Number</label><br>
				<input type="text" name="phone" id="phone" value="" size="15" placeholder="888-888-8888">
			</div>
			<button type="submit" value="Send email">SUBMIT</button>
		</form><br>
	</body>
</html>