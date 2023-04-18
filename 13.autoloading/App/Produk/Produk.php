<?php

abstract class Produk
{
    protected $judul,
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

    abstract public function getInfo();
   
}