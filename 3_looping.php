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
?>

<?php
echo"</br>";
echo"loping dengan foreach";
echo"</br>";
foreach ($value as $nomor => $datavalue) {
    echo"$nomor.$datavalue </br>";
};
?>