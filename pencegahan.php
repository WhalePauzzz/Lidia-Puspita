<?php $halaman_aktif = "pencegahan"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pencegahan - Rhinitis Alergi</title>
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
    <h1>Upaya Pencegahan Rhinitis Alergi</h1>

    <h2>Cara Mencegah Kekambuhan</h2>
    <ul>
      <li>Ganti seprai dan sarung bantal secara rutin serta jemur kasur/bantal bila memungkinkan.</li>
      <li>Bersihkan kamar dan lantai secara berkala (lebih baik menggunakan kain lembap atau penyedot debu agar debu tidak beterbangan).</li>
      <li>Gunakan masker saat membersihkan rumah atau berada di area berdebu.</li>
      <li>Mandilah dan ganti baju setelah beraktivitas di luar ruangan yang berdebu atau berangin.</li>
    </ul>

    <h2>Pola Hidup Sehat &amp; Menjaga Kesehatan</h2>
    <ul>
      <li>Hindari asap rokok dan kurangi paparan polusi udara.</li>
      <li>Jaga ventilasi rumah tetap baik dan kendalikan kelembapan ruangan.</li>
      <li>Penuhi kebutuhan cairan, istirahat cukup, dan kelola stres agar daya tahan tubuh terjaga.</li>
    </ul>

    <h2>Informasi Pemeriksaan dan Pelayanan Kesehatan</h2>
    <p>Jika gejala sering kambuh, penderita dapat memeriksakan diri ke puskesmas, klinik, atau dokter spesialis THT-KL. Bila diperlukan, dokter dapat menyarankan pemeriksaan penunjang seperti tes alergi (<em>skin prick test</em>) atau pemeriksaan darah spesifik untuk mengetahui pemicu pastinya.</p>
  </main>

  <footer>
    <p>Website Edukasi Rhinitis Alergi | Sumber referensi: Kemenkes RI &amp; WHO</p>
  </footer>
</body>
</html>