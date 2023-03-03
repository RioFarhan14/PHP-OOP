<?php

abstract class Produk
{
  protected $judul,
    $penulis,
    $penerbit,
    $harga,
    $Diskon = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function setjudul($judul)
  {
    $this->judul = $judul;
  }
  public function getjudul()
  {
    return $this->judul;
  }
  public function setpenulis($penulis)
  {
    $this->penulis = $penulis;
  }
  public function getpenulis()
  {
    return $this->penulis;
  }
  public function setpenerbit($penerbit)
  {
    $this->penerbit = $penerbit;
  }
  public function getpenerbit()
  {
    return $this->penerbit;
  }
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
  public function setharga($harga)
  {
    $this->harga = $harga;
  }
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->Diskon / 100);
  }
  public function setDiskon($Diskon)
  {
    $this->Diskon = $Diskon;
  }
  public function getDiskon()
  {
    return $this->Diskon;
  }

  // inharitance

  abstract public function getinfo();
}
