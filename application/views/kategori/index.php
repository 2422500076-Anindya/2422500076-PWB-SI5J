<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_admin_logged_in();
        $this->load->model('produk_kategori_model');
    }

    public function index() {
        $data['list_kategori'] = $this->produk_kategori_model->get_all();
        $this->load->view('administrator/templates/header');
        $this->load->view('administrator/templates/sidebar');
        $this->load->view('administrator/kategori/index', $data);
        $this->load->view('administrator/templates/footer');
    }
}
<div class="card-body">
    <h5 class="card-title">Kategori</h5>
    <p class="card-text">
        <div class="card-body">
            <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message') ?>
            <?php endif ?>

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($list_kategori as $kategori) : ?>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td><?= $no ?></td>
                            <td><?= $kategori['nama'] ?></td>
                            <td><?= $kategori['deskripsi'] ?></td>
                            <td>edit hapus</td>
                        </tr>
                    <?php $no++; endforeach ?>
                </tbody>
            </table>
        </div>
    </p>
</div>
</div>

</div>
<!-- /.col-md-6 -->

</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>