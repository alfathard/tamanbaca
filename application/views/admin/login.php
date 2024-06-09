<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="<?= base_url('')?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url('')?>assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('')?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('')?>assets/css/atlantis.css">
</head>
<body class="login">
<div class="wrapper wrapper-login">
	<div class="container container-login animated fadeIn">
		<h3 class="text-center">Log In To Admin</h3>
		<div class="login-form">
			<form method="post" action="<?= base_url('login/process')?>">
				<div class="form-group">
					<label for="username" class="placeholder"><b>Username</b></label>
					<input id="username" name="username" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password" class="placeholder"><b>Password</b></label>
					<div class="position-relative">
						<input id="password" name="password" type="password" class="form-control" required>
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
				</div>
				<div class="form-group form-action-d-flex mb-3">
<!--					<a href="#" class="btn btn-primary col-md-12 float-right mt-3 mt-sm-0 fw-bold">Sign In</a>-->
					<input type="submit" class="btn btn-primary col-md-12 float-right mt-3 mt-sm-0 fw-bold" value="Log In">
				</div>
			</form>
		</div>
	</div>
</div>
<script src="<?= base_url('')?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('')?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('')?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url('')?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url('')?>assets/js/atlantis.min.js"></script>
</body>
</html>
