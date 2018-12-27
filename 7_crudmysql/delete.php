<?php
include('config.php');

$id=$_GET['id'];

$hapus=mysqli_query($koneksi,"DELETE FROM siswa where id = $id ");

header("Location:data.php");

?>