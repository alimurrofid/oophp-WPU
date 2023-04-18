<?php

require_once 'App/init.php';

// $produk3 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk4 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 25000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk3);
// $cetakProduk->tambahProduk($produk4);
// echo $cetakProduk->cetak();

// echo "<hr>";

//use digunakan untuk mengganti nama namespace
// use App\Service\User;
// new User();


//digunakan alias agar tidak terjadi error
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;


new ServiceUser();
echo "<br>";
new ProdukUser();