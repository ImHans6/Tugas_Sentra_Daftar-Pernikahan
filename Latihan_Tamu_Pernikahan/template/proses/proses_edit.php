<?php
    include '../../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST["nama"];
    $isi_amplop = $_POST["isi_amplop"];
    $no_telp = $_POST["no_telp"];
    $souvenir = $_POST["souvenir"];
    $alamat = $_POST["alamat"]; //membuat variabel yg diisi oleh inputan form
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $ucapan_selamat = $_POST["ucapan_selamat"];
    

    $update = mysqli_query($koneksi, "UPDATE tamu_pernikahan SET nama = '$nama', isi_amplop = '$isi_amplop', no_telp =' $no_telp', souvenir='$souvenir', alamat = '$alamat', jenis_kelamin='$jenis_kelamin', ucapan_selamat = '$ucapan_selamat' WHERE id = '$id'");
    if ($update) {
        echo "Data Berhasil Diubah, kembali ke ";
    }
?>
<a href="../tabel_tamu.php">TABEL</a>
<!-- 
    masukan data ke database = INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
    edit data yang ada di databse = UPDATE table_name SET column1 = value1, column2 = value2, ... WHERE condition;
    menampilkan data yang ada di databse = SELECT column1, column2, ... FROM table_name WHERE condition;
    menghapus data yang ada di databse = DELETE FROM table_name 
    WHERE condition;
-->