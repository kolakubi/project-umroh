<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Pembatalan</h1>
    </div>
</div>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Kode Pembatalan</th>
                    <th>Kode Pendaftaran</th>
                    <th>Metode</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pembatalan as $batal) : ?>
                    <tr>
                        <td><?php echo $batal['kode_pembatalan'] ?></td>
                        <td><?php echo $batal['kode_pendaftaran'] ?></td>
                        <!-- metode pembatalan -->
                        <td><?php if($batal['metode_pembatalan'] == 1){echo 'refund';}elseif($batal['metode_pembatalan'] == 2){echo 'wariskan';} ?></td>
                        <!-- status -->
                        <td class="<?php if($batal['status_pembatalan']){echo 'success';}else{echo 'danger';} ?>"><?php if($batal['status_pembatalan']){echo 'selesai';}else{echo 'pending';} ?></td>
                        <!-- action -->
                        <td>
                            <?php if($batal['status_pembatalan'] ) : ?>
                                <a class="btn btn-success">Approved</a>
                            <?php else : ?>
                                <?php if($batal['metode_pembatalan'] == 1) : ?>
                                    <a href="<?php echo base_url() ?>frontoffice/pembatalanrefund/<?php echo $batal['kode_pembatalan'] ?>" class="btn btn-info">Detail</a>
                                <?php else : ?>
                                    <a href="<?php echo base_url() ?>frontoffice/pembatalanwaris/<?php echo $batal['kode_pembatalan'] ?>" class="btn btn-info">Detail</a>
                                <?php endif ?>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div> <!-- end of table -->