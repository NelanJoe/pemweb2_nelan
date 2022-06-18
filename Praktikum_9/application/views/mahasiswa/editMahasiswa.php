<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 border border-primary px-4 py-5 rounded shadow">
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                <div class=" mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="number" class="form-control" name="nim" id="nim" value="<?= $mahasiswa['nim'] ?>">
                    <div id="nim" class="form-text text-danger"><?= form_error('nim') ?></div>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>">
                    <div id="nama" class="form-text text-danger"><?= form_error('nama') ?></div>
                </div>
                <div class="mb-3 d-flex gap-4">
                    <p>Gender: </p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="pria" value="L" checked>
                        <label class="form-check-label" for="pria">L</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="wanita" value="P">
                        <label class="form-check-label" for="wanita">P</label>
                    </div>
                    <div id="gender" class="form-text text-danger"><?= form_error('danger') ?></div>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Pilih Prodi</label>
                    <select class="form-select" name="prodi">
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="BD">Bisnis Digital</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="ipk" class="form-label">IPK</label>
                    <input type="text" class="form-control" name="ipk" id="ipk" value="<?= $mahasiswa['ipk'] ?>">
                    <div id="ipk" class="form-text text-danger"><?= form_error('ipk') ?></div>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary w-100">Ubah Mahasiswa</button>
            </form>
        </div>
    </div>
</div>