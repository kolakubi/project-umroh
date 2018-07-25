<h1 class="text-center">Paket <?php echo $paket['nama_produk'] ?></h1>

<!-- poster -->
<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <p class="text-center">
            <img src="<?php echo base_url() ?>asset/image/paket-zam-zam.jpg" alt="paket umroh shafa" class="img img-responsive" style="margin: 0 auto">
        </p>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <!-- rincian -->
        <table class="table table-bordered table-responsive table-striped">
            <thead>
                <tr>
                    <th colspan="2">Detail Paket <?php echo $paket['nama_produk'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hotel:</td>
                    <td><?php echo $paket['hotel'] ?></td>
                </tr>
                <tr>
                    <td>Lama:</td>
                    <td><?php echo $paket['hari'] ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?php echo 'Rp'.number_format($paket['harga'], 0, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- button daftar -->
<br>
<p class="text-center">
    <a href="<?php echo base_url() ?>home/daftarumroh/umroh001" class="btn btn-info">Pilih Paket Ini</a>
</p>