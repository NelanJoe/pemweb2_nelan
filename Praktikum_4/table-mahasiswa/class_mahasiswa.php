<?php

class Mahasiswa
{
    public $nama;
    public $nim;
    public $thn_angkatan;
    public $prodi;
    public $ipk;

    public function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function predikat_ipk()
    {
        if ($this->ipk < 2.0) {
            return 'Cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75) {
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0) {
            return 'Cum Laude';
        } else {
            return 'Bilangan yang anda masukkan salah';
        }
    }
}

$mhs1 = [
    'nim' => '011023',
    'nama' => 'Budi',
    'prodi' => 'SI',
    'thnAngkatan' => 2021,
    'ipk' => 3.8,
];
$mhs2 = [
    'nim' => '011172',
    'nama' => 'Nina',
    'prodi' => 'TI',
    'thnAngkatan' => 2021,
    'ipk' => 3.3,
];
$mhs3 = [
    'nim' => '011335',
    'nama' => 'Rudi',
    'prodi' => 'SI',
    'thnAngkatan' => 2021,
    'ipk' => 3.34,
];
$mhs4 = [
    'nim' => '012442',
    'nama' => 'Susi',
    'prodi' => 'TI',
    'thnAngkatan' => 2021,
    'ipk' => 2.80,
];
$mhs5 = [
    'nim' => '013643',
    'nama' => 'Intan',
    'prodi' => 'TI',
    'thnAngkatan' => 2021,
    'ipk' => 4.0,
];
