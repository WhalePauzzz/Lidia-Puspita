<?php $halaman_aktif = "gejala"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gejala Penyakit - Rhinitis Alergi</title>
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
    <h1>Tanda dan Gejala Rhinitis Alergi</h1>
    <p>Gejala rhinitis alergi umumnya muncul tidak lama setelah seseorang terpapar zat pemicu alergi.</p>

    <div class="grid-dua">
      <div class="card">
        <h2>Gejala Awal / Khas</h2>
        <ul>
          <li>Bersin-bersin beruntun, terutama di pagi hari atau saat bangun tidur.</li>
          <li>Hidung meler dengan cairan encer dan bening.</li>
          <li>Gatal pada hidung, langit-langit mulut, atau tenggorokan.</li>
          <li>Hidung terasa tersumbat.</li>
        </ul>
      </div>

      <div class="card">
        <h2>Gejala Lanjutan / Penyerta</h2>
        <ul>
          <li>Mata merah, gatal, atau mudah berair.</li>
          <li>Lendir mengalir ke belakang tenggorokan (<em>post-nasal drip</em>) yang memicu batuk ringan.</li>
          <li>Tidur terganggu karena hidung tersumbat di malam hari.</li>
          <li>Mudah lelah, sakit kepala ringan, atau sulit konsentrasi akibat kurang tidur.</li>
        </ul>
      </div>
    </div>

    <div class="kotak-info">
      <strong>Catatan:</strong> Jika tidak ditangani dengan baik, peradangan yang berulang dapat berkaitan dengan gangguan tidur, infeksi sinus, atau kambuhnya asma pada penderita yang memiliki riwayat asma.
    </div>
  </main>

  <footer>
       <p>&copy;Lidia Puspita - 250205030 - D3RMIK</p>
  </footer>
</body>
</html>
