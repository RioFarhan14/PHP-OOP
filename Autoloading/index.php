<?php
require_once 'App/init.php';

use CetakInfoProduk as GlobalCetakInfoProduk;

$produk1 = new Komik("Naruto", "Mustafa Harahap", "Hatake kakashi", 30000, 100);
$produk2 = new Game("Boruto", "Monda", "Jiraiya uzumaki", 40000, 50);
$cetakProduk = new GlobalCetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
