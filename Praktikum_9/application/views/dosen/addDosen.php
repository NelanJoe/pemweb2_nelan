<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="">
                <div class=" mb-3">
                    <label for="nidn" class="form-label">NIDN</label>
                    <input type="number" class="form-control" name="nidn" id="nidn">
                    <div id="nim" class="form-text text-danger"><?= form_error('nidn') ?></div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                    <div id="nim" class="form-text text-danger"><?= form_error('nama') ?></div>
                </div>
                <div class="mb-3">
                    <label for="kampus" class="form-label">Nama Kampus</label>
                    <input type="text" class="form-control" name="kampus" id="kampus">
                    <div id="nim" class="form-text text-danger"><?= form_error('kampus') ?></div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pendidikan</label>
                    <select class="form-select" name="pendidikan">
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah Dosen</button>
            </form>
        </div>
    </div>
</div>