<?php
function contoh(){
    echo"contoh menampilkan dalam array";
}

contoh();
// array simple untuk menampilkan dara dari function tidak usah perlu echo
// karena nilai dari function akan ditampilkan didepan echo
echo"</br>";
echo"</br>";

function data($x, $y){
    $z = $x + $y;
    return $z;
}

echo"data 1:".data(6, 3)."</br>";
echo"data 1:".data(3, 8)."</br>";

//menampilakn untuk penghitungan data menggunakan function dimana
// nilai yang dimasukkan akan di proses kedalam function dan akan 
// dikembalikan menjadi hasil

echo"</br>";
echo"</br>";

function hitung($a, $b){
    if($a > $b){
        $c = $a - $b;
        return $c;
    }
    else{
        $c = $b - $a;
        return $c;
    }
}

echo"hasil 1 :".hitung(7, 2)."</br>";
echo"hasil 2 :".hitung(2,6)."</br>";

//membuat sebuah kondisi di dalam function untuk menentukan yang akan keluat

?>