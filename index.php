<?php

class Mobil
{
    public $merk, $tipe, $mesin, $max_speed;

    function cetakTipe()
    {
        return $this->tipe;
    }

    function kecepatanMaksimal()
    {
        return "Kecepatan Maksimal Dari Mobil Ini Adalah " . $this->max_speed;
    }
}

$bmw = new Mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$bmw2 = new Mobil;
$bmw2->merk = "BMW";
$bmw2->tipe = "320i";
$bmw2->mesin = "2000cc";
$bmw2->max_speed = "280km/h";



echo "$bmw->tipe";
echo "<br>";
echo "$bmw2->tipe";

if ($bmw === $bmw2) {
    echo "Sama";
} else {
    echo "Tidak";
}
