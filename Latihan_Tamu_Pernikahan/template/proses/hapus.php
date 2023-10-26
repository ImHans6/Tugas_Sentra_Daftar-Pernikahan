<?php
    include '../../koneksi.php';

   $id = $_GET['id'];
    

    $hapus = mysqli_query($koneksi, "DELETE FROM tamu_pernikahan WHERE id = '$id'");
    if ($hapus) {
        echo "Data berhasil terhapus, kembali ke";
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