<?php
/**
 * array adalah kumpulan nilai yg berjenis sama 
 *setiap data punya posisi yg disebut index (start from 0)
 * 
 * variabel -> individu
 * array -> populasi
 */
// $student = "bill gates";
// $siswa = ["john cena","the rock","batista","rey mysterio"];
// echo $siswa[3];

// array numeric -> array yg indexnya berupa numerik
// array assosiative -> array yg indexnya berupa string
$person = [
    [ "name" => "gopal", "address" => "madrid", "age" => 40],
    [ "name" => "kaizo", "address" => "saturnus", "age" => 80 ],
    [ "name" => "kokochi", "address" => "pluto", "age" => 20],
];

echo $person[2]["address"];
?>