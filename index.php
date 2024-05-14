<!DOCTYPE html>
<html>
<head>
    <title>Data Barang | Toko Sinar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7f;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        h3 {
            margin: 0;
        }
        h1 {
            margin: 5px 0;
        }
        nav {
            background-color: #444;
            color: white;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #555;
            border-radius: 5px;
        }
        nav ul li a:hover {
            background-color: #666;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .status-message {
            background-color: #e7f3fe;
            color: #31708f;
            padding: 10px;
            border: 1px solid #bce8f1;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .status-message.error {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }
    </style>
</head>
<body>
    <header>
        <h3>Data Barang</h3>
        <h1>Toko Sinar</h1>
    </header>
    <div class="container">
        <nav>
            <h4>MENU</h4>
            <?php if (isset($_GET['status'])): ?>
                <div class="status-message <?php echo $_GET['status'] == 'gagal' ? 'error' : ''; ?>">
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Barang telah terdata!";
                    } else {
                        echo "Maaf data yang anda masukkan salah";
                    }
                    ?>
                </div>
            <?php endif; ?>
            <ul>
                <li><a href="form-daftar.php">Input Data Barang</a></li>
                <li><a href="list-barang.php">List Data Barang</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
