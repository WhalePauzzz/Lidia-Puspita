<?php $halaman_aktif = "penanganan"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penanganan - Rhinitis Alergi</title>
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
    <h1>Penanganan Rhinitis Alergi</h1>
    <p>Penanganan utama rhinitis alergi adalah menghindari alergen pemicu dan meredakan peradangan di saluran hidung.</p>

    <h2>Penanganan dan Pengobatan Medis</h2>
    <ul>
      <li><strong>Irigrasi / cuci hidung dengan larutan salin:</strong> Membantu membersihkan alergen, debu, dan lendir dari rongga hidung.</li>
      <li><strong>Antihistamin:</strong> Membantu mengurangi bersin, gatal pada hidung/mata, dan pilek encer.</li>
      <li><strong>Semprotan hidung kortikosteroid:</strong> Sering digunakan untuk meredakan peradangan hidung, terutama bila hidung tersumbat cukup mengganggu (sesuai anjuran dokter).</li>
      <li><strong>Dekongestan:</strong> Membantu melegakan hidung tersumbat sementara; penggunaannya perlu berhati-hati dan tidak boleh terlalu lama agar tidak memicu sumbatan balik (<em>rhinitis medicamentosa</em>).</li>
      <li><strong>Imunoterapi alergi:</strong> Dapat dipertimbangkan oleh dokter spesialis pada kasus tertentu bila gejala sulit terkontrol dengan obat standar.</li>
    </ul>

    <div class="kotak-info">
      <strong>Anjuran Medis:</strong> Selalu baca aturan pakai obat dan konsultasikan dengan dokter atau apoteker sebelum menggunakan obat, terutama untuk anak-anak, ibu hamil, atau penderita dengan kondisi medis lain.
    </div>
  </main>

  <footer>
    <p>&copy;Lidia Puspita - 250205030 - D3RMIK</p>
  </footer>
</body>
</html>
