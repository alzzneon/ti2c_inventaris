<?php
include("config.php");

// Kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM barang WHERE no=$id";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Barang Toko Sinar</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Barang</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="no" value="<?php echo $barang['no'] ?>" />
            <p>
                <label for="merek">Merek: </label>
                <input type="text" name="merek" placeholder="Merek barang" value="<?php echo $barang['merek'] ?>" />
            </p>
            <p>
                <label for="warna">Warna: </label>
                <input type="text" name="warna" placeholder="Warna barang" value="<?php echo $barang['warna'] ?>" />
            </p>
            <p>
                <label for="jumlah">Total Barang: </label>
                <input type="number" name="jumlah" placeholder="angka" value="<?php echo $barang['jumlah'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>

