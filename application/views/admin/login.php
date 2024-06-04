<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login | Taman Baca</title>
</head>
<body>
	<?php if($this->session->flashdata('message_login_error')): ?>
		<div class="invalid-feedback">
			<?= $this->session->flashdata('message_login_error') ?>
		</div>
	<?php endif ?>
	<form method="post" action="<?= base_url('login/process')?>">
		<label>Username</label>
		<input name="username">
		<label>Password</label>
		<input name="password" type="password">

		<input type="submit">
	</form>
</body>
</html>
