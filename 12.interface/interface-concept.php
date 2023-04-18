<?php 
//interface
//kelas abstrak yang sama sekali tidak memiliki implementasi
//murni merupakan template untuk kelas turunannya
//tidak boleh memiliki property, hanya boleh memiliki deklarasi method
//semua method harus dideklarasikan sebagai public
//boleh mendeklarasikan __construct()
//satu kelas boleh mengimplementasikan banyak interface
//dengan menggunakan type-hinting dapat melakukan 'Dependency Injection'
///pada akhirnya akan mencapai Polymorphism

interface Buah{
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    public function setUkuran($ukuran);
}

class Apel implements Buah, Benda{
    protected $warna;
    protected $ukuran;
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    //implementasi method dari interface Benda
    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }
}

class Jeruk implements Buah{
    protected $warna;
    public function makan(){
        //kupas
        //kunyah
    }
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
}