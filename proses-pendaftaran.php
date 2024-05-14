<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $merek = $_POST['merek'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];
    
    // Buat query
    $sql = "INSERT INTO barang (merek, warna, jumlah) VALUE ('$merek', '$warna', '$jumlah')";
    $query = mysqli_query($db, $sql);
    
    // Apakah query simpan berhasil?
    if ($query) {
        // Kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
