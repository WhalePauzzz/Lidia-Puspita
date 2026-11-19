<?php $halaman_aktif = "home"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Rhinitis Alergi - Beranda</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="judul-web">Portal Edukasi Rhinitis Alergi</div>
    <nav>
      <a href="index.php" class="<?php if($halaman_aktif=='home') echo 'aktif'; ?>">Home</a>
      <a href="profil.php" class="<?php if($halaman_aktif=='profil') echo 'aktif'; ?>">Profil Penyakit</a>
      <a href="gejala.php" class="<?php if($halaman_aktif=='gejala') echo 'aktif'; ?>">Gejala Penyakit</a>
      <a href="penyebab.php" class="<?php if($halaman_aktif=='penyebab') echo 'aktif'; ?>">Penyebab &amp; Faktor Risiko</a>
      <a href="pencegahan.php" class="<?php if($halaman_aktif=='pencegahan') echo 'aktif'; ?>">Pencegahan</a>
      <a href="penanganan.php" class="<?php if($halaman_aktif=='penanganan') echo 'aktif'; ?>">Penanganan</a>
      <a href="konsultasi.php" class="<?php if($halaman_aktif=='konsultasi') echo 'aktif'; ?>">Konsultasi</a>
      <a href="kontak.php" class="<?php if($halaman_aktif=='kontak') echo 'aktif'; ?>">Kontak</a>
    </nav>
  </header>

  <main class="container">
    <h1>Mengenal Rhinitis Alergi</h1>
    <p>Selamat datang di website informasi kesehatan mengenai <strong>Rhinitis Alergi</strong> (sering disebut alergi hidung atau <em>hay fever</em>).</p>

    <img class="banner-img" src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=900&q=80" alt="Ilustrasi kesehatan pernapasan dan perawatan medis">

    <div class="kotak-info">
      <strong>Pengenalan Singkat:</strong> Rhinitis alergi adalah peradangan pada lapisan dalam hidung yang terjadi ketika sistem kekebalan tubuh bereaksi berlebihan terhadap zat pemicu alergi (alergen) yang terhirup, seperti debu rumah, serbuk sari, atau bulu hewan.
    </div>

    <p>Meski tidak menular, keluhan bersin-bersin, hidung tersumbat, dan pilek encer akibat rhinitis alergi bisa mengganggu tidur, konsentrasi belajar, dan aktivitas sehari-hari.</p>

    <p>Silakan pilih menu di atas untuk membaca informasi lengkap mulai dari profil penyakit, gejala, pemicu, pencegahan, penanganan, hingga form konsultasi.</p>
  </main>

  <footer>
    <p>Website Edukasi Rhinitis Alergi | Sumber referensi: Kemenkes RI &amp; WHO</p>
  </footer>
</body>
</html>