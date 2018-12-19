<?php
$nilai = 7;
$nilai2 = 3;

echo"bagian if else </br>";

if($nilai2 == $nilai){
    echo"nilai :".$nilai2."&nbsp; lebih besar :".$nilai ;
}else{
    echo"nilai :".$nilai."&nbsp; lebih besar :".$nilai2 ;
}
// bagian if else ini jika nilai tidak berada dalam if maka 
//langsung ke default else tanpa dilakukan ulang


echo"</br>";
echo"</br>";
echo"bagian elseif </br>";

if($nilai == $nilai2){
    print"nilai :".$nilai."&nbsp; sama dengan :".$nilai2 ;
}elseif($nilai > $nilai2){
    print"nilai :".$nilai."&nbsp; lebih besar :".$nilai2 ;
}else{
    print"nilai :".$nilai."&nbsp; lebih kecil :".$nilai2 ;
}

//bagian elseif berguna ketika nilai yang di eksekuis didalam
//if tidak ada akan dilakukan kedalam elseif sehingga lebih banyak
//statement yang dipakai


echo"</br>";
echo"</br>";
echo"bagian switch </br>";

switch($nilai){
    case 5:
    echo"data nilai adalah 5";
    break;
    case 6:
    echo"data nilai adalah 6";
    break;
    case 7:
    echo"data nilai adalah 7";
    break;
    default:
    echo"data tidak ada yang sama";
    break;

    // dalam swit ini tidak bisa melakukan pengaturan nilai lebih dari atau kurang dari
    // sama dengan nilai yang lainya karena untuk switch langsung dibandingkan dengan
    // nilai yang berada dalam switch
}


?>

