<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Form Nilai Siswa</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1 class="display-5">Form Nilai Siswa</h1>
                <hr />
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6">
                <!-- Form -->
                <form method="GET" action="Get-form-nilai.php">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" value="" />
                    </div>
                    <div class="mb-3">
                        <label>Mata Kuliah</label>
                        <select class="form-select" aria-label="Default select example" name="matkul">
                            <option selected>Pilih Mata Kuliah</option>
                            <option value="DDP">Dasar - Dasar Pemrogramman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEBI">Pemrogramman Web</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Nilai UTS</label>
                        <input type="text" class="form-control" name="nilai_uts" value="" />
                    </div>
                    <div class="mb-3">
                        <label>Nilai UAS</label>
                        <input type="text" class="form-control" name="nilai_uas" value="" />
                    </div>
                    <div class="mb-3">
                        <label>Nilai Tugas / Praktikum</label>
                        <input type="text" class="form-control" name="nilai_tugas" value="" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary" name="proses" value="Simpan">Submit</button>
                    </div>
                </form>
                <!-- End Form -->
                <!-- Hasil -->
                <div class="row mt-5 text-center">
                    <div class="col">
                        <h2 class="display-6">
                            Hasil :
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-8 bg-primary p-2 text-white rounded-3 shadow-md">
                        <?php
                        $proses = $_GET['proses'];
                        $nama_siswa = $_GET['nama'];
                        $mata_kuliah = $_GET['matkul'];
                        $nilai_uts = $_GET['nilai_uts'];
                        $nilai_uas = $_GET['nilai_uas'];
                        $nilai_tugas = $_GET['nilai_tugas'];
                        if (!empty($proses)) {
                            echo "Proses : {$proses}";
                            echo "<br/>Nama : {$nama_siswa}";
                            echo "<br/>Mata Kuliah : {$mata_kuliah}";
                            echo "<br/>Nilai UTS : {$nilai_uts}";
                            echo "<br/>Nilai UAS : {$nilai_uas}";
                            echo "<br/>Nilai Tugas Praktikum : {$nilai_tugas}";
                            echo "<br/>Grade : {$grade}";
                            echo "<br/>Predikat : {$predikat}";
                        }
                        ?>
                    </div>
                </div>
                <!-- End Hasil -->
            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>