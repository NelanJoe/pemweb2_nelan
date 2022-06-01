<section id="matakuliah">
    <div class="container my-4">
        <div class="d-flex align-items-center gap-5">
            <div>
                <h2 class="display-6">Data Matakuliah</h2>
            </div>
            <div>
                <a href="<?= base_url() ?>matakuliah/add" class="btn btn-primary">Add</a>
            </div>
        </div>
        <hr />
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 table-responsive">
                <table class="table table-hover table-bordered shadow-sm">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Matakuliah</th>
                            <th scope="col">SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($list_matkul as $matkul) : ?>
                            <tr class="text-center">
                                <td><?= $no++ ?></td>
                                <td><?= $matkul->kode ?></td>
                                <td><?= $matkul->nama ?></td>
                                <td><?= $matkul->sks ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>