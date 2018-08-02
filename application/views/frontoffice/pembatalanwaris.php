<h1 class="text-center">Pembatalan Refund</h1>
<br><br>

<div class="row">

    <!-- tabel biodata -->
    <div class="col-xs-12 col-md-4">

        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <th colspan="2">Biodata Jamaah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <img src="<?php echo base_url().'uploads/foto/'.$pembatalan[0]['foto'] ?>" class="img img-responsive">
                    </td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><?php echo $pembatalan[0]['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir:</td>
                    <td><?php echo $pembatalan[0]['tempatlahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><?php echo $pembatalan[0]['tanggallahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?php echo $pembatalan[0]['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $pembatalan[0]['telepon'] ?></td>
                </tr>
                <tr>
                    <td>Hp:</td>
                    <td><?php echo $pembatalan[0]['hp'] ?></td>
                </tr>
            </tbody>
        </table>

    </div> <!-- end of biodata jamaah -->

    <!-- tabel biodata yg diwariskan-->
    <div class="col-xs-12 col-md-4">

        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <th colspan="2">Biodata Ahli Waris</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <img src="<?php echo base_url().'uploads/foto/'.$pewaris['foto'] ?>" class="img img-responsive">
                    </td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><?php echo $pewaris['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir:</td>
                    <td><?php echo $pewaris['tempatlahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><?php echo $pewaris['tanggallahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?php echo $pewaris['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $pewaris['telepon'] ?></td>
                </tr>
                <tr>
                    <td>Hp:</td>
                    <td><?php echo $pewaris['hp'] ?></td>
                </tr>
            </tbody>
        </table>

    </div> <!-- end of biodata yang diwariskan -->

    <!-- alasan -->
    <div class="col-xs-12 col-md-4">

        <!-- alasan -->
        <p>Alasan Pembatalan:</p>
        <div class="well">
            <p><?php echo $pembatalan[0]['alasan_pembatalan'] ?></p>
        </div>

        <!-- status pembayaran -->
        <p>Status Pembayaran:</p>
        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <th>Metode</th>
                    <th>Status</th>
                </tr>
            </thead>
            <?php foreach($pembatalan as $batal) : ?>
            <tr class="<?php if($batal['status_pembayaran']){echo 'success';}else{echo 'danger';} ?>">
                <td><?php echo $batal['metodepembayaran'] ?></td>
                <td><?php if($batal['status_pembayaran']){echo 'lunas';}else{echo 'belum lunas';} ?></td>
            </tr>
            <?php endforeach ?>
        </table>

        <!-- button -->
        <div class="row">
            <div class="col-xs-6">
                <a href="<?php echo base_url() ?>frontoffice/pembatalanapprove/<?php echo $pembatalan[0]['kode_pembatalan'] ?>" class="btn btn-info btn-block">Approve</a>
            </div>
            <div class="col-xs-6">
                <a href="<?php echo base_url() ?>frontoffice/pembatalan" class="btn btn-warning btn-block">Kembali</a>
            </div>
        </div>

    </div>

</div>