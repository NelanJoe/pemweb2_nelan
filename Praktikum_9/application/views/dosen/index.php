<div class="container my-4">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="mb-3">
            <div class="alert alert-success" role="alert">
                Data Dosen <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            </div>
        </div>
    <?php endif ?>
    <div class="d-flex align-items-center gap-5">
        <div>
            <h1 class="display-5">Dosen</h1>
        </div>
        <div>
            <a href="<?php echo base_url(); ?>dosen/create" class="btn btn-primary">
                <i class="bi bi-plus"></i>
                Add</a>
        </div>
    </div>
    <hr />
</div>
<div class="container mb-5">

    <div class="row justify-content-center">
        <div class="col-lg-10 table-responsive">
            <table class="table table-hover table-bordered shadow">
                <thead>
                    <tr class="table-primary text-dark">
                        <th>NO</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Pendidikan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($list_dsn as $item) : ?>
                        <tr>
                            <th class="text-center"><?php echo $no; ?></th>
                            <td>
                                <?= $item->nidn; ?>
                            </td>
                            <td>
                                <?= $item->nama; ?>
                            </td>
                            <td>
                                <?= $item->pendidikan; ?>
                            </td>
                            <td class="d-flex gap-2 justify-content-center">
                                <a href="<?= base_url(); ?>dosen/detail/<?= $item->id; ?>" class="btn btn-sm btn-primary">
                                    <i class=" bi bi-box-arrow-up-right"></i>
                                </a>
                                <a href="<?= base_url(); ?>dosen/delete/<?= $item->id; ?>" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash text-light"></i>
                                </a>
                                <a href="<?= base_url() ?>dosen/update/<?= $item->id ?>" class="btn btn-sm btn-success">
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