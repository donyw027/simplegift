<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm mb-4 border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form <?= $title; ?>
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('pengeluaran') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pb-2">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tgl">tgl</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tgl'); ?>" type="date" id="tgl" name="tgl" class="form-control" placeholder="tgl">
                        <?= form_error('tgl', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="pengeluaran">pengeluaran</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('pengeluaran'); ?>" type="text" id="pengeluaran" name="pengeluaran" class="form-control" placeholder="pengeluaran">
                        <?= form_error('pengeluaran', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jumlah_pengeluaran">jumlah_pengeluaran</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('jumlah_pengeluaran'); ?>" type="text" id="jumlah_pengeluaran" name="jumlah_pengeluaran" class="form-control" placeholder="jumlah_pengeluaran">
                        <?= form_error('jumlah_pengeluaran', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>



                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>