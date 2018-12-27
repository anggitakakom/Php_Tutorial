<?php
if(isset($_POST['tambah'])){
    include('config.php');

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $telepon = $_POST['telepon'];

    $data= mysqli_query($koneksi,"INSERT INTO siswa VALUES('$id', '$nama', '$password', '$telepon')")or die(mysqli_error($koneksi));

    if($data){
        echo " data berhasil simpan :"."<a href='data.html'>lihat data</a>";
        
    }else{
        echo"data tikdak berhasil disimpan";
    }
}
else{
    echo"salah post";
}

//catatan dalam php perlu di ingat 
// include untuk memasukkan dari file lain
// untuk dapat dikirim harus di ikutkan lagi file koneksinya
// dan harus sesuai dengan jumlah row yang ada di dalam database
// bahasa php case sensitive bedakan antara "" dan ''(untuk link dan data)

?>
