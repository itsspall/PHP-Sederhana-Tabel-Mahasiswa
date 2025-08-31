<?php
    include_once("koneksi_db.php");

    $result = mysqli_query($varkoneksi, "SELECT * FROM biodata WHERE nim='$_GET[nim]'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #333;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 15px;
            background: #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        td:first-child {
            font-weight: bold;
            width: 40%;
            background-color: #f1f1f1;
        }
        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #585858ff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php while ($detail_data = mysqli_fetch_array($result)) { ?>
        <h2>Detail Biodata</h2>
        <table>
            <tr>
                <td>NIM</td>
                <td><?= $detail_data['nim']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?= $detail_data['nama']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $detail_data['jk']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?= $detail_data['tanggal_lahir']; ?></td>
            </tr>
        </table>
        <a href="list_biodata.php" class="btn-back">Kembali ke Daftar Biodata</a>
    <?php } ?>
</body>
</html>
