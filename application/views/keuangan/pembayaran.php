<?php

    $index = 0;

?>

<h1 class="text-center">Pembayaran</h1>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pendaftaran</th>
                    <th>Nominal Harus Dibayar</th>
                    <th>File</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hasil as $pembayaran) : ?>
                    <?php $index++ ?>
                    <tr>
                        <td><?php echo $index ?></td>
                        <td><?php echo $pembayaran['kode_pendaftaran'] ?></td>
                        <td><?php echo 'Rp'.number_format($pembayaran['nominal_pembayaran'], 0, ',', '.') ?></td>
                        <td><a target="_blank" href="<?php echo base_url().'uploads/'.$pembayaran['file_bukti_pembayaran'] ?>">lihat file</a></td>
                        <td>
                            <?php if($pembayaran['status_pembayaran']) : ?>
                                Valid
                            <?php else : ?>
                                Tidak Valid
                            <?php endif ?>
                        
                        </td>
                        <td>
                            <a href="<?php echo base_url() ?>keuangan/statusvalid/<?php echo $pembayaran['kode_pembayaran'] ?>" class="btn btn-success">Valid</a>
                            <a href="<?php echo base_url() ?>keuangan/statustidakvalid/<?php echo $pembayaran['kode_pembayaran'] ?>" class="btn btn-danger">Tidak Valid</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>