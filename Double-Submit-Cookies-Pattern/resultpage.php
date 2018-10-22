<?php
require_once 'token.php';
$token = $_POST["token"];
if(isset($_POST['updatepost'])){
	if(token::checkToken($token,$_COOKIE['csrfCookie'])){
		$written_value = $_POST['updatepost'];
	}
	else{
	echo "wrong".$_COOKIE['csrfCookie'];
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Synchronizer Token Pattern</title>
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
			<form action="home.php" method="post">
				<div class="login">
					<h2>You Wrote</h2>
						<div>
							<b><?=$written_value?><b>
						</div>
						<br>
				</div>
			</form>
		</div>
	</body> 
</html>