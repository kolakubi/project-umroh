<h1 class="text-center">Paket <?php echo $paket['nama_produk'] ?></h1>

<!-- poster -->
<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">
        <p class="text-center">
            <img src="<?php echo base_url() ?>asset/image/kabah.jpg" alt="paket umroh shafa" class="img img-responsive" style="margin: 0 auto">
        </p>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <!-- pembuka -->
        <p class="text-center">Paket Ekonomi dengan akomodasi Hotel Bintang 2 atau 1</p>
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
                    <td>
                        <?php echo $paket['hotel'] ?>
                        <br>
                        <ul>
                            <li>Makkah : Maather Aljewaar (600m) **</li>
                            <li>Madinah : Mubarak Almasi ( 200m) **</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Pesawat:</td>
                    <td>Lion Air, dan Batavia</td>
                </tr>
                <tr>
                    <td>Lama:</td>
                    <td><?php echo $paket['hari'] ?> hari</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><?php echo 'Rp'.number_format($paket['harga'], 0, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Kuota:</td>
                    <td><?php echo $paket['kuota'] ?></td>
                </tr>
                <tr>
                    <td valign="center">Keberangkatan</td>
                    <td>Oktober<br>November<br>Desember</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- button daftar -->
<br>
<p class="text-center">
    <a href="<?php echo base_url() ?>home/daftarumroh/umrah002" class="btn btn-info">Pilih Paket Ini</a>
</p>