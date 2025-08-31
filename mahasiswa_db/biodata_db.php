<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f8fb;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: #fff;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 350px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
    }

    td {
      padding: 8px 5px;
    }

    input[type="text"],
    input[type="date"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .radio-group {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      background: #007BFF;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    input[type="submit"]:hover {
      background: #0056b3;
    }

    .btn-back {
      display: inline-block;
      padding: 10px 15px;
      background-color: #585858ff;
      color: white;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>

  <form action="biodata_db_act.php" method="post" name="tambah">
    <h2>Form Biodata</h2>
    <table border="0">
      <tr> 
        <td>NIM</td>
        <td><input type="text" name="nim" required></td>
      </tr>

      <tr> 
        <td>Nama</td>
        <td><input type="text" name="nama" required></td>
      </tr>

      <tr> 
        <td>Jenis Kelamin</td>
        <td>
          <div class="radio-group">
            <label><input type="radio" name="jk" value="L" required> Laki-laki</label>
            <label><input type="radio" name="jk" value="P" required> Perempuan</label>
          </div>
        </td>
      </tr>

      <tr> 
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tanggal_lahir" required></td>
      </tr>

      <tr> 
        <td></td>
        <td><input type="submit" name="Submit" value="Tambah"></td>
        <td><a href="list_biodata.php" class="btn-back">Kembali</a></td>
      </tr>
    </table>
  </form>

</body>
</html>
