<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />

	<link rel="shortcut icon" href="favicon.ico">
	<title><?= $title; ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css" />

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css" />
</head>

<body>
	<div id="app">
		<section class="section">
			<div class="container mt-2">
				<div class="row">
					<div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
						<div class="login-brand">
							<img src="<?= base_url(); ?>assets/img/logo_pp.png" alt="logo" width="100" class="shadow-light rounded-circle" />
							<h4 class="mt-4">POLANSIS</h4>
							<p class="mt-4 text-sm h6">Poin Pelanggaran Siswa</p>
						</div>

						<div class="card card-primary">
							<div class="card-header">
								<h4>Login</h4>

							</div>
							<div class="card-body">

								<?= $this->session->flashdata('message'); ?>

								<form method="POST" action="<?= base_url('auth') ?>">
									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" />
										<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
									</div>

									<div class="form-group">
										<div class="d-block">
											<label for="password" class="control-label">Password</label>
											<!-- <div class="float-right">
												<a href="<?= base_url('Auth/lupa_password') ?>" class="text-small">
													Lupa Password?
												</a>
											</div> -->
										</div>
										<input id="password" type="password" class="form-control" name="password" />
										<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-warning btn-lg btn-block" tabindex="4">
											Login
										</button>
									</div>
								</form>
							</div>
						</div>
						<div class="mt-5 text-muted text-center">
							Belum Punya Akun?
							<a href="<?= base_url('Auth/registrasi') ?>">Buat Akun</a>
						</div>
						<div class="simple-footer">
							Copyright &copy;
							<a href="http://instagram.com/andikha.dian16" target="_blank" rel="noopener noreferrer">Andikha Dian Nugraha</a>
							2020
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- General JS Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/stisla.js"></script>

	<!-- JS Libraies -->

	<!-- Template JS File -->
	<script src="<?= base_url(); ?>assets/js/scripts.js"></script>
	<script src="<?= base_url(); ?>assets/js/custom.js"></script>

	<!-- Page Specific JS File -->
</body>

</html>