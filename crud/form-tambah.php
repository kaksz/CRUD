<!DOCTYPE html>
<html>
<head>
    <title>Toko Maju Sejahtera Bersinar Jaya Abadi</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan Barang</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

        <p>
            <label for="jenis">Jenis: </label>
            <input type="text" name="jenis" placeholder="jenis" />
        </p>
        <p>
            <label for="merk">Merk: </label>
            <input type="text" name="merk" placeholder="merk" />
        </p>
        <p>
            <label for="warna">Warna: </label>
            <input type="text" name="warna" placeholder="warna" />
        </p>
        <p>
            <label for="tipe">Tipe: </label>
            <input type="text" name="tipe" placeholder="tipe" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </form>

    </body>
</html>