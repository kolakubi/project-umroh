<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Pemohonan Pembatalan</h1>
    </div>
</div>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Kode Pedaftaran</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                <?php foreach($pendaftaran as $daftar) : ?>

                <td><?php echo $daftar['kode_pendaftaran'] ?></td>
                <td><?php echo $daftar['nama'] ?></td>
                <td><?php echo $daftar['nama_produk'] ?></td>
                <td><?php echo $daftar['ket_status_pembayaran'] ?></td>
                <td>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>jamaah/metodepembatalan/<?php echo $daftar['kode_pendaftaran'] ?>">Batalkan</a>
                </td>
                </tr>

                <?php endforeach ?>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tfoot>
        </table>
    </div>
</div> <!-- end of table -->