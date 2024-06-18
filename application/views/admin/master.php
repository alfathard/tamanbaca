<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Taman Baca</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
		<link rel="icon" href="<?= base_url('')?>assets/img/favi.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= base_url('')?>assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="<?= base_url('')?>assets/js/ckeditor.js"></script>
	<link rel="stylesheet" href="<?= base_url('')?>assets/js/plugin/dropify/css/dropify.min.css">
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
	<style>
		.ck-editor__editable_inline {
			min-height: 400px;
		}
	</style>
</head>
<body>
<div class="wrapper">
	<div class="main-header">
		<!-- Logo Header -->
		<div class="logo-header" data-background-color="blue">

			<a href="<?= base_url('')?>" class="logo">
				<img src="<?= base_url()?>assets/img/tamanbaca.svg" alt="navbar brand" class="navbar-brand">
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
		<?php if (isset($content)) $this->load->view($content) ?>
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
<script src="<?= base_url('') ?>assets/js/plugin/datatables/datatables.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('') ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('') ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('') ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url('') ?>assets/js/atlantis.min.js"></script>
<script src="<?= base_url('')?>assets/js/plugin/dropify/js/dropify.min.js"></script>
<script>
	$('.dropify').dropify();
	ClassicEditor
		.create( document.querySelector( '#editor' ),{
			toolbar : [
				'undo', 'redo',
				'|', 'bold', 'italic', 'link', 'heading' ,
				'|', 'alignment:left', 'alignment:right', 'alignment:center', 'alignment:justify',
				'|', 'numberedList', 'bulletedList', 'blockQuote', 'outdent', 'indent'],
			language : 'en'
		} )
		.then( editor => {
			console.log( 'Editor was initialized', editor );
		} )
		.catch( error => {
			console.error( 'Error occurred', error );
		} );
</script>
<script>
	$('#basic-datatables').DataTable();

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
