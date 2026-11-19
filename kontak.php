<?php $halaman_aktif = "kontak"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - Rhinitis Alergi</title>
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
    <h1>Informasi Kontak Pengelola Website</h1>
    <p>Jika ada masukan atau pertanyaan terkait informasi pada website ini, silakan hubungi kontak berikut:</p>

    <ul>
      <li><strong>Pengelola Website:</strong> Lidia Puspita</li>
      <li><strong>Alamat:</strong> Jl. Mutihan, Surakarta, Jawa Tengah</li>
      <li><strong>Nomor Telepon:</strong> 0831-7300-6082</li>
      <li><strong>Email:</strong> lidiapuspita0721@example.com</li>
    </ul>

    <div class="kotak-info">
      <strong>Sumber Referensi Informasi Kesehatan:</strong><br>
      1. Kementerian Kesehatan Republik Indonesia (Kemenkes RI) – Informasi Kesehatan &amp; Penyakit Tidak Menular.<br>
      2. World Health Organization (WHO) – <em>Chronic Respiratory Diseases / Allergic Rhinitis</em>.<br>
      3. Panduan Praktik Klinis Dokter / THT-KL terkait Rhinitis Alergi.
    </div>
  </main>

  <footer>
    <p>&copy;Lidia Puspita - 250205030 - D3RMIK</p>
  </footer>
</body>
</html>