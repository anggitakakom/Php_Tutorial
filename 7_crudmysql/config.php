<?php
$koneksi =mysqli_connect("localhost", "root", "", "contoh");
if(!$koneksi){
    die("konek error".mysqli_connect_error($koneksi));
}
echo"database konek";
?>