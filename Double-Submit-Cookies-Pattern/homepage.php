<?php
if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+60*60*24*365,'/');
		setcookie('csrfCookie',$_SESSION['token'],time()+60*60*24*365,'/');
	}
	else{
		echo 'Invalid Credentials';
		exit();
	}
}
?>


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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>

	$(document).ready(function(){
		var name = "csrfCookie" + "=";
		var cookie_value = "";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				cookie_value = c.substring(name.length, c.length);
				document.getElementById("token_to_be_added").setAttribute('value', cookie_value) ;
			}
		}
	});	
	</script>
	</head>
	<body>
	<div class="headingCenter">
				<h2 style="float:center">Synchronizer Token Pattern - Cross Site Request Forgery</h2>
				<h3 style="font-color:green">Welcome Admin !!!</h3>
		</div>
		<div class="center">
			<form action="resultpage.php" method="post">
				<div class="login">
					<h2>Write Something</h2>
						<div>
							<input type="text" name="updatepost">
						</div>
						<br>
						<input type="Submit" value="Submit">
						
						<div id="div1">
						<input type="hidden" name="token" value="" id="token_to_be_added"/>
						</div>
				</div>
			</form>
		</div>
	</body> 
</html>
