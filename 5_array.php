<?php
$data = array("jakarta","jogja","jaba barat");
$data1 = array("1"=>"jakarta", "2"=>"jogja", "3" =>"jawa barat");
$data2 = array(
    array("jakarta","jogja"),
    array("solo","sulawesi")
);

echo"menampilkan isi jumlah data dalam arrray";
echo count($data);
// simpel menampilkan data dalam array
echo"</br>";
echo"</br>";
echo"menampilkan array dari data id 1 setelah diurutkan array";
echo"</br>";
echo"nilai data ke 1 :".$data[1];
//dara id 1 yang akan di tampilkan dengan urutan array mulai dari [0]
echo"</br>";
echo"</br>";
echo"menampilkan array dari data id 1";
echo"</br>";
echo"nilai data ke 1 :".$data1[1];
//menampilkan array yang memiliki id 1
echo"</br>";
echo"</br>";
echo"menampilkan array dengan foreach";
echo"</br>";
foreach ($data1 as $key => $value) {
    echo"data nilai :".$key.$value."</br>";
}
//menggunakna  foreach untuk menampilkan secara otomatis key dan value akan mengambil dari data array
echo"</br>";
echo"</br>";
echo"menampilkan array multi dimensi berdasarkan id";
echo"</br>";
echo"isi dara array 00".$data2[0][0]."data array 01".$data2[0][1]."</br>";
echo"isi dara array 10".$data2[1][0]."data array 11".$data2[1][1]."</br>";
//contoh simple array 2 dimensi kalo dimensi banyak tinggal pemanggilan dari id array tersebut
?>