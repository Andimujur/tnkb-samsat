<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7 ">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col">
                            <div class="p-5">

                                <div class=" text-center">
                                    <img src="<?= base_url('assets/img/logo/logo.png') ?>" class=" mb-4" style="width: 200px" alt="logo samsat">
                                </div>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Roda Dua</h1>
                                </div>
                                <div class="col-md-12">
                                    <?= $this->session->flashdata('flash'); ?>
                                </div>

                                <form class="user" action="<?= base_url('Auth'); ?>" method="POST">
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control rounded-pill" id="tanggal" placeholder="Tanggal" name="tanggal">
                                            <small class="text-danger"> <?= form_error('tanggal'); ?> </small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nopol" class="col-md-2 col-form-label">Nomor Polisi :</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control rounded-pill" id="nopol" placeholder="Nomor Polisi">
                                            <small class="text-danger"> <?= form_error('nopol'); ?> </small>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2">Ket.</div>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="keterangan" name="keterangan" value="1">
                                                <label class="form-check-label" for="keterangan">
                                                    Sudah Tercetak
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Tambah Data
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('input'); ?>">Kembali Ke Halaman Utama</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>