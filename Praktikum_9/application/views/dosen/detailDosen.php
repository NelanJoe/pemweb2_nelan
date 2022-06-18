<div class="container mt-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow bg-body rounded">
                <div class=" card-body">
                    <h2 class="display-6">Detail Dosen</h2>
                    <hr />
                    <h5 class="card-title fs-3 display-6 mb-3">Nama: <?= ucfirst($dosen['nama']) ?></h5>
                    <h6 class="card-subtitle fs-5 display-6 mb-3">Nidn: <?= ucfirst($dosen['nidn']) ?></h6>
                    <h6 class="card-subtitle fs-5 display-6 mb-5">Pendidikan: <?= ucfirst($dosen['pendidikan'] . ' ' . $dosen['kampus']) ?></h6>
                    <a href="<?= base_url() ?>dosen" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>