<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		
	}
	else{
		echo 'Invalid User Credentials' ;
		exit();
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


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		
			$(document).ready(function(){
			
			var xhttp;
			xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("token_to_be_added").setAttribute('value', this.responseText) ;
				}
			};
			
			xhttp.open("GET", "csrf_token_generator.php", true);
			xhttp.send();
		
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
