<?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE id=$id");
    $hasil = mysqli_fetch_assoc($data);
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit file</title>
</head>
<body>
<form method="POST" action="update.php">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="hidden" name="id" value="<?php echo $hasil['id']; ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $hasil['password']; ?>"></td>
        </tr>
        <tr>
            <td>Telephone</td>
            <td><input type="text" name="telepon" value="<?php echo $hasil['telepone']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="edit" value="edit"></td>
        </tr>
    </table>
</form>
</body>
</html>