<?php 

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain,
           $tipe;

           public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0,$jmlHalaman = 0,$waktuMain = 0,$tipe="tipe")
           {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
           }

   public function getLabel(){
    return "$this->penulis,$this->penerbit";
   }

   public function getInfoLengkap(){
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "komik") {
        $str .= " - {$this->jmlHalaman} Halaman.";
    } else{
        $str .= " - {$this->waktuMain} Jam.";
    }
    return $str;
}
}
    

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
 
}


$produk3 = new Produk("Naruto","Masashi Kishimoto", "Shonen Jump",30000, 100, 0,"komik");
$produk4 = new Produk("Uncharted","Neil Druckman","Sony Computer",25000, 0, 50,"game");

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();


// echo "komik : " . $produk3->getLabel();
// echo "<br>";
// echo "game : " . $produk4->getLabel();
// echo "<br>";

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk3);