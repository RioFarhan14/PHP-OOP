<?php
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/user.php';
// require_once 'Service/user.php';


spl_autoload_register(function ($class) {

    $class = explode('\\', $class);
    $class = end($class);
    require_once "Produk/" . $class . ".php";
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once "Service/" . $class . ".php";
});
