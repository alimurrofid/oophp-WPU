<?php 
//abstract class
//mendefinisikan sebuah class yang tidak dapat di instansiasi
//mendefinisikan interface untuk kelas lain yang menjadi turunannya
//berperan sebagai template /kerangka kerja untuk kelas turunannya
//memiliki minimal 1 method abstract
//digunakan dalam inheritance untuk "memaksakan" implementasi method abstrak yang sama untuk semua kelas turunannya

//semua kelas turunan harus mengimplementasikan method abstrak yang ada di kelas induknya
//kelas abstrak boleh memiliki property , method reguler dan static method

//kenapa menggunakan abstract class?
//mereprentasikan ide/konsep dasar
//"Composition over inheritance"
//Salah satu cara menerapkan Polimorphism
//Sentralisasi logic
//mempermudah pengerjaan tim

abstract class Buah{
    private $warna;

    abstract public function makan();

    public function setWarna($warna){
        $this->warna = $warna;
    }
}

class Apel extends Buah{
    public function makan(){
        //kunyah
       //sampai bagian tengah
    }
}

class Jeruk extends Buah{
    public function makan(){
        //kupas
        //kunyah
    }
}