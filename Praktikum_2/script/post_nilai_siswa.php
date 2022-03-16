<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$kkm = 55;
$total_nilai = ($nilai_uts * (30 / 100)) + ($nilai_uas * (35 / 100)) + ($nilai_tugas * (35 / 100));
$nilai_akhir = (int)$total_nilai;

$kelulusan = $nilai_akhir > $kkm ? "Lulus" : "Tidak Lulus";

$grade = "";
if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = "A";
} elseif ($nilai_akhir >= 70 && $nilai_akhir < 85) {
    $grade = "B";
} elseif ($nilai_akhir >= 56 && $nilai_akhir < 69) {
    $grade = "C";
} elseif ($nilai_akhir >= 36 && $nilai_akhir < 55) {
    $grade = "D";
} elseif ($nilai_akhir >= 0 && $nilai_akhir < 36) {
    $grade = "E";
} else {
    $grade = "I";
}

$predikat = "";
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case 'B':
        $predikat = "Memuaskan";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Sangat Kurang";
        break;
    default:
        break;
}
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
            <div class="col-4 p-2 rounded-3 shadow-lg border border-primary border-2">
                <?php
                if (!empty($proses)) {
                    echo "Proses : {$proses}";
                    echo "<br/>Nama : {$nama_siswa}";
                    echo "<br/>Mata Kuliah : {$mata_kuliah}";
                    echo "<br/>Nilai UTS : {$nilai_uts}";
                    echo "<br/>Nilai UAS : {$nilai_uas}";
                    echo "<br/>Nilai Tugas Praktikum : {$nilai_tugas}";
                    echo "<br/>Lulus / Tidak Lulus : {$kelulusan}";
                    echo "<br/>Grade : {$grade}";
                    echo "<br/>Predikat : {$predikat}";
                }
                ?>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>