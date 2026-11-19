<?php
$halaman_aktif = "konsultasi";
$terkirim = false;
$error_server = "";
$nama = "";
$email = "";
$telepon = "";
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars(trim($_POST["nama"] ?? ""));
  $email = htmlspecialchars(trim($_POST["email"] ?? ""));
  $telepon = htmlspecialchars(trim($_POST["telepon"] ?? ""));
  $pesan = htmlspecialchars(trim($_POST["pesan"] ?? ""));

  if ($nama === "" || $email === "" || $telepon === "" || $pesan === "") {
    $error_server = "Semua kolom wajib diisi.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_server = "Alamat email tidak valid.";
  } else {
    $terkirim = true;
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konsultasi &amp; Informasi - Rhinitis Alergi</title>
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
    <h1>Form Konsultasi &amp; Permintaan Informasi</h1>
    <p>Silakan kirimkan pertanyaan atau informasi keluhan terkait rhinitis alergi melalui formulir di bawah ini. <em>(Catatan: fitur ini bersifat edukasi/informasi awal dan bukan pengganti pemeriksaan dokter langsung.)</em></p>

    <?php if ($error_server !== ""): ?>
      <div class="kotak-info">
        <strong>Perhatian:</strong> <?php echo $error_server; ?>
      </div>
    <?php endif; ?>

    <?php if ($terkirim): ?>
      <div class="pesan-sukses">
        <strong>Pertanyaan/pesan berhasil dikirim!</strong><br>
        Nama: <?php echo $nama; ?><br>
        Email: <?php echo $email; ?><br>
        No. Telepon: <?php echo $telepon; ?><br>
        Pesan: <?php echo nl2br($pesan); ?>
      </div>
    <?php endif; ?>

    <form action="konsultasi.php" method="post" onsubmit="return cekFormKonsultasi();">
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="<?php echo $terkirim ? '' : $nama; ?>" placeholder="Masukkan nama Anda">
      </div>

      <div class="form-group">
        <label for="email">Alamat Email</label>
        <input type="email" id="email" name="email" value="<?php echo $terkirim ? '' : $email; ?>" placeholder="contoh@email.com">
      </div>

      <div class="form-group">
        <label for="telepon">Nomor Telepon / WhatsApp</label>
        <input type="tel" id="telepon" name="telepon" value="<?php echo $terkirim ? '' : $telepon; ?>" placeholder="08xxxxxxxxxx">
      </div>

      <div class="form-group">
        <label for="pesan">Pesan / Keluhan / Pertanyaan</label>
        <textarea id="pesan" name="pesan" placeholder="Tuliskan keluhan atau informasi yang ingin ditanyakan..."><?php echo $terkirim ? '' : $pesan; ?></textarea>
      </div>

      <button type="submit">Kirim Pesan</button>
    </form>
  </main>

  <footer>
    <p>Website Edukasi Rhinitis Alergi | Sumber referensi: Kemenkes RI &amp; WHO</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>