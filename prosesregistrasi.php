<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "db_user";

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */
$password = "";

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);


function registrasi($data)
{
    global $conn;

    $nama = strtolower(stripslashes($data["name"]));
    $nomor_handphone = $data["phone"];
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //check if email already exists
    $result = mysqli_query($conn, "SELECT email from user where email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Email sudah terdaftar');
            </script>";
        return false;
    }
    //check if password is same
    if ($password !== $password2) {
        echo "<script>
            alert('Konfirmasi password tidak sama');
            </script>";
        return false;
    }
    //encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //insert into database
    mysqli_query($conn, "INSERT INTO user VALUES(NULL,'$nama','$nomor_handphone','$email','$password')");
    return mysqli_affected_rows($conn);
}


function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);

    if ($nama == "") {
        echo "<script>
            alert('Nama tidak boleh kosong');
            </script>";
        return false;
    }

    $kelahiran = upload("kelahiran");
    $suratnikah = upload("suratnikah");
    $kk = upload("kk");
    $ktp = upload("ktp");

    //upload

    $query = "INSERT INTO akta VALUES (NULL, '$nama','$kelahiran', '$suratnikah', '$kk', '$ktp')";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "<script>
    alert ('data berhasil ditambahkan!');
    document.location.href = 'akta1.php';
    </script>";
    } else {
        echo "<script>
      alert('data gagal di tambahkan');
      document.location.href ='akta.php';
    </script>";
    }
}


function upload($name)
{
    if (isset($_FILES[$name])) {
        $file = $_FILES[$name];
        if ($file["error"] == 4) {
            echo "<script>
            alert('Tidak ada file yang diupload');
            </script>";
            return false;
        }
        //cek apakah yang diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $file['name']);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
        alert('yang anda upload bukan gambar');
        document.location.href = 'akta.php';
        </script>";

            return false;
        }
        //cek jika ukuran gambar terlalu besar
        if ($file["size"] > 10000000) {
            echo "<script>
        alert('ukuran gambar terlalu besar');
        document.location.href = 'akta.php';
        </script>";

            return false;
        }
        //generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        move_uploaded_file($file['tmp_name'], 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }
}
