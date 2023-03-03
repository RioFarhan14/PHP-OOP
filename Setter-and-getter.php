<?php
// Property & method 
// jualan produk & komik & game

use Produk as GlobalProduk;

class Produk
{
  private $judul,
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
  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}

// objexk - type
class CetakInfoProduk
{
  public function cetak($produk)
  {
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

//  Inharitance
class Komik extends Produk
{
  public $jmlHalaman;

  //overiding 
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public $waktuMain;

  //overiding 
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {

    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

// constructor
$produk1 = new Komik("Naruto", "Mustafa Harahap", "Hatake kakashi", 30000, 100);
$produk2 = new Game("Boruto", "Monda", "Jiraiya uzumaki", 40000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";
$produk2->getdiskon(50);
echo $produk2->getHarga();
echo "<hr>";
echo $produk1->setjudul("JudulBaru");
echo $produk1->getjudul();
echo '<br>';
echo $produk2->setDiskon(50);
echo $produk2->getHarga();
