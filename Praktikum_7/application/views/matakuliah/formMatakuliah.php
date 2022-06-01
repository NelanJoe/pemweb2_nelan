<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="<?= base_url() ?>matakuliah/index">
                <div class=" mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="no" class="form-control" name="kode" id="kode">
                </div>
                <div class="mb-3">
                    <label for="matakuliah" class="form-label">Matakuliah</label>
                    <input type="text" class="form-control" name="matakuliah" id="matakuliah">
                </div>
                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <input type="text" class="form-control" name="sks" id="sks">
                </div>
                <button type="submit" name="simpan" class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>