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
							<a class="btn btn-primary float-right" style="color: white!important;"
							   href="<?= base_url('bacaan/create') ?>">Tambah</a>
						</div>

					</div>
					<div class="card-body">
						<table class="table table-striped" id="basic-datatables">
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
							foreach ($data as $d) {
								?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $d->judul ?></td>
									<td><?= ucwords($d->kategori) ?></td>
									<td><?= substr_replace(strip_tags($d->isi), "...", 40) ?></td>
									<td>
										<a href="<?= base_url('bacaan/edit/' . $d->id) ?>" id="<?= $d->id ?>"
										   class="btn btn-sm btn-secondary">Edit</a>
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
