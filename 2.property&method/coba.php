<?php 

class coba{
    public  $nama,
            $jenis,
            $warna,
            $harga;
    public function mobil(){
        return "$this->nama,$this->jenis,$this->warna,$this->harga";
    }
}

$mobil1 = new coba();
$mobil1->nama = "lamborghini";
$mobil1->jenis = "sport";
$mobil1->warna = "hitam";
$mobil1->harga = 1000;

echo "Mobil : " . $mobil1->mobil();