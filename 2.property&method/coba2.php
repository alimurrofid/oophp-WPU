<?php 
class coba2{
    public  $nama,
            $jenis,
            $tahun,
            $harga;

    public function motor(){
        return " $this->nama,$this->jenis,$this->tahun,$this->harga";
    }

}

$sepeda2 = new coba2();
$sepeda2->nama = "Mega Pro";
$sepeda2->jenis = "sepeda klasik";
$sepeda2->tahun = "2009";
$sepeda2->harga = 10000000;

echo $sepeda2->motor();

