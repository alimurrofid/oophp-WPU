<?php

use Produk as GlobalProduk;

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0)
           {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

   public function getLabel(){
    return "$this->penulis,$this->penerbit";
   }
}
class Cetak{
    public function cetakInfo($produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk3 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump",30000);
$produk4 = new Produk("Uncharted","Neil Druckman","Sony Computer",25000);

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();
echo "<br>";

$infoProduk = new Cetak();
echo $infoProduk->cetakInfo($produk3);