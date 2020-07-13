<?php
require 'funcions.php';
$mahasiswa =mysqli_query($conn,"SELECT * FROM mahasiswa");
?>
<html>
<head>
        <title>Halaman admin</title>
</head>
<body>

<h1>DAFTAR MAHASISWA</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpedding="10" cellspacing="0">


    
    <tr>
        <th>No. </th> 
        <th>Aksi</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
  
    <td><?= $i; ?></td>
        <td> 
            <a href="">ubah</a> |
            <a href="hapus.php?id=<?=  $row["id"]; ?>" onclick="
            return confirm('Apakah Anda yakin Akan Menghapus Data Tersebut ?');">hapus</a>
        </td>
        <td><img src="img/<?=  $row["fotoo"]; ?>"width="50"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["npm"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
         

     </tr>
     <?php $i++; ?>
    <?php endforeach; ?>

</table>
</body>
</html>