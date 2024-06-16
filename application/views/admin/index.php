<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Taman Baca</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
<!--	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>-->

	<!-- Fonts and icons -->
	<script src="<?= base_url('')?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= base_url('') ?>assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css')?>">
</head>
<body>
<div class="wrapper">
	<div class="main-header">
		<!-- Logo Header -->
		<div class="logo-header" data-background-color="blue">

			<a href="../index.html" class="logo">
				<img src="<?= base_url()?>assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
			</a>
			<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
			</button>
			<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
			<div class="nav-toggle">
				<button class="btn btn-toggle toggle-sidebar">
					<i class="icon-menu"></i>
				</button>
			</div>
		</div>
		<!-- End Logo Header -->

		<!-- Navbar Header -->
		<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

			<div class="container-fluid">
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					<li class="nav-item dropdown hidden-caret">
						<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
							<div class="avatar-sm">
								<img src="<?= base_url()?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
							</div>
						</a>
						<ul class="dropdown-menu dropdown-user animated fadeIn">
							<div class="dropdown-user-scroll scrollbar-outer">
								<li>
									<div class="user-box">
										<div class="u-text">
											<h4><?= $this->session->userdata('user')->nama ?></h4>
										</div>
									</div>
								</li>
								<li>
									<a class="dropdown-item" href="<?= base_url('logout')?>">Logout</a>
								</li>
							</div>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
	</div>
	<!-- Sidebar -->
	<div class="sidebar sidebar-style-2">
		<div class="sidebar-wrapper scrollbar scrollbar-inner">
			<div class="sidebar-content">
				<ul class="nav nav-primary">
					<li class="nav-item">
						<a href="<?= base_url('dashboard')?>">
							<i class="fas fa-book"></i>
							<p>Bacaan</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main-panel">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Bacaan</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="#">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">List Data</a>
						</li>
					</ul>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									Tabel Bacaan
									<a class="btn btn-primary float-right" style="color: white!important;" href="<?= base_url('bacaan/create')?>">Tambah</a>
								</div>

							</div>
							<div class="card-body">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Kategori</th>
										<th>Konten</th>
										<th>Opsi</th>
									</tr>
									</thead>
									<tbody>
									<?php
									$no = 1;
									foreach ($data as $d){?>
									<tr>
										<td><?= $no++?></td>
										<td><?= $d->judul ?></td>
										<td><?= ucwords($d->kategori) ?></td>
										<td><?= substr_replace(strip_tags($d->isi), "...", 40) ?></td>
										<td>
											<a href="<?= base_url('bacaan/edit/'. $d->id)?>" id="<?= $d->id ?>" class="btn btn-sm btn-secondary">Edit</a>
											<button id="<?= $d->id ?>" class="btn btn-sm btn-danger hapus">Hapus</button>
										</td>
									</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container-fluid">
				<div class="copyright ml-auto">
					2024, made with <i class="fa fa-heart heart text-danger"></i> by Wadidaw
				</div>
			</div>
		</footer>
	</div>
</div>
<script src="<?= base_url('') ?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('') ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url('') ?>assets/js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('') ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('') ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('') ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url('') ?>assets/js/atlantis.min.js"></script>
<script>
	$(".hapus").click(function(){
		var id = $(this).attr("id");
		Swal.fire({
			title: "Apakah Kamu Yakin?",
			text: "Data ini akan dihapus secara permanen",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#d33",
			confirmButtonText: "Ya, Hapus"
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: 'bacaan/delete/'+id,
					type: 'post',
					error: function() {
						alert('Something is wrong');
					},
					success: function() {
						window.location.reload()
					}
				});
			}
		});
	});
</script>
</body>
</html>
