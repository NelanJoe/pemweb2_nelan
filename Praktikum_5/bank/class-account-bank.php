<?php
require_once "class-account.php";

class AccountBank extends Account {
    public $customer;
    static $biaya_admin = 6500;

    public function __construct($nomor, $saldo, $customer)
    {
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    public function transfer($ab_tujuan, $uang) {
        $ab_tujuan->deposit($uang);
        $this->withdrawl($uang);
        $this->withdrawl(self::$biaya_admin);
    }

    public function cetak() {
        parent::cetak();
        echo "<br/> {$this->customer}";
    }

    public function getSaldo() {
        return "Rp " . number_format($this->saldo,2,',','.');
    }
}