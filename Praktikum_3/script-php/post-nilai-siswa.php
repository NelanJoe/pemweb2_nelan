<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$total_nilai = ($nilai_uts * (30 / 100)) + ($nilai_uas * (35 / 100)) + ($nilai_tugas * (35 / 100));

// Panggil libfungsi.php
require_once "../libfungsi.php";
$hasil_ujian = kelulusan($total_nilai);
$grade_hasil = grade($total_nilai);
$predikat_hasil = predikat($grade_hasil);


$data = array(
    "Proses" => $proses,
    "Nama" => $nama_siswa,
    "Mata Kuliah" => $mata_kuliah,
    "Nilai UTS" => $nilai_uts,
    "Nilai UAS" => $nilai_uas,
    "Nilai Tugas Praktikum" => $nilai_tugas,
    "Grade" => $grade_hasil,
    "Predikat" => $predikat_hasil,
    "Dinyatakan" => $hasil_ujian,
)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Hasil</title>
</head>

<body>

    <div class="container">
        <div class="row mt-5 text-center">
            <div class="col">
                <h2 class="display-6">
                    Hasil :
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-10 p-2 rounded-3 shadow-lg border border-primary border-2">
                <?php
                if (!empty($proses)) {
                    foreach ($data as $key => $value) {
                        echo "{$key} : {$value} <br/>";
                    }
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>