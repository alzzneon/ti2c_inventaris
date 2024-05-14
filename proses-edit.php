<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {
    // Ambil data dari formulir
    $id = $_POST['no'];
    $merek = $_POST['merek'];
    $warna = $_POST['warna'];
    $total_barang = $_POST['jumlah'];
    
    // Buat query update
    $sql = "UPDATE barang SET merek='$merek', warna='$warna', jumlah='$total_barang' WHERE no=$id";
    $query = mysqli_query($db, $sql);
    
    // Apakah query update berhasil?
    if ($query) {
        // Kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // Kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
