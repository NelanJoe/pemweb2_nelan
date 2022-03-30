<?php

class Account
{
    public  $nomor;
    protected  $saldo;

    public function __construct($nomor,  $saldo)
    {
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($uang)
    {
        $this->saldo += $uang;
    }

    public function withdrawl($uang)
    {
        $this->saldo -= $uang;
    }

    public function cetak()
    {
        echo "Nomor Account: {$this->nomor}<br/>";
        echo "Saldo: {$this->saldo}";
    }
}
