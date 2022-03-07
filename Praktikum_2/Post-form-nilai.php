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
            <div class="col-lg-4 mb-5">
                <!-- Form -->
                <form method="POST" action="script/post_nilai_siswa.php" class="w-100 p-4 rounded-3 shadow-lg border border-dark border-2">
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
                        <button type="submit" class="btn btn-primary text-uppercase w-100 " name="proses" value="Simpan">Submit</button>
                    </div>
                </form>
                <!-- End Form -->

            </div>
        </div>
    </div>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>