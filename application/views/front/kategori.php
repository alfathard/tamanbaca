<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/kategori.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
    <title>Taman Baca</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <div class="logo">Taman Baca</div>
            <ul>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><a href="<?= base_url('aboutus') ?>">About Us</a></li>
                <li><a href="<?= base_url('baca') ?>">Baca</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <h1>Daftar Bacaan</h1>
            <p>Pilih bacaan favorit Anda</p>
        </div>
        </section>

    <!-- Main Content -->
    <main>
        <div class="category-selector">
			<form method="post" action="<?= base_url('baca') ?>">
            <label for="category">Pilih Kategori:</label>
            <select id="category" name="category">
                <option value="all">Semua</option>
                <option value="novel" <?php if ($kategori == 'novel') echo 'selected'?>>Novel</option>
                <option value="lirik" <?php if ($kategori == 'lirik') echo 'selected'?>>Lirik</option>
                <option value="sejarah" <?php if ($kategori == 'sejarah') echo 'selected'?>>Sejarah</option>
                <option value="agama" <?php if ($kategori == 'agama') echo 'selected'?>>Agama</option>
            </select>
				<input type="submit" hidden id="subkat">
			</form>
        </div>

		<?php foreach ($data as $d){?>
			<article>
				<a href="<?= base_url('baca/'.$d->id)?>"><h2><?= $d->judul ?></h2></a>
				<p><?= substr_replace(strip_tags($d->isi), "...", 160) ?></p>
				<p class="post-meta">Posted by <b><?= $d->uploader ?></b> pada <b><?= DateFormat($d->tanggal, 'd M Y') ?></b></p>
			</article>
			<hr>
		<?php }?>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Taman Baca. All Rights Reserved.</p>
    </footer>

    <script>
		$(document).ready(function(){
			$('#category').change(function(){
				$('#subkat').click();
			});
		});
	</script>
</body>
</html>
