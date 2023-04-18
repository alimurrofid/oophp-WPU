<?php
// visibility
// public, dapat digunakan di mana saja, bahkan di luar kelas
// protected, hanya digunakan di dalam sebuah kelas beserta turunannya
// private, hanya dapat digunakan di dalam sebuah kelas tertentu saja

use CetakInfoProduk as GlobalCetakInfoProduk;
use Produk as GlobalProduk;

abstract class Produk
{
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //setter judul
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    //getter judul
    public function getJudul()
    {
        return $this->judul;
    }
    //setter penulis
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    //getter penulis
    public function getPenulis()
    {
        return $this->penulis;
    }
    //setter penerbit
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    //getter penerbit
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    //setter harga
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    //getter harga
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    //setter diskon
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    //getter diskon
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        return "$this->penulis,$this->penerbit";
    }

    //method abstrak
    abstract public function getInfoProduk();
   
    public function getInfo(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}
//akhir class Produk

class Komik extends Produk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} jam.";
        return $str;
    }

    
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}


$produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 25000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);
echo $cetakProduk->cetak();