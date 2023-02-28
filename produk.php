<?php 
// Property & method 
// jualan produk & komik & game

class Produk {
  public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
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
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Kishimoto";
$produk3->penerbit = "Mustafa";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Naruto";
$produk4->penulis = "sasta";
$produk4->penerbit = "Harahap";
$produk4->harga = 24000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel(); 
echo "<hr>"; 


// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();
// var_dump($produk3);


?>