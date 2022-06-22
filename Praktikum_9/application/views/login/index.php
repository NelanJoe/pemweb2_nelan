<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="mb-3 text-center">
                <h1 class="display-5 fs-3">Login</h1>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <form class="login-container bg-white p-4 rounded shadow border border-primary" action="<?= base_url() ?>auth/index" method="POST">
                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <div id="username" class="form-text text-danger"><?= form_error('username') ?></div>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                    <div id="password" class="form-text text-danger"><?= form_error('password') ?></div>
                </div>
                <button type="submit" class="mt-5 mb-3 btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>