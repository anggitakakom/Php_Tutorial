<?php
$nilai = 1;
$batas = 5;
$value = array("mobil","motor","bus","truk");

echo"loping dengan while";
echo"</br>";
while($nilai <= $batas){
    echo"data whil : $nilai </br>";
    $nilai++;
};
//loping menggunakan whi ini akan menampilkai dari $nilai
// jika $nilai belum sama dengan $batas maka akanterus ditampilkan 
?>

<?php
$nilai = 1;
$batas = 5;
echo"</br>";
echo"loping dengan do while";
echo"</br>";
do{
    echo"nilai do : $nilai </br>";
    $nilai++;
}while($nilai <= $batas);
//do while ini sama dengan while yang sangat membedakan ialah
// didalam dowhile akan di exsekusi terlebih dahulu keluaranya baru dilakukan perbandingan
//sehingga jika nilainya tidak sesuai tetap akan ada hasilnya 
?>

<?php
$nilai = 1;
$batas = 5;
echo"</br>";
echo"loping dengan for";
echo"</br>";
for ($nilai; $nilai<=$batas; $nilai++ ){
    print"data for : $nilai </br>";
};
//perulangan menggunakan for ini untuk mempersingkat baris kode lebih rapih
// dan ini yang sering digunakan dalam menampikan data dari database
?>

<?php
echo"</br>";
echo"loping dengan foreach";
echo"</br>";
foreach ($value as $nomor => $datavalue) {
    echo"$nomor.$datavalue </br>";
};
//perulangan foreach ini biasanya digunakan untuk pencarian sebauh data
// dalam pembuatan aplikasi seringdiapaki dalam search



//keseluruhan setiap loping memiliki peranan masing masing tetapi datam setiap
// aplikasi paring sering menggunakan for dan foreach 
?>