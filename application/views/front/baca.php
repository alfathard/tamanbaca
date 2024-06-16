<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/baca.css') ?>">
    <title>Taman Baca - Detail Artikel</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
			<img src="<?= base_url()?>assets/img/tamanbaca.svg">
            <ul>
				<li><a href="<?= base_url('/') ?>">Beranda</a></li>
				<li><a href="<?= base_url('aboutus') ?>">Tentang Kami</a></li>
				<li><a href="<?= base_url('baca') ?>">Baca</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <img src="<?= base_url('assets/blog/'.$data->foto) ?>" alt="Hero Image">
        <div class="hero-overlay">
            <h1><?= ucwords($data->judul) ?></h1>
			<p>Posted by <b><?= $data->uploader ?></b> pada <b><?= DateFormat($data->tanggal, 'd M Y') ?></b></p>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <section class="content">
            <article>
			<?= $data->isi ?>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Taman Baca. All Rights Reserved.</p>
    </footer>
</body>
</html>



