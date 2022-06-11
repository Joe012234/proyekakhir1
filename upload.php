<?php
$namaFile = $_FILES['terupload']['name'];
$namaSementara = $_FILES['terupload']['tmp_name'];

$dirUpload = "terupload/";

$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}
