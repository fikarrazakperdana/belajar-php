<?php
/**
 * looping (perulangan) -> mengulang bari kode perintah 
 * 
 * type of looping -> for, whil, do..while
 * 
 * konsep looping: 
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisinya benar, looping akan berlanjut,
 * saat kondisinya salah, looping akan berhenti
 */

 // case: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
//$start = -70;
//for ($i=$start; $i < 100; $i+=7) { 
//    echo "$i ";
//}

//case 2
$person = [
    [ "name" => "gopal", "address" => "madrid", "age" => 40],
    [ "name" => "kaizo", "address" => "saturnus", "age" => 80 ],
    [ "name" => "kokochi", "address" => "pluto", "age" => 20],
];
// string nama = "jack";
// system.out.println("nama saya: " + nama)
// tanda titik digunakan untuk menggabungkan antara string 1 dengan string yg lain
// echo $person [0]['name']." ".$person [0]['address']." ".$person [0]['age']." ";
// echo $person [1]['name']." ".$person [1]['address']." ".$person [1]['age']." ";
// echo $person [2]['name']." ".$person [2]['address']." ".$person [2]['age']." ";
// // menampilkan isi dalam array person
# count di gunakan untuk mengetahui jumlah array (java -> .lenght())
for ($i= 0; $i < count($person); $i++) { 
    echo $person [$i]['name']." ".$person [$i]['address']." ".$person [$i]['age']." ";
}

?>