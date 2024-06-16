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
					<a href="#">Tambah Data</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Form Tambah Bacaan</div>
					</div>
					<form method="post" action="<?= base_url('bacaan/create/store') ?>" enctype="multipart/form-data">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Judul</label>
										<input name="judul" type="text" class="form-control" id="email"
											   placeholder="Masukan Judul" required>
										<div class="invalid-feedback"><?= form_error('judul') ?></div>
									</div>
									<div class="form-group">
										<label>Foto</label>
										<input name="foto" type="file" class="form-control" id="foto" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kategori</label>
										<select name="kategori" class="form-control">
											<option value="sejarah">Sejarah</option>
											<option value="dongeng">Dongeng</option>
											<option value="agama">Agama</option>
											<option value="lirik">Lirik</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Isi</label>
										<span class="text-danger"><?= form_error('isi') ?></span>
										<textarea name="isi" id="editor"></textarea>
									</div>
									<input type="submit" class="btn btn-success" value="Simpan">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

