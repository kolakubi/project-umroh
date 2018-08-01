<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Status Pembatalan</h1>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                
                <?php foreach($pembatalan as $batal) : ?>
                <tr>
                    <td><?php echo $batal['kode_pendaftaran'] ?></td>
                    <td><?php echo $batal['nama'] ?></td>
                    <td><?php echo $batal['nama_produk'] ?></td>
                    <td class="<?php if($batal['status_pembatalan']){echo 'success';}else{echo 'danger';} ?>"><?php if($batal['status_pembatalan']){echo 'Approved';}else{echo 'Pending';} ?></td>
                </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div> <!-- end of table -->