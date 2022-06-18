<div class="container my-4">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="mb-3">
            <div class="alert alert-success" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            </div>
        </div>
    <?php endif ?>
    <div class="d-flex align-items-center gap-5">
        <div>
            <h1 class="display-5">Mahasiswa</h1>
        </div>
        <div>
            <a href="<?= base_url(); ?>mahasiswa/create" class="btn btn-primary">
                <i class="bi bi-plus"></i>
                Add</a>
        </div>
    </div>
    <hr />
</div>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 table-responsive">
            <table class="table table-hover table-bordered text-center shadow rounded">
                <thead>
                    <tr class="table-primary text-dark">
                        <th>NO</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>IPK</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($list_mhs as $item) : ?>
                        <tr>
                            <th><?= $no; ?></th>
                            <td><?= $item->nim; ?></td>
                            <td><?= ucfirst($item->nama); ?></td>
                            <td><?= $item->ipk; ?></td>
                            <td><?= $item->prodi_kode; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $item->id; ?>" class="btn btn-sm btn-primary">
                                    <i class=" bi bi-box-arrow-up-right"></i>
                                </a>
                                <a href="<?= base_url(); ?>mahasiswa/delete/<?= $item->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');">
                                    <i class="bi bi-trash text-light"></i>
                                </a>
                                <a href="<?= base_url() ?>mahasiswa/update/<?= $item->id ?>" class="btn btn-sm btn-success">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>

                        </tr>
                        <?php ++$no; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>