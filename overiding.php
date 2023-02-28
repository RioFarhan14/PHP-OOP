<?php
// Property & method 
// jualan produk & komik & game

class Produk{
  public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  // inharitance
  public function getInfoProduk()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

    return $str;
  }
}

// objexk - type
class CetakInfoProduk{
  public function cetak($produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

//  Inharitance
class Komik extends Produk{
  public $jmlHalaman;
  
  //overiding 
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
      
      parent::__construct( $judul, $penulis, $penerbit, $harga );

      $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk(){
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk{
  public $waktuMain;
  
  //overiding 
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
      
      parent::__construct( $judul, $penulis, $penerbit, $harga );

      $this->waktuMain = $waktuMain;
  }

  public function getInfoProduk(){
    $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

// constructor
$produk1 = new Komik("Naruto", "Mustafa Harahap", "Hatake kakashi", 30000, 100);
$produk2 = new Game("Boruto", "Harahap", "Jiraiya uzumaki", 40000, 50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
