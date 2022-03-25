<?php
    require_once './class_mahasiswa.php';
    $ar_mahasiswa = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
      body {
          background: linear-gradient(90deg, rgba(0,151,255,1) 0%, rgba(6,117,159,1) 100%);
          background-size: cover;
        }
      
      table {
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
      }
    </style>

    <title>Daftar Nama Mahasiswa</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="display-5 text-white">Daftar Nama Mahasiswa</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-lg-8 table-responsive">
          <table class="table table-hover shadow-md">
            <thead>
              <tr class="table-dark table-active text-white">
                <td scope="col">No</td>
                <td scope="col">Nim</td>
                <td scope="col">Nama</td>
                <td scope="col" class="text-center">Prodi</td>
                <td scope="col" class="text-center">Thn Angkatan</td>
                <td scope="col">IPK</td>
                <td scope="col">Predikat</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                    $no = 1;
                    foreach ($ar_mahasiswa as $mhs) {
                        $mahasiswa = new Mahasiswa($mhs['nim'], $mhs['nama'], $mhs['thnAngkatan'], $mhs['prodi'], $mhs['ipk']); ?>
                        <tr class="table-light">
                            <td scope="row"><?php echo $no; ?></td>
                            <td><?php echo $mahasiswa->nim; ?></td>
                            <td><?php echo $mahasiswa->nama; ?></td>
                            <td class="text-center">
                                <?php echo $mahasiswa->prodi; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $mahasiswa->thn_angkatan; ?>
                            </td>
                            <td><?php echo $mahasiswa->ipk; ?></td>
                            <td><?php echo $mahasiswa->predikat_ipk(); ?></td>
                        </tr>
                        <?php
                        ++$no;
                    }
                ?>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
 