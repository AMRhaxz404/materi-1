<?php

// public bisa di akses oleh siapapun baik adri luar, turunan
//  protected bisa di akses dari turunan tidak bisa dari luar
// private tidak bisa di akses dari luar
class Mobil
{
    private $merk, $tipe, $mesin, $max_speed;

    public function cetakTipe()
    {
        return $this->tipe;
    }

    public function kecepatanMaksimal()
    {
        return "Kecepatan Maksimal Dari Mobil Ini Adalah " . $this->max_speed;
    }
}

class BMW extends Mobil
{
}

class Tesla extends Mobil
{
    function selfParking()
    {
        echo "Parkir Sendiri";
    }
}

$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$tesla = new Tesla;
$tesla->merk = "Tesla";
$tesla->tipe = "Model X";
$tesla->mesin = "Listrik";
$tesla->max_speed = "280km/h";


echo $tesla->kecepatanMaksimal();
