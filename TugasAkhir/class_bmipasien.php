<?php

require_once "./class_bmi.php";


class BmiPasien extends BMI
{
    public $berat;
    public $tinggi;
    public $taggal;


    function __construct($berat, $tinggi, $tanggal)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->tanggal = $tanggal;
    }
}
