<?php

class persegiPanjang
{
    public $panjang;
    public $lebar;

    public function __construct(int $panjang, int $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function getKeliling()
    {
        return 2 * ($this->panjang * $this->lebar);
    }
}

$panjang = (int) readline('Masukkan panjang lingkaran: ');
$lebar = (int) readline('Masukkan lebar lingkaran: ');

$p1 = new persegiPanjang($panjang, $lebar);
echo "Luasnya adalah: {$p1->getLuas()}\n";
echo "Kelilingnya: {$p1->getKeliling()}";
