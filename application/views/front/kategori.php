<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/kategori.css') ?>">
    <title>Kategori - Taman Baca</title>
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
                <li><a href="<?= base_url('kategori') ?>">Kategori</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay">
            <h1>Kategori Bacaan</h1>
            <p>Pilih kategori bacaan favorit Anda</p>
        </div>
        </section>

    <!-- Main Content -->
    <main>
        <div class="category-selector">
            <label for="category">Pilih Kategori:</label>
            <select id="category" name="category">
                <option value="novel">Novel</option>
                <option value="lirik">Lirik</option>
                <option value="sejarah">Sejarah</option>
            </select>
        </div>

        <div id="category-list">
            <!-- Kategori Novel -->
            <div class="category-content" id="novel">
                <h2>Kategori Novel</h2>
                <ul>
                    <li>Nasi bakar enak cuy</li>
                </ul>
            </div>

            <!-- Kategori Lirik -->
            <div class="category-content" id="lirik">
                <h2>Kategori Lirik</h2>
                <ul>
                    <li>lirik lagu seperti rahim ibu - efek rumah kaca</li>
                    <li>lirik lagu family ties - baby keem & kendrick lamar</li>
                </ul>
            </div>

            <!-- Kategori Sejarah -->
            <div class="category-content" id="sejarah">
                <h2>Kategori Sejarah</h2>
                <ul>
                    <li>sejarah qurban</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Taman Baca. All Rights Reserved.</p>
    </footer>

    <script src="<?= base_url('assets/js/kategori.js') ?>"></script>
</body>
</html>
