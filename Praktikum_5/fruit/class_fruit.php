<?php

class Fruit
{
    public $nama;
    public $warna;
    public $beret;


    public function set_nama($n)
    {
        $this->nama = $n;
        echo "Hallo nama saya {$this->nama}" . PHP_EOL;
    }


    protected function set_warna($w)
    {
        $this->warna = $w;
    }

    private function set_berat($b)
    {
        $this->berat = $b;
    }
}

class Anggur extends Fruit
{
    public function getBuah()
    {
        echo "Saya adalah buah {$this->nama}";
    }
}


/* Inhertance => Pewarisan Sifat */

// Parent
$mangga = new Fruit();
$mangga->set_nama("Mangga");


// Child
$anggur = new Anggur();
$anggur->nama = "Anggur";
$anggur->getBuah();
