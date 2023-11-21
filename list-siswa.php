<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">SMA Coding
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-light" href="list-siswa.php">List Pendaftar</a>
            </li>
          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="form-daftar.php">
                  <button class="btn btn-outline-light me-2" type="button">Daftar Baru</button>
              </a>
              
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container p-5 mt-5">
      <div class="text-center">
        <h1>List Siswa yang Sudah Mendaftar</h1>
      </div>
      <table class="table table-light table-hover mt-5 text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql_script = 'SELECT * FROM users';
$sql_query = mysqli_query($db, $sql_script);

while ($siswa = mysqli_fetch_array($sql_query)) {
    echo '<tr>';
    echo '<td>'.$siswa['id'].'</td>';
    echo '<td>'.$siswa['nama'].'</td>';
    echo '<td>'.$siswa['alamat'].'</td>';
    echo '<td>'.$siswa['jenis_kelamin'].'</td>';
    echo '<td>'.$siswa['agama'].'</td>';
    echo '<td>'.$siswa['sekolah_asal'].'</td>';
    echo '<td><img src="images/'.$siswa['foto'].'" class="img-thumbnail" width="150" height="200" alt="..."/></td>';
    echo '<td> <a class="btn btn-secondary btn-sm" href="form-edit.php?id='.$siswa['id'].'">Edit</a> <a class="btn btn-danger btn-sm" href="hapus.php?id='.$siswa['id'].'">Hapus</a> </td>';
    echo '</tr>';
}
?>
        </tbody>
      </table>
      <p>Total Pendaftar = <?php echo mysqli_num_rows($sql_query); ?></p>
    </div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>  </body>
</html>