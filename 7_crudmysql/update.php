<?php
include('config.php');
echo"data masuk update";
// selalu memasukkan include config.php untuk berkoneksi ke dalam database
if(isset($_POST['edit'])){
    //isset diatas untuk mengecek submit dengan value edit ketika
    //buka value edit akan terjadi error karena tidak sesuai
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $telepone = $_POST['telepon'];

    // echo"data :".$id;
    // echo"data :".$nama;
    // echo"data :".$password;
    // echo"data :".$telepone;

    $hasil = mysqli_query($koneksi,"UPDATE siswa SET nama='$nama', password='$password', telepone='$telepone' WHERE id='$id'");
    if($hasil){
        header("location:data.php");
    }else{
        die('gagal melakukan update');
    }
    // ketika update selalu di ingat UPDATE nama tabel dan set berdasarkan id
}else{
    die("akses dilarang ....");  
}
// yang masih belum terjemahkan karena password dikira sebagai fungsi tetapi bisa jalan
?>