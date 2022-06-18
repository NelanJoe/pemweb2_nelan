<div class="container mt-4">
    <div class="row">
        <div class="col-lg-5">
            <div class="card shadow bg-body rounded">
                <div class=" card-body">
                    <h2 class="display-6">Detail Mahasiswa</h2>
                    <hr />
                    <h5 class="card-title fs-3 display-6 mb-3">Nama: <?= ucfirst($mahasiswa['nama']) ?></h5>
                    <h6 class="card-subtitle fs-5 display-6 mb-3">Nim: <?= ucfirst($mahasiswa['nim']) ?></h6>
                    <h6 class="card-subtitle fs-5 display-6 mb-5">IPK: <?= ucfirst($mahasiswa['ipk']) ?></h6>
                    <a href="<?= base_url() ?>mahasiswa/index" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>