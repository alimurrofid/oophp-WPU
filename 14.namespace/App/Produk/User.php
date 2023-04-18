<?php
// namespace Vendor\Namespace\SubNamespace;
// Vendor = yang buat siapa/nama aplikasinya apa
// App disebut vendor dan Produk disebut namespace
namespace App\Produk;
class User {
    public function __construct() {
        echo "ini adalah class " . __CLASS__;
    }
}