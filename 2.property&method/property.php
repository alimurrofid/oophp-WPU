<?php 
// property adalah sesuatu yang mempresentasikan data/keadaan dari sebuah object
// property adalah sebuah variable yang ada di dalam class
// property bisa diibaratkan sebuah kamar di dalam sebuah rumah
// property sama seperti variable, ditambahkan dengan visibility didepannya

// method adalah sebuah function yang ada di dalam class
// method adalah sesuatu yang mempresentasikan perilaku dari sebuah object
// method sama seperti function, ditambahkan dengan visibility didepannya

use Produk as GlobalProduk;

class Produk{
    //property
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

   public function getLabel(){
    return "$this->penulis,$this->penerbit";
   }
}
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000;


// var_dump("Komik : $produk3->penulis,$produk3->penerbit");
// echo "<br>";
echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();