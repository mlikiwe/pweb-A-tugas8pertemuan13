<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


<section>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h4 class="text-center">Welcome</h4>
                            <h5 class="text-center">Register Yourself</h5>
                            
<br>

                            <form for="validation" action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                    <input type="text" name = "nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Nama Lengkap" required>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
                                    <input type="text" name = "alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Alamat" required>
                                </div>

                                <div class="input-group">
                                <div class="input-group-text">
                                    <input type="radio" value="laki-laki" name="jenis_kelamin" aria-label="Radio button for following text input" >
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Laki-Laki">
                                </div>

                                <div class="input-group mb-3">
                                <div class="input-group-text">
                                    <input type="radio" value="perempuan" name="jenis_kelamin" aria-label="Radio button for following text input" >
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="Perempuan">
                                </div>

                                <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                <select class="form-select" id="inputGroupSelect01" name="agama">
                                    <option selected>Pilih...</option>
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghucu</option>
                                </select>
                                </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Sekolah Asal</span>
                                    <input type="text" name = "sekolah_asal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Sekolah Asal" required>
                                  </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Upload Foto</span>
                                    <input type="file" name = "foto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Sekolah Asal" required>
                                  </div>

                                  <div class="text-center">
                                    <button class="btn btn-success" name="daftar">Register</button>
                                  </div>

                                  <div class="text-center">
                                    <a href="index.php">Home</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

    </body>
</html>