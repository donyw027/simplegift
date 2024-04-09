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
                        <a href="<?= base_url('saldo') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open('', [], ['id' => $saldo['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tgl">Tgl Penambahan</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('tgl', $saldo['tgl']); ?>" type="text" id="tgl" name="tgl" class="form-control" placeholder="tgl">
                        <?= form_error('tgl', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="saldo">saldo</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('saldo', $saldo['saldo']); ?>" type="text" id="saldo" name="saldo" class="form-control" placeholder="saldo">
                        <?= form_error('saldo', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="ket">keterangan</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('ket', $saldo['ket']); ?>" type="text" id="ket" name="ket" class="form-control" placeholder="ket">
                        <?= form_error('ket', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>


                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Simpan</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>