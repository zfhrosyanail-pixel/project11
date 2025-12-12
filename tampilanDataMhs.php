<?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY ID DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #b3d3ffff; 
        margin: 0;
        padding: 0;
    }

    h2 {
        text-align: center;
        color: #5ac7f6ff;
        margin-top: 30px;
    }

    .container {
        width: 90%;
        max-width: 1100px;
        margin: auto;
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 0 12px rgba(0,0,0,0.1);
        border: 2px solid #b3d3ffff;
    }

    a {
        display: inline-block;
        margin-bottom: 15px;
        padding: 8px 14px;
        background-color: #5ac7f6ff;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        font-weight: bold;
        transition: 0.2s;
    }

    a:hover {
        background-color: ;
    }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
        border-radius: 10px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        min-width: 900px; 
        background: white;
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background-color: #b3d3ffff;
        color: #fff;
        padding: 10px;
        font-size: 15px;
        text-align: left;
        white-space: nowrap;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #b3d3ffff;
    }

    tr:nth-child(even) {
        background-color: #b3d3ffff;
    }

    tr:hover {
        background-color: #b3d3ffff;
    }

    /* ---------------- RESPONSIVE ---------------- */

    @media (max-width: 768px) {
        .container {
            padding: 18px;
        }

        h2 {
            font-size: 20px;
        }

        a {
            padding: 7px 12px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 15px;
        }

        h2 {
            font-size: 18px;
        }

        a {
            width: 100%;
            text-align: center;
            padding: 10px;
        }

        th, td {
            font-size: 13px;
            padding: 8px;
        }
    }
    </style>

</head>

<body>

    <div class="container">
        <h2>Daftar Data Mahasiswa</h2>

        <a href="tambahDataMhs.php">+ Tambah Data Baru</a>

        <div class="table-responsive">
        <table>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jml Sdr</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>JK</th>
                <th>Status</th>
                <th>Hobi</th>
                <th>Email</th>
                <th>Pass</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($data)) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['tempatLahir'] ?></td>
                <td><?= $row['tanggalLahir'] ?></td>
                <td><?= $row['jmlSaudara'] ?></td>
                <td><?= $row['alamat'] ?></td>
                <td><?= $row['kota'] ?></td>
                <td><?= $row['jenisKelamin'] ?></td>
                <td><?= $row['statusKeluarga'] ?></td>
                <td><?= $row['hobi'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['pass'] ?></td>
            </tr>
            <?php endwhile; ?>

        </table>
        </div>

    </div>

</body>
</html>