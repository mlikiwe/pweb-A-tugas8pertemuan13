<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $fotobaru = date('dmYHis').$foto;

    $path = 'images/'.$fotobaru;

    // buat query
    if (move_uploaded_file($tmp, $path)) {
        $query = "INSERT INTO users (nama, alamat, jenis_kelamin,agama, sekolah_asal, foto) VALUES('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$fotobaru')";
        $sql = mysqli_query($db, $query);

        if ($sql) {
            header('location: index.php');
        } else {
            echo 'Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.';
            echo "<br><a href='new_siswa.php'>Kembali Ke Form</a>";
        }
    } else {
        echo 'Maaf, Gambar gagal untuk diupload.';
        echo "<br><a href='new_siswa.php'>Kembali Ke Form</a>";
    }

} else {
    die("Akses dilarang...");
}

?>
