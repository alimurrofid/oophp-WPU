<?php
//Static Keyword
//member(property dan method) yang terikat dengan class, bukan dengan object
//Nilai static akan selalu tetap meskipun object di instansisasi berulang kali
//membuat kode menjadi "procedural"
//biasanya digunakan untuk membuat fungsi bantuan/helper
//atau digunakan di class-class utility pada Framework


//menggunakan static
// class ContohStatic {
//     public static $angka = 1;

//     public static function halo(){
//         return "Hallo!". self::$angka++ ." kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


//menggunakan oop biasah
// class Contoh{
//     public $angka = 1;

//     public function halo(){
//         return "Halo " . $this->angka++ . "kali. <br>";
//     }
// } 

// $obj = new Contoh();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<hr>";

// $obj2 = new Contoh();
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();

//menggunakan static
class Contoh{
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . "kali. <br>";
    }
} 

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

