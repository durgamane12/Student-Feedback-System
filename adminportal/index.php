<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../scripts/material.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Product+Sans:500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../styles/material.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="icon" type="image/png" href="../images/logo.png">
	<title>Faculty portal | Student Feedback System</title>

	<style>
.header{
  background-color: red;
}
body{
  background-image:
url('7.jpg');
}
</style>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base">
	<?php
		if (isset($_GET["logout"])){
			if ($_GET["logout"] == 1){
				session_start();
				session_destroy();
			}
		}
	?>
	<center>
<h3>KLE DR. M.S. SHESHGIRI COLLEGE OF ENGINNERING AND TECHNOLOGY</h3>
<h4>DEPARTMENT OF COMPUTER SCIENCE ENGINEERING</h4>
<h5>CSE FEEDBACK LOGIN PAGE</h5>
	<div class="mdl-grid mdl-grid--no-spacing mdl-layout mdl-js-layout">
		<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone flex-center">
			<a href="teacherslogin">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
					Faculty Log in
				</button></a>
		</div>
		<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone flex-center">
			<a href="hodslogin">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
					HOD Log in
				</button></a>
		</div>
		<div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone flex-center">
			<a href="../index.php">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
					Student Log in
				</button></a>
		</div>
	</div>
	</center>
</body>

</html>
