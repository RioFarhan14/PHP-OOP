<?php
// require_once 'App/Produk/infoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/komik.php';
// require_once 'App/Produk/CetakInfoProduk.php';

spl_autoload_register(function ($class) {
    require_once "Produk/" . $class . ".php";
});
