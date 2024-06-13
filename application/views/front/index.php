<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
    <title>Taman Baca</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
        <img src="<?= base_url('assets/img/hero-home.jpg') ?>" alt="Hero Image">
        <div class="hero-overlay">
            <p>Selamat Datang di</p>
            <h1>TAMAN BACA</h1>
            <p>Menjelajahi dunia melalui kata-kata</p>
        </div>
    </section>

    <!-- Main Content -->
    <main>
		<?php foreach ($data as $d){?>
			<article>
				<h2><?= $d->judul ?></h2>
				<p><?= substr_replace(htmlentities($d->isi), "...", 160) ?></p>
				<p class="post-meta">Posted by <b>Taman Baca</b> pada <b><?= DateFormat($d->tanggal, 'd M Y') ?></b></p>
			</article>
			<hr>
		<?php }?>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Taman Baca. All Rights Reserved.</p>
    </footer>
</body>
</html>
