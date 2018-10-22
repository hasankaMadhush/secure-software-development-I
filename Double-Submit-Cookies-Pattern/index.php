<!DOCTYPE html>
<html>
	<head>
		<title>Double Submit Cookies Pattern</title>
		<style>
			.center {
				margin: auto;
				width: 60%;
				border: 3px solid;
				padding: 10px;
				text-align: center;
			}
			.headingCenter {
				margin: auto;
				width: 60%;
				padding: 10px;
				text-align: center;
			}
		</style>
	</head>
	<body>
	<div class="headingCenter">
			<h2 style="float:center">Double Submit Cookies Pattern - Cross Site Request Forgery</h2>
		</div>
		<div class="center">
		<form action="homepage.php" method="post">
				<div class="login">
					<h2>Login</h2>
						<div class="credentials">
								<b>Username:<b>	<input type="text" name="username" value="admin">
								<br><br>
								<b>Password:<b>	<input type="text" name="password" value="admin">
								<br><br>
						</div>
						<input type="Submit" value="Login">
				</div>
			</form>
		</div>
	</body> 
</html>

