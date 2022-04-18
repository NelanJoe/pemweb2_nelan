<?php
require_once "./class_bmipasien.php";

$gender = $_POST['gender'];
$nama = $_POST['nama'];
$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$umur = $_POST['umur'];

$person1 = new BmiPasien(70, 169, date("d-m-Y"));
$person1->nama = "Ahmad";
$person1->gender = "L";

$person2 = new BmiPasien(55, 165, date("d-m-Y"));
$person2->nama = "Lina";
$person2->gender = "P";

$person3 = new BmiPasien(45, 165, date("d-m-Y"));
$person3->nama = "Lutfi";
$person3->gender = "L";

$person4 = new BmiPasien($berat, $tinggi, date("d-m-Y"));
$person4->nama = $nama;
$person4->gender = $gender;

$ar_person = [$person1, $person2, $person3, $person4];

// print_r($ar_person);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <title>Form BMI</title>
</head>

<body>
  <div class="container">
    <div class="row my-4">
      <div class="col text-center">
        <h2 class="display-4 text-white">Form BMI</h2>
      </div>
    </div>
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6">
        <form method="POST" action="#" class="border border-primary px-4 pt-4 py-5 bg-white rounded-3">
          <div class="d-flex justify-content-center gap-5">
            <p>Gender:</p>
            <div class="form-check">
              <label> Pria </label>
              <input class="form-check-input" type="radio" name="gender" value="L" checked />
            </div>
            <div class="form-check">
              <label> Wanita </label>
              <input class="form-check-input" type="radio" name="gender" value="P" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label">Umur</label>
            <input name="umur" type="text" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label">Berat Badan</label>
            <input name="berat" type="number" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label">Tinggi Badan</label>
            <input name="tinggi" type="number" class="form-control" />
          </div>
          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col text-center">
        <h2 class="display-6 text-white">Hasil BMI:</h2>
      </div>
    </div>
    <div class="row justify-content-center mt-3 mb-5">
      <div class="col table-responsive">
        <table class="table table-hover shadow-md">
          <thead>
            <tr class="table table-active text-white text-center">
              <td>NO</td>
              <td>Tanggal Cek</td>
              <td>Kode Pasien</td>
              <td>Nama Pasien</td>
              <td>Gender</td>
              <td>Berat</td>
              <td>Tinggi</td>
              <td>Nilai BMI</td>
              <td>Status BMI</td>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($ar_person as $obj) :
            ?>
              <tr class="table-light text-center">

                <td><?= $no ?></td>
                <td><?= $obj->tanggal ?></td>
                <td><?= "P00" . $no ?></td>
                <td><?= $obj->nama ?></td>
                <td><?= $obj->gender ?></td>
                <td><?= $obj->berat ?></td>
                <td><?= $obj->tinggi ?></td>
                <td><?= $obj->nilaiBMI() ?></td>
                <td><?= $obj->statusBMI() ?></td>
              </tr>
            <?php
              $no++;
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>