<?php

include 'connection.php';

if (isset($_POST['daftar'])) {
    if (!empty($_POST['nrp']) && !empty($_POST['nama']) && !empty($_POST['jenis_kelamin']) && !empty($_POST['telp']) && !empty($_POST['alamat']) && !empty($_FILES['foto']['name'])) {
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        $fotobaru = date('dmYHis').$foto;

        $path = 'images/'.$fotobaru;

        if (move_uploaded_file($tmp, $path)) {
            $query = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin,agama, sekolah_asal, foto) VALUES('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$fotobaru')";
            $sql = mysqli_query($connect, $query);

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
        echo 'Maaf, Harap isi semua field yang tersedia.';
        echo "<br><a href='new_siswa.php'>Kembali Ke Form</a>";
    }
} else {
    exit('Prohibited Access');
}
