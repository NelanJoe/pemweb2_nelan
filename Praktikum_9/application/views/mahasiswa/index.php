<div class="container my-4">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success_add') ?>"></div>
    <?php if ($this->session->flashdata('success_delete')) : ?>
        <div class=" mb-3">
            <div class="alert alert-danger" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('success_delete'); ?>
            </div>
        </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('success_add')) : ?>
        <div class=" mb-3">
            <div class="alert alert-success" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('success_add'); ?>
            </div>
        </div>
    <?php endif ?>

    <?php if ($this->session->flashdata('success_update')) : ?>
        <div class=" mb-3">
            <div class="alert alert-primary" role="alert">
                Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('success_update'); ?>
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
                                <a href="<?= base_url(); ?>mahasiswa/delete/<?= $item->id; ?>" class="btn btn-sm btn-danger">
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

<script type="text/javascript">
    const flashdata = $('.flash-data').data('success_add');
    console.log(flashdata);
</script>