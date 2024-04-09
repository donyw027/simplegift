<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm mb-4 border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data saldo
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('saldo/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-user-plus"></i>
                    </span>
                    <span class="text">
                        Tambah saldo
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th width="30">No.</th>
                    <th>Tgl Penambahan Saldo</th>
                    <th>saldo</th>
                    <th>Keterangan</th>

                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($saldo) :
                    foreach ($saldo as $saldoi) :
                ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?=$saldoi['tgl'] ?></td>
                            <td><?="Rp. " . number_format($saldoi['saldo'],0,',','.'); ?></td>
                            <td><?=$saldoi['ket'] ?></td>
                            <td>

                                <a href="<?= base_url('saldo/edit/') . $saldoi['id'] ?>" class="btn btn-circle btn-sm btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('saldo/delete/') . $saldoi['id'] ?>" class="btn btn-circle btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                            </td>
                            
                        </tr>
                    <?php endforeach;
                else : ?>
                    <tr>
                        <td colspan="8" class="text-center">Silahkan tambahkan saldo baru</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>