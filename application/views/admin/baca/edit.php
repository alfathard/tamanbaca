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
					<a href="#">Edit Data</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<div class="card-title">Form Edit Bacaan</div>
					</div>
					<form method="post" action="<?= base_url('bacaan/edit/update/' . $bacaan->id) ?>"
						  enctype="multipart/form-data">
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Judul</label>
										<input name="judul" type="text" value="<?= $bacaan->judul ?>"
											   class="form-control" id="email" placeholder="Masukan Judul" required>
									</div>
									<div class="form-group">
										<label>Foto</label>
										<input name="foto" type="file" class="dropify" id="foto" data-default-file="<?= base_url('assets/blog/'. $bacaan->foto) ?>" data-max-file-size="3M" data-allowed-formats="landscape" data-max-file-size-preview="3M" data-allowed-file-extensions="png jpg jpeg">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Kategori</label>
										<select name="kategori" class="form-control">
											<option value="sejarah" <?php if ($bacaan->kategori == 'sejarah') echo 'selected' ?>>
												Sejarah
											</option>
											<option value="dongeng" <?php if ($bacaan->kategori == 'dongeng') echo 'selected' ?>>
												Dongeng
											</option>
											<option value="agama" <?php if ($bacaan->kategori == 'agama') echo 'selected' ?>>
												Agama
											</option>
											<option value="lirik" <?php if ($bacaan->kategori == 'lirik') echo 'selected' ?>>
												Lirik
											</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Isi</label>
										<textarea name="isi" id="editor"><?= $bacaan->isi ?></textarea>
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

