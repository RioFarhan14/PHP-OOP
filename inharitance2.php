<?php 
// Property & method 
// jualan produk & komik & game

class Produk {
  public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $waktuMain)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  // inharitance
  public function getInfoProduk() {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman."; 

    return $str;
  }
}

// objexk - type
class CetakInfoProduk {
  public function cetak( $produk ){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// Inharitance
class Komik extends Produk {
  public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public function getInfoProduk() {
    $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
    return $str;
  }
}

// constructor
$produk1 = new Komik("Naruto", "Mustafa Harahap", "Hatake kakashi", 30000, 100, 0, "Komik");
$produk2 = new Game("Boruto", "Harahap", "Jiraiya uzumaki", 40000, 0, 50, "Game");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "Game : " . $produk2->getLabel(); 
// echo "<hr>"; 
// // var_dump($produk3);

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);


// method & property

// $produk4 = new Produk();
// $produk4->judul = "Naruto";
// $produk4->penulis = "sasta";
// $produk4->penerbit = "Harahap";
// $produk4->harga = 24000;

// echo "Komik : " . $produk3->getLabel();
// echo "<br>";
// echo "Game : " . $produk4->getLabel(); 
// echo "<hr>"; 

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// var_dump($produk3);


// // inharitance
// Komik : Naruto | Mustafa Harahap, Hatake kakashi (Rp. 30000) - 100 Halaman. - 100 Halaman.
// Game : Boruto | Harahap, Jiraiya uzumaki (Rp. 40000) - 0 Halaman. ~ 50 Jam.

// 