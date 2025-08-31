<?php
    include_once("koneksi_db.php");

    $result = mysqli_query($varkoneksi, "SELECT * FROM biodata ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f8f9fa;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn-add {
            display: inline-block;
            padding: 8px 20px;
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            border-radius: 4px;
            margin: 20px auto 0 auto;
            text-align: center;
            transition: background 0.2s;
        }
        .btn-add:hover {
            background-color: #218838;
            color: #fff;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #343a40;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn-detail {
            color: #ffc107;
            font-weight: bold;
        }
        .btn-detail:hover {
            color: #e0a800;
        }
        .btn-delete {
            color: #dc3545;
            font-weight: bold;
        }
        .btn-delete:hover {
            color: #bd2130;
        }
    </style>
</head>
<body>
    <h2>Daftar Biodata Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th> 
            <th>Nama</th> 
            <th>Jenis Kelamin</th> 
            <th>Tanggal Lahir</th> 
            <th>Aksi</th>
        </tr>
        <?php
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['nim']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['jk']."</td>";  
                echo "<td>".$user_data['tanggal_lahir']."</td>";
                echo "<td>
                        <a href='detail_biodata.php?nim=".$user_data['nim']."' class='btn-detail'>Detail</a>
                      </td>";
                echo "</tr>";        
            }
        ?>
    </table>
    <div style="text-align:center;">
        <a href='biodata_db.php' class='btn-add'>Tambah</a>
    </div>
</body>
</html>
