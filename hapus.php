<?php
include("config.php");

if (isset($_GET['no'])) {
    // Ambil id dari query string
    $id = $_GET['no'];

    // Buat query hapus
    $sql = "DELETE FROM barang WHERE no = $id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil?
    if ($query) {
        header('Location: list-siswa.php');
        exit;
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>
