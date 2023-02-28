<?php 
// Property & method 
// jualan produk & komik & game

class Produk {
  public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $waktuMain, $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman, $waktuMain, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  // inharitance
  public function getInfoLengkap() {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman."; 
    if ( $this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ( $this->tipe == "Game" ) {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; 
// var_dump($produk1);
// // $produk2 = new Produk();

// $produk2 = new Produk();
// $produk2->judul = "Boruto";
// $produk2->tambahProperty = "anak kecil";
// var_dump($produk2);


// properti & method lengkap
// $produk3 = new Produk();
// $produk3->judul = "Naruto";
// $produk3->penulis = "Kishimoto";
// $produk3->penerbit = "Mustafa";
// $produk3->harga = 30000;


// objexk - type
class CetakInfoProduk {
  public function cetak( $produk ){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


// constructor
$produk1 = new Produk("Naruto", "Mustafa Harahap", "Hatake kakashi", 30000, 100, 0, "Komik");
$produk2 = new Produk("Boruto", "Harahap", "Jiraiya uzumaki", 40000, 0, 50, "Game");
// $produk3 = new Produk("Pikachu");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


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