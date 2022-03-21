<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Toko Maju Sejahtera Bersinar Jaya Abadi</title>
</head>

<body>
    <header>
        <h3>Barang yang tersedia</h3>
    </header>

    <nav>
        <a href="form-tambah.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Jenis</th>
            <th>Merk</th>
            <th>Warna</th>
            <th>Tipe</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM elektronik";
        $query = mysqli_query($db, $sql);

        while($elektronik = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$elektronik['id']."</td>";
            echo "<td>".$elektronik['jenis']."</td>";
            echo "<td>".$elektronik['merk']."</td>";
            echo "<td>".$elektronik['warna']."</td>";
            echo "<td>".$elektronik['tipe']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$elektronik['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$elektronik['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>