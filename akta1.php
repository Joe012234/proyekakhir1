<?php
include('prosesregistrasi.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <header>
        <h3>Calon Mahasiswa yang sudah mendaftar </h3>
    </header>
    <nav>
        <a href="form_daftar.php"> [+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Foto Surat Kelahiran</th>
                <th>Foto Surat Nikah</th>
                <th>Foto Kartu Keluarga</th>
                <th>Foto KTP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "Select * from akta";
            $query = mysqli_query($conn, $sql);
            while ($akta = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $akta['ID'] . "</td>";
                echo "<td>" . $akta['nama'] . "</td>";
                echo "<td>" . $akta['kelahiran'] . "</td>";
                echo "<td>" . $akta['suratnikah'] . "</td>";
                echo "<td>" . $akta['kk'] . "</td>";
                echo "<td>" . $akta['ktp'] . "</td>";

                echo "<td>";
                echo "<a href='form_edit.php?id=" . $akta['ID'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id=" . $akta['ID'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <p> Total:

        <?php echo mysqli_num_rows($query) ?>
</body>

</html>