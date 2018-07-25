<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Validasi Berkas</h1>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover" style="margin: 0 auto">
            <thead>
                <tr class="info">
                    <th>Nama Berkas</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>KTP</td>
                    <td>
                         <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['ktp'])>0) : ?>
                            <a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['ktp']['nama_file'] ?>" target="_blank">Lihat berkas</a>
                        <?php else : ?>
                            <a>Tidak ada berkas</a>
                        <?php endif ?>
                    </td>
                    <td>
                        <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['ktp'])>0) : ?>
                            <!-- cek status berkas -->
                            <?php if($semuaberkas['ktp']['status_berkas_ktp'] != 'valid') :?>
                                <a href="<?php echo base_url() ?>frontoffice/berkasvalidktp/<?php echo $semuaberkas['ktp']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                                <a href="<?php echo base_url() ?>frontoffice/berkastidakvalidktp/<?php echo $semuaberkas['ktp']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                            <?php else : ?>
                                <a class="btn btn-success">Valid</a>
                            <?php endif ?>
                        <?php else : ?>
                            <a class="btn btn-danger">Berkas Belum di Upload</a>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>KK</td>
                    <td>
                         <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['kk'])>0) : ?>
                            <a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['kk']['nama_file'] ?>" target="_blank">Lihat berkas</a>
                        <?php else : ?>
                            <a>Tidak ada berkas</a>
                        <?php endif ?>
                    </td>
                    <td>
                        <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['kk'])>0) : ?>
                            <!-- cek status berkas -->
                            <?php if($semuaberkas['kk']['status_berkas_kk'] != 'valid') :?>
                                <a href="<?php echo base_url() ?>frontoffice/berkasvalidkk/<?php echo $semuaberkas['kk']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                                <a href="<?php echo base_url() ?>frontoffice/berkastidakvalidkk/<?php echo $semuaberkas['kk']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                            <?php else : ?>
                                <a class="btn btn-success">Valid</a>
                            <?php endif ?>
                        <?php else : ?>
                            <a class="btn btn-danger">Berkas Belum di Upload</a>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>Passport</td>
                    <td>
                         <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['passport'])>0) : ?>
                            <a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['passport']['nama_file'] ?>" target="_blank">Lihat berkas</a>
                        <?php else : ?>
                            <a>Tidak ada berkas</a>
                        <?php endif ?>
                    </td>
                    <td>
                        <!-- cek jika ada berkas -->
                        <?php if(count($semuaberkas['passport'])>0) : ?>
                            <!-- cek status berkas -->
                            <?php if($semuaberkas['passport']['status_berkas_passport'] != 'valid') :?>
                                <a href="<?php echo base_url() ?>frontoffice/berkasvalidpassport/<?php echo $semuaberkas['passport']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                                <a href="<?php echo base_url() ?>frontoffice/berkastidakvalidpassport/<?php echo $semuaberkas['passport']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                            <?php else : ?>
                                <a class="btn btn-success">Valid</a>
                            <?php endif ?>
                        <?php else : ?>
                            <a class="btn btn-danger">Berkas Belum di Upload</a>
                        <?php endif ?>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <td></td>
                <td></td>
                <td></td>
            </tfoot>
        </table>
    </div>
</div> <!-- end of table -->
<br><br>
<p class="text-center">
    <a class="btn btn-info" href="<?php echo base_url() ?>frontoffice/berkas">kembali</a>
</p>