<?php
class Dispenser
{
    protected $volume;
    protected $hargaGelas;
    private $volumeGelas = 250;
    public $namaMinuman;

    public function isi($vol)
    {
        $this->volume = $vol;
    }
}
