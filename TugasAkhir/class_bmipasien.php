<?php
require_once "./class_pasien.php";


class BmiPasien extends Pasien  
{
    public $berat;
    public $tinggi;
    public $taggal;
   

    function __construct($berat, $tinggi,$tanggal)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->tanggal = $tanggal;
    }
}

