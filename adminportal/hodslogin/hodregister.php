<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <script src="../../scripts/material.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Product+Sans:500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../../styles/material.min.css">
	<link rel="stylesheet" href="../../styles/main.css">
	<link rel="icon" type="image/png" href="images/logo.png">
	<title>HOD Sign up | Student Feedback System</title>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base mdl-grid mdl-grid--no-spacing mdl-layout mdl-js-layout">
	<section class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone section--center mdl-grid mdl-grid--no-spacing">
		<form action="insertdata.php" method="post">
			<div class="mdl-grid mdl-grid--no-spacing">
				<h4 class="mdl-cell mdl-cell--12-col questions">HOD sign up</h4>
				<div class="mdl-cell mdl-cell--12-col questions" style="flex-direction: column;">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="name" id="name">
						<label class="mdl-textfield__label">Name</label>
					</div>
					
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" name="password" id="password">
						<label class="mdl-textfield__label">Password</label>
						<span onclick="toggler()" class="mdl-button mdl-js-button mdl-button--icon mdl-button--accent">
							<i id="sp" class="material-icons">visibility_off</i>
						</span>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" name="repassword" id="repassword">
						<label class="mdl-textfield__label">Retype password</label>
					</div>
					<!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="college" id="college">
						<label class="mdl-textfield__label">College ID</label>
					</div> -->
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="department" id="department">
						<label class="mdl-textfield__label">Department</label>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--12-col questions">
					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
						Sign up
					</button>
				</div>
				<script>
					function toggler() {
						if (document.getElementById("sp").innerHTML == 'visibility_off') {
							document.getElementById("sp").innerHTML = 'visibility';
							document.getElementById("password").type = "text";
						} else {
							document.getElementById("sp").innerHTML = 'visibility_off';
							document.getElementById("password").type = "password";
						}
					}

				</script>
				<div class="mdl-cell mdl-cell--12-col mdl-color-text--red-a400 questions">
				</div>
			</div>
		</form>
	</section>
</body>

</html>
