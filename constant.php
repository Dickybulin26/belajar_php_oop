<?php

// define("NAMA", 'Dicky Setiawan');
// echo NAMA;

// echo "<br>";
// const UMUR = 20;
// echo UMUR; 


// class Coba {
//     // define('NAMA', 'Dicky Setiawan');
//     const NAMA = 'Dicky Setiawan';
// }

// // echo Coba::NAMA;
// echo __FILE__;



// function Coba(){
//     return __FUNCTION__;
// }

// echo Coba();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;