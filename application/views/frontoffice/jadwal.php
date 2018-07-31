<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Jadwal Keberangkatan</h1>
    </div>
</div>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Kode Pendaftaran</th>
                    <th>Status Berkas</th>
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pendaftaran as $daftar) : ?>
                    <tr>
                        <td><?php echo $daftar['kode_pendaftaran'] ?></td>
                        <!-- status berkas -->
                        <td class="<?php if(empty($daftar['ket_status_berkas'])){echo 'danger';}else{echo 'success';} ?>"><?php echo $daftar['ket_status_berkas'] ?></td>
                        <!-- status pembayaran -->
                        <td class="<?php if(empty($daftar['ket_status_pembayaran'])){echo 'danger';}else{echo 'success';} ?>"><?php echo $daftar['ket_status_pembayaran'] ?></td>
                        <!-- action -->
                        <td>
                            <?php if(!empty($daftar['ket_status_berkas']) && !empty($daftar['ket_status_pembayaran'])) : ?>
                                <a class="btn btn-info">Tentukan Jadwal</a>
                            <?php else : ?>
                                <a class="btn btn-danger">Berkas Belum Lengkap</a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tfoot>
        </table>
    </div>
</div> <!-- end of table -->