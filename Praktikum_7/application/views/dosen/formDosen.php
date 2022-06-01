<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="<?= base_url() ?>dosen/index">
                <div class=" mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="text" class="form-control" name="nidn" id="nidn">
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
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                    <!-- <input type="text" class="form-control" name="pendidikan" id="pendidikan"> -->
                    <select class="form-select" aria-label="Default select example" name="pendidikan">
                        <option selected>---Pilih Pendidikan----</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>