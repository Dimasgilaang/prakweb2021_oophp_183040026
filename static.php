<?php

// Dimas Gilang Nurpambudi - 183040026


Class Contoh {
    public static $angka = 1;

    public function halo(){
        return "Halo " .self::$angka++ ." kali. <br>";
    }

}

$obj = new Contoh;
echo $obj->halo(); 
echo $obj->halo(); 
echo $obj->halo(); 

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo(); 
echo $obj->halo(); 
echo $obj->halo(); 