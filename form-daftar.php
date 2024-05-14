<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data | Form Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #e0f7fa; 
        }
        header {
            background: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        fieldset {
            border: none;
        }
        p {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        input[type="submit"] {
            background: #0288d1; 
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0277bd; 
        }
    </style>
</head>
<body>
    <header>
        <h3>Form Barang</h3>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="no">No:</label>
                <input type="text" name="no" id="no" placeholder="Kode barang" required />
            </p>
            <p>
                <label for="merek">Merek:</label>
                <input type="text" name="merek" id="merek" placeholder="Merek barang" required />
            </p>
            <p>
                <label for="warna">Warna:</label>
                <input type="text" name="warna" id="warna" placeholder="Warna pokok" required />
            </p>
            <p>
                <label for="jumlah">Jumlah Barang:</label>
                <input type="number" name="jumlah" id="jumlah" placeholder="Angka" required />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>
        </fieldset>
    </form>
</body>
</html>

