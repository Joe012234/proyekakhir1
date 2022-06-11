<?php
session_start();
include("prosesregistrasi.php");
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Administrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/stylesheet.css" />

    <style>
        table {
            display: table;
            border-collapse: collapse;
            margin: auto;
        }

        caption {
            margin: 20px auto;
            font-size: 22px;
            font-family: arial, sans-serif;
            font-weight: bold;
        }

        thead {
            background-color: rgb(249, 252, 43);
            color: rgb(0, 0, 0);
        }

        tbody tr:nth-child {
            background-color: grey;
        }

        tr,
        td,
        th {
            border: 1px solid black;
            text-align: center;
            font-family: calibri, arial, sans-serif;
            padding: 10px;
        }

        td {
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="" width="50" height="50" class="d-inline-block align-text-top" />
                Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Fitur</i> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="peraturan.html">Buku Peraturan Desa</a></li>
                            <li><a class="dropdown-item" href="#">Buku Agenda</a></li>
                            <li><a class="dropdown-item" href="#">Buku Ekspedisi</a></li>
                            <li><a class="dropdown-item" href="#">Buku Administrasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Login<i class="fa-solid fa-user"></i> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sign In</a></li>
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <br>
    <b>
        <p style="text-align: center">Buku Ekspedisi</p>
    </b>
    <i class="fa-solid fa-circle-arrow-left" style="display:fixed;"></i>
    <i class="fa-solid fa-circle-arrow-right" style="display:fixed;"></i>
    <table>
        <thead>
            <tr>
                <th rowspan="1">No</th>
                <th rowspan="2" width="150">Nomor Surat</th>
                <th rowspan="3" width="50">Tanggal Surat</th>
                <th rowspan="4" width="150">Dari</th>
                <th rowspan="5" width="150">Dikirim Kepada</th>
                <th rowspan="6" width="150">Perihal</th>
                <th rowspan="7" width="150">Lamp</th>
                <th rowspan="8" width="150">ket.</th>
                <th rowspan="9" width="150">File</th>
            </tr>
        </thead>
        <br>
        <tbody>
            <tr>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>
                <td>9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <!--awal komentar-->
        </tbody>
    </table><br><br>
    <form class="komentar">
        <td>Tulis komentar:</td>
        <table border="2" cellspacing="0" cellpadding="5"></table>
        <tr>
            <td><textarea cols="97" rows="5"></textarea></td>
        </tr>
        <br> <br>
        <td><input type="submit" value="Postkan Komentar" /></td>
        <td><input type="reset" value="hapus"></td>
        </tr>
        </table>
    </form><br><br>
</body>

</html>