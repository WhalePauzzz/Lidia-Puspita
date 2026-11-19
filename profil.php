<?php $halaman_aktif = "profil"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Penyakit - Rhinitis Alergi</title>
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
    <h1>Profil Penyakit Rhinitis Alergi</h1>

    <h2>Pengertian Penyakit</h2>
    <p>Rhinitis alergi adalah reaksi alergi pada mukosa (selaput lendir) hidung yang dipicu oleh paparan alergen. Saat alergen masuk ke hidung orang yang sensitif, tubuh melepaskan zat kimia seperti histamin yang menimbulkan peradangan.</p>

    <h2>Karakteristik Penyakit</h2>
    <ul>
      <li><strong>Bukan penyakit menular:</strong> Kondisi ini berkaitan dengan respons imun individu, sehingga tidak menular lewat udara atau sentuhan.</li>
      <li><strong>Bersifat kambuhan:</strong> Keluhan biasanya muncul berulang setiap terpapar pemicu tertentu.</li>
      <li><strong>Dapat musiman atau sepanjang tahun:</strong> Ada penderita yang kambuh saat musim/cuaca tertentu (<em>seasonal</em>) dan ada yang mengalami keluhan hampir sepanjang tahun (<em>perennial</em>), misalnya karena tungau debu.</li>
    </ul>

    <h2>Informasi Umum</h2>
    <p>Rhinitis alergi dapat dialami anak-anak, remaja, maupun orang dewasa. Pada sebagian penderita, kondisi ini juga sering berdampingan dengan keluhan mata berair/gatal (konjungtivitis alergi) atau asma.</p>

    <div class="kotak-info">
      <strong>Referensi:</strong> Kementerian Kesehatan Republik Indonesia (Kemenkes RI) &amp; panduan klinis THT-KL terkait rhinitis alergi.
    </div>
  </main>

  <footer>
    <p>Website Edukasi Rhinitis Alergi | Sumber referensi: Kemenkes RI &amp; WHO</p>
  </footer>
</body>
</html>