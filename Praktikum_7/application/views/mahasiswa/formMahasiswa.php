<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="<?= base_url() ?>mahasiswa/index">
                <div class=" mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3 d-flex gap-4">
                    <p>Gender: </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="pria" value="L">
                        <label class="form-check-label" for="pria">L</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="wanita" value="P">
                        <label class="form-check-label" for="wanita">P</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK</label>
                    <input type="text" class="form-control" name="ipk" id="ipk">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>