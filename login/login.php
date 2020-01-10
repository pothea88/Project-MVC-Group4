<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Form</title>
	<!-- icon image -->
	<link rel="icon" href="img1/icon.png">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="login/css1/style.css">
	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		body {
		background: url('login/img1/bgimage.jpg') no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		}
	</style>
</head>

<body>
	<div class="container">
		<form class="login" action="index.php?action=form_login" method="post">
			<div class="avatar">
				<img src="img1/logo.jpg" alt="Avatar" style="border-radius: 50%;" />
			</div>
			<input type="email" name="email" placeholder="Email" required>
			<i class="fa fa-user fa-2x"></i> <br /> <br />
			<input type="password" name="password" placeholder="Password" required> <i class="fa fa-lock fa-2x"></i> <br> <br>
			<input type="submit" name="submit" value="Login">
			<br /> <br />
			<input type="checkbox" name="checkbox">Remember me
			<a href="#" class="forgetpass">Forget Password?</a>
		</form>
	</div>

</body>

</html>