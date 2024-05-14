<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang Toko Sinar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #e0f7fa
        }
        header {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        nav {
            margin: 20px;
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h3>Barang yang tersedia</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah barang</a>
    </nav>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Merek</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barang";
            $query = mysqli_query($db, $sql);
            while ($barang = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$barang['no']."</td>";
                echo "<td>".$barang['merek']."</td>";
                echo "<td>".$barang['warna']."</td>";
                echo "<td>".$barang['jumlah']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id=".$barang['no']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$barang['no']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>

