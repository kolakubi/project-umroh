<h1 class="text-center">Produk</h1>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">

        <table class="table table-responsive table-bordered table-hover table-striped">
            <thead>
                <tr class="info">
                    <th class="text-center">Kode Produk</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Hotel</th>
                    <th class="text-center">Hari</th>
                    <th class="text-center">Kuota</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produk as $paket) : ?>
                <tr>
                    <td><?php echo $paket['kode_produk'] ?></td>
                    <td><?php echo $paket['nama_produk'] ?></td>
                    <td><?php echo 'Rp '.number_format($paket['harga'], 0, ',', '.') ?></td>
                    <td><?php echo $paket['hotel'] ?></td>
                    <td><?php echo $paket['hari'] ?></td>
                    <td><?php echo number_format($paket['kuota'], 0, ',', '.') ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>admin/produkubah/<?php echo $paket['kode_produk'] ?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>