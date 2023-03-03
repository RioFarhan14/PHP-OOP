<?php
// define tidak bisa digunakan didalam Class
// define('NAMA', 'Rio farhan avito');
// echo NAMA;
// const UMUR = 21;
// echo "<br>";
// echo UMUR;


// class Coba
// {
//     const NAMA = 'Rio';
// }
// echo "<br>";
// echo Coba::NAMA;

//echo __FILE__;



// function coba()
// {
//     return __FUNCTION__;
// }
// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$int = new Coba;
echo $int->kelas;
