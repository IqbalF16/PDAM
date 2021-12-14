<!DOCTYPE html>
<html>
<head>
	<title>Login | PDAM</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login">
		<div>
			<label><h1>Login Menu</h1></label>
		</div>
		<div>
			<form action="login.php" method="POST" onSubmit="return validasi()">
				<div>
					<label>Username&nbsp;:&nbsp;</label>
					<input class="form" type="text" name="username" id="username">
				</div>
				<div>
					<label>Password&nbsp;:&nbsp;</label>
					<input class="form" type="password" name="password" id="password">
				</div>
				<div>
					<input class="btn" type="submit" value="Login">
				</div>
			</form>
		</div>
	</div>
</body>
<script type="text/javascript">
	function validasi(){
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		if(username !="" && password!=""){
			return true;
		} else {
			alert('Username dan Password Harus Diisi!');
			return false;
		}
	}
</script>
</html>