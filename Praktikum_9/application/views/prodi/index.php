<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1 class="display-5">Kaprodi</h1>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <table class="table table-hover table-bordered text-center shadow">
                <thead>
                    <tr class="table-primary text-dark">
                        <th>NO</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($list_prodi as $row) : ?>
                        <tr>
                            <th><?= $no ?></th>
                            <td><?= $row->kode ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->kaprodi ?></td>
                        </tr>
                        <?php $no++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>