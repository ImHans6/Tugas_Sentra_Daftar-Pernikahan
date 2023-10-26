<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>nav</h1>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Isi_Amplop</th>
      <th scope="col">Waktu_Datang</th>
      <th scope="col">No_Telp</th>
      <th scope="col">Souvenir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis_Kelamin</th>
      <th scope="col">Ucapan_Selamat</th>
      <th scope="col">edit</th>
      <th scope="col">hapus</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
    <?php
        include'../koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM tamu_pernikahan");
        $no = 1;
        while($kolom = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $kolom['nama']; ?></td>
            <td><?php echo $kolom['isi_amplop']; ?></td>
            <td><?php echo $kolom['waktu_datang']; ?></td>
            <td><?php echo $kolom['no_telp']; ?></td>
            <td><?php echo $kolom['souvenir']; ?></td>
            <td><?php echo $kolom['Alamat']; ?></td>
            <td><?php echo $kolom['jenis_kelamin']; ?></td>
            <td><?php echo $kolom['ucapan_selamat']; ?></td>
            <td><?php echo "<a href='forms/edit_data.php?id=".$kolom['id']."'>Edit</a>";?></td>
            <td><?php echo "<a href='proses/hapus.php?id=".$kolom['id']."'>Hapus</a>";?></td>
        </tr>
    <?php
        }
    ?>
  </tbody>
  </table>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>