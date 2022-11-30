<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BDS ParkingAdda - Park like a Boss">
	<meta name="author" content="Mohammed Sufian Shaikh">
	<title><?= $title ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?= base_url() ?>/public/js/bootstrap.bundle.min.js"></script>

	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: flex;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: auto;
		}

		.form-signin .checkbox {
			font-weight: 400;
		}

		.form-signin .form-floating:focus-within {
			z-index: 2;
		}

		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>

<body class="text-center">

	<main class="form-signin">
		<?php //isset($validation) ? $validation->listErrors() : '' 
		?>
		<?php echo form_open('welcome/login-do'); ?>
		<h1 class="w-100 btn btn-lg btn-danger disabled">BDS LEGAL MIS</h1>

		<?php if (isset($theError) && !empty($theError)) : ?>
			<div class="alert alert-danger" role="alert">
				<?= $theError ?>
			</div>
		<?php endif; ?>

		<?php
		$eError = !empty(form_error('username')) ? 'form-control is-invalid' : 'form-control';
		$pError = !empty(form_error('password')) ? 'form-control is-invalid' : 'form-control';
		?>
		<?php //echo validation_errors('<div class="error">', '</div>'); ?>
		<div class="form-floating">
			<input type="text" name="username" class="<?= $eError ?>" placeholder="Username" value="">
			<label for="floatingInput">Username</label>
			<div class="invalid-feedback">
				<?php echo form_error('username'); ?>
			</div>
		</div>
		<div class="form-floating">
			<input type="password" name="password" class="<?= $pError ?>" placeholder="Password" value="">
			<label for="floatingPassword">Password</label>
			
		</div>

		<!-- <div class="checkbox mb-3"><label><input type="checkbox" value="remember-me"> Remember me</label></div> -->
		<button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2013-<?= date('Y') ?></p>
		<?php echo form_close(); ?>
	</main>

</body>

</html>