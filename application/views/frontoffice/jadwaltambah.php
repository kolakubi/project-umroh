<h1 class="text-center">Jadwal Keberangkatan</h1>
<br><br>

<div class="row">

    <!-- tabel biodata -->
    <div class="col-xs-12 col-md-4 col-md-offset-2">

        <table class="table table-responsive table-striped table-hover">
            <thead>
                <tr>
                    <th colspan="2">Biodata Jamaah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                        <img src="<?php echo base_url().'uploads/foto/'.$penjadwalan['foto'] ?>" class="img img-responsive">
                    </td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><?php echo $penjadwalan['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir:</td>
                    <td><?php echo $penjadwalan['tempatlahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><?php echo $penjadwalan['tanggallahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?php echo $penjadwalan['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $penjadwalan['telepon'] ?></td>
                </tr>
                <tr>
                    <td>Hp:</td>
                    <td><?php echo $penjadwalan['hp'] ?></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Penentuan Jadwal -->
    <div class="col-xs-12 col-md-4">

        <?php echo form_open('frontoffice/jadwaltambah/'.$penjadwalan['kode_pendaftaran']) ?>

            <!-- table keberangkatan -->
            <table class="table table-responsive table-striped table-hover">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kuota</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="radio">
                                <label><input type="radio" name="tanggalkeberangkatan" value="2018-10-15">15 Oktober <?php echo date('Y') ?></label>
                            </div>
                        </td>
                        <td rowspan="3" valign="center"><?php echo $penjadwalan['kuota'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="radio">
                                <label><input type="radio" name="tanggalkeberangkatan" value="2018-11-15">15 November <?php echo date('Y') ?></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="radio">
                                <label><input type="radio" name="tanggalkeberangkatan" value="2018-12-15">15 Desember <?php echo date('Y') ?></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="background-color: #f44242; text-align: center;">
                <span style="color: white;"><?php echo form_error('tanggalkeberangkatan') ?></span>
            </div>

            <!-- button -->
            <div class="col-xs-12">
                <div class="col-xs-6">
                    <button type="submit" class="btn btn-info btn-block">Simpan</button>
                </div>
                <div class="col-xs-6">
                    <a href="<?php echo base_url() ?>frontoffice/jadwal" class="btn btn-warning btn-block">Kembali</a>
                </div>
            </div>

        <?php ?>

    </div>

</div>