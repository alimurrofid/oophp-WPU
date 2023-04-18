<?php 

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           //method __construct akan dijalankan saat kita melakukan instansiasi
           public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0)
           {
            // $this->judul(mengambil dari property di public) = $judul(mengambil dari parameter constructor)
            // $judul dari Property nanti akan di timpa dengan $judul dari parameter construct
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

   public function getLabel(){
    return "$this->penulis,$this->penerbit";
   }
}

$produk3 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump",30000);
$produk4 = new Produk("Uncharted","Neil Druckman","Sony Computer",25000);

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();