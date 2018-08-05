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
                    <th>Kode Pendaftaran</th>
                    <th>Nominal Harus Dibayar</th>
                    <th>File</th>
                    <th>Invoice</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hasil as $pembayaran) : ?>
                    <?php $index++ ?>
                    <tr>
                        <td><?php echo $pembayaran['kode_pendaftaran'] ?></td>
                        <td><?php echo 'Rp'.number_format($pembayaran['nominal_pembayaran'], 0, ',', '.') ?></td>
                        <!-- file -->
                        <td>
                            <?php if(empty($pembayaran['file_bukti_pembayaran'])) : ?>
                            <a target="_blank">Tidak ada file</a>
                            <?php else :?>
                            <a target="_blank" href="<?php echo base_url().'uploads/'.$pembayaran['file_bukti_pembayaran'] ?>">lihat file</a>

                            <?php endif ?>
                        </td>

                        <td><?php echo $pembayaran['invoice'] ?></td>

                        <!-- status -->
                        <td class="<?php if($pembayaran['status_pembayaran']){echo 'success';}else{echo 'danger';} ?>">
                            <?php if($pembayaran['status_pembayaran']) : ?>
                                Lunas
                            <?php else : ?>
                                Belum Lunas
                            <?php endif ?>
                        
                        </td>
                        <td>
                            <!-- cek ketersediaan berkas -->
                            <!-- jika tidak ada berkas -->
                            <?php if(empty($pembayaran['file_bukti_pembayaran'])) : ?>
                                <a href="" class="btn btn-warning">Tidak ada berkas</a>

                            <!-- jika ada berkas -->
                            <?php else : ?>
                                <!-- ubah warna field berdasarkan status pembayaran -->
                                <?php if($pembayaran['status_pembayaran']) : ?>
                                <a href="<?php echo base_url() ?>keuangan/statusvalid/<?php echo $pembayaran['kode_pembayaran'] ?>" class="btn btn-success">Valid</a>
                                <?php else : ?>
                                <a href="<?php echo base_url() ?>keuangan/statusvalid/<?php echo $pembayaran['kode_pembayaran'] ?>" class="btn btn-success">Valid</a>
                                <a href="<?php echo base_url() ?>keuangan/statustidakvalid/<?php echo $pembayaran['kode_pembayaran'] ?>" class="btn btn-danger">Tidak Valid</a>
                                <?php endif ?>
                            <?php endif ?>
                            
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>