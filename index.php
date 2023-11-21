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

    <section class="jumbotron text-center">
        <h1 class="display-4 pt-5 mt-5 fw-bolder">
            SMA CODING
        </h1>
        <h3>Your Favorite School</h3>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L80,234.7C160,213,320,171,480,176C640,181,800,235,960,250.7C1120,267,1280,245,1360,234.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
      </section>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>