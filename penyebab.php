<?php $halaman_aktif = "penyebab"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penyebab &amp; Faktor Risiko - Rhinitis Alergi</title>
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
    <h1>Penyebab dan Faktor Risiko</h1>

    <h2>Penyebab Utama</h2>
    <p>Penyebabnya adalah respons hipersensitivitas sistem imun terhadap alergen yang terhirup. Beberapa alergen yang sering memicu:</p>
    <ul>
      <li>Tungau debu rumah (pada kasur, bantal, karpet, dan tirai).</li>
      <li>Serbuk sari tanaman atau spora jamur.</li>
      <li>Bulu, serpihan kulit kering, atau air liur hewan peliharaan (seperti kucing atau anjing).</li>
      <li>Partikel alergen tertentu di lingkungan kerja.</li>
    </ul>

    <h2>Faktor Risiko</h2>
    <ul>
      <li><strong>Riwayat keluarga (genetik):</strong> Risiko lebih tinggi jika orang tua atau saudara kandung memiliki alergi.</li>
      <li><strong>Riwayat atopi lain:</strong> Memiliki asma atau eksim (dermatitis atopik).</li>
    </ul>

    <h2>Faktor Gaya Hidup dan Lingkungan</h2>
    <ul>
      <li>Paparan asap rokok (baik perokok aktif maupun perokok pasif).</li>
      <li>Polusi udara, debu jalanan, atau asap kendaraan.</li>
      <li>Ruangan yang lembap dan kurang sirkulasi udara sehingga jamur dan tungau mudah berkembang.</li>
      <li>Paparan aroma menyengat atau perubahan suhu mendadak (misalnya dari ruangan ber-AC ke udara panas).</li>
    </ul>
  </main>

  <footer>
    <p>Website Edukasi Rhinitis Alergi | Sumber referensi: Kemenkes RI &amp; WHO</p>
  </footer>
</body>
</html>