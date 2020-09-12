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

echo "Tipe " . $bmw->kecepatanMaksimal();
