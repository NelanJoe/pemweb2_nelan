<?php
  require_once './class_nilai_mahasiswa.php';

  $data_mhs = [
    'NIM' => $mahasiswa->nim,
    'Nama' => $mahasiswa->nama,
    'Mata Kuliah' => $mahasiswa->matkul,
    'Nilai' => $mahasiswa->nilai,
    'Grade' => $mahasiswa->grade(),
    'Keterangan' => $mahasiswa->hasil(),
  ];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>Form Nilai Siswa</title>
  </head>

  <body>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <h2 class="display-4">Form Nilai Mahasiswa</h2>
          <hr class="bg-primary" />
        </div>
      </div>
      <div class="row justify-content-center gap-4 my-4">
        <div class="col-lg-4">
          <form
            class="w-auto bg-light border border-primary p-4 rounded shadow-lg"
            action="#"
            method="POST"
          >
            <div class="mb-3">
              <label class="form-label">NIM</label> 
              <input type="text" class="form-control nama" name="nim" value="" />
            </div>
            <div class="mb-3">
              <label class="form-label">Nama</label> 
              <input type="text" class="form-control nama" name="nama" value="" />
            </div>
            <div class="mb-3">
              <label class="form-label">Pilih MK</label>
              <select
                class="form-select matkul"
                aria-label="Default select example"
                name="pilihmk"
              >
                <option selected>Pilih Mata Kuliah</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Pemrogramman Web">Pemrogramman Web</option>
                <option value="Matematika Komputer">Matematika Komputer</option>
                <option value="Stastitika & Probabilitas">Stastitika & Probabilitas</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Nilai MK</label>
              <input type="text" class="form-control nilai" name="nilai" value="" />
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary w-100" name="simpan">
                Simpan
              </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <h3 class="display-5">Hasil:</h3>
          <div class="mb-3">
            <button class="btn btn-danger px-4 reset">Reset</button>
          </div>
          <div class="bg-light border border-primary p-2 rounded shadow-lg hasil">
          <?php
            if (isset($_POST['simpan'])) {
                foreach ($data_mhs as $key => $value) {
                    ?>
                  <?php echo "{$key}: {$value}"; ?><br/>
                <?php
                }
            }
          ?>
          </div>
        </div>
      </div>
    </div>

    <script> 
        let hasil = document.querySelector(".hasil");
        const reset = document.querySelector(".reset");

        reset.addEventListener("click", () => {
            hasil.textContent = "";
        })
    </script>
    
    <!-- Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
