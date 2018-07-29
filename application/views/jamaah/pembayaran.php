<?php $index = 0 ?>

<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Pembayaran</h1>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>No</th>
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Harga</th>
                    <th>Invoice</th>
                    <th>Status Pembayaran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                <?php foreach($pendaftaran as $daftar) : ?>
                <?php $index++ ?>
                <td><?php echo $index ?></td>
                <td><?php echo $daftar['kode_pendaftaran'] ?></td>
                <td><?php echo $daftar['nama'] ?></td>
                <td><?php echo $daftar['nama_produk'] ?></td>
                <td><?php echo 'Rp'.number_format($daftar['nominal_pembayaran'], 0, ',', '.') ?></td>
                <td><?php echo $daftar['invoice'] ?></td>
                <td class="<?php if($daftar['status_pembayaran'] == 'valid'){echo 'success';}elseif($daftar['status_pembayaran'] == 'tidak valid'){echo 'danger';}else{echo 'default';} ?>"><?php echo $daftar['status_pembayaran'] ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo base_url() ?>jamaah/invoice/<?php echo $daftar['kode_pembayaran'] ?>">Bayar</a>
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