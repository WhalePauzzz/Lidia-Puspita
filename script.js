// validasi form konsultasi di halaman konsultasi.php
function cekFormKonsultasi() {
  var nama = document.getElementById("nama").value.trim();
  var email = document.getElementById("email").value.trim();
  var telp = document.getElementById("telepon").value.trim();
  var pesan = document.getElementById("pesan").value.trim();

  if (nama === "") {
    alert("Nama wajib diisi dulu ya.");
    document.getElementById("nama").focus();
    return false;
  }

  if (email === "") {
    alert("Email wajib diisi.");
    document.getElementById("email").focus();
    return false;
  }

  // cek format email sederhana
  if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
    alert("Format email kurang tepat, contoh: nama@email.com");
    document.getElementById("email").focus();
    return false;
  }

  // bersihkan spasi/strip saat cek nomor hp
  var angkaHp = telp.replace(/[\s-]/g, "");
  if (telp === "" || angkaHp.length < 8 || isNaN(angkaHp)) {
    alert("Nomor telepon minimal 8 digit angka.");
    document.getElementById("telepon").focus();
    return false;
  }

  if (pesan.length < 10) {
    alert("Tuliskan keluhan atau pertanyaan minimal 10 karakter.");
    document.getElementById("pesan").focus();
    return false;
  }

  return true;
}