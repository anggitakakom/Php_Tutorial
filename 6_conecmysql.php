<!-- <?php
$server="localhost";
$username="root";
$password="";
$dbname="contoh";
// value diatas diisi berhadasarkan dari mysql biasanya ada yang ngasih password
// nanti tingal dimasukkan kedalam $password

$konek = mysqli_connect($server, $username, $password, $dbname);
//urutanya yang baik adalah server, username, password baru dbname karena sesuai dengan system php
// ketika diubah ubah misal server dikasih belakang akan terjadi error
if(!$konek){
    die("databases error".mysqli_connect_error());
    //untuk mengetahui error letak kode bila tidak ada
}
echo"koneksi berhasil";
?> -->

<?php
$konek=mysqli_connect("localhost", "root", "", "contoh");
//ini adalah koneksi ke database versi singkat agart tidak terlalu banyak kode yang dibutuhkan
if(!$konek){
    die("databes tidak konek ke tabel".mysql_connect_error());
}
echo"berhasil konek tabel";
?>

<!-- untuk kebutuhkan mempertsingkat ukuran disarankan menggunakan 
koneksi yang ke dua dan ketika sudah terbisa koneksi satu baris saja 
dan selalu di ingat untuk diletakkan dalam file konfig agar ketika pindah databases
tinggal mengganti koneksi yang ingin di tuju
-->
