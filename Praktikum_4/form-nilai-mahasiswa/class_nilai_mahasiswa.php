<?php

class NilaiMahasiswa
{
    public $nim;
    public $nama;
    public $matkul;
    public $nilai;

    public function __construct($nim, $nama, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function hasil()
    {
        if ($this->nilai >= 55) {
            return 'Lulus';
        } else {
            return 'Gagal';
        }
    }

    public function grade()
    {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            $grade = 'A';
        } elseif ($this->nilai >= 70 && $this->nilai < 85) {
            $grade = 'B';
        } elseif ($this->nilai >= 56 && $this->nilai < 69) {
            $grade = 'C';
        } elseif ($this->nilai >= 36 && $this->nilai < 55) {
            $grade = 'D';
        } elseif ($this->nilai >= 0 && $this->nilai < 36) {
            $grade = 'E';
        } else {
            $grade = 'I';
        }

        return $grade;
    }
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$pilih_mk = $_POST['pilihmk'];
$nilai = $_POST['nilai'];

$mahasiswa = new NilaiMahasiswa($nim, $nama, $pilih_mk, $nilai);
