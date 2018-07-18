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
                    <td><a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['ktp']['nama_file'] ?>" target="_blank">Lihat berkas</a></td>
                    <td>
                        <?php if($semuaberkas['ktp']['status_berkas_ktp'] != 'valid') :?>
                            <a href="<?php echo base_url() ?>admin/berkasvalidktp/<?php echo $semuaberkas['ktp']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                            <a href="<?php echo base_url() ?>admin/berkastidakvalidktp/<?php echo $semuaberkas['ktp']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                        <?php else : ?>
                            <a class="btn btn-success">Valid</a>
                        <?php endif ?> 
                    </td>
                </tr>
                <tr>
                    <td>KK</td>
                    <td><a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['kk']['nama_file'] ?>" target="_blank">Lihat berkas</a></td>
                    <td>
                        <?php if($semuaberkas['kk']['status_berkas_kk'] != 'valid') :?>
                            <a href="<?php echo base_url() ?>admin/berkasvalidkk/<?php echo $semuaberkas['kk']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                            <a href="<?php echo base_url() ?>admin/berkastidakvalidkk/<?php echo $semuaberkas['kk']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                        <?php else : ?>
                            <a class="btn btn-success">Valid</a>
                        <?php endif ?>
                    </td>
                </tr>
                <tr>
                    <td>Passport</td>
                    <td><a href="<?php echo base_url() ?>uploads/<?php echo $semuaberkas['passport']['nama_file'] ?>" target="_blank">Lihat berkas</a></td>
                    <td>
                        <?php if($semuaberkas['passport']['status_berkas_passport'] != 'valid') :?>
                            <a href="<?php echo base_url() ?>admin/berkasvalidpassport/<?php echo $semuaberkas['passport']['kode_pendaftaran'] ?>" class="btn btn-warning">valid</a>
                            <a href="<?php echo base_url() ?>admin/berkastidakvalidpassport/<?php echo $semuaberkas['passport']['kode_pendaftaran'] ?>" class="btn btn-danger">tidak valid</a>
                        <?php else : ?>
                            <a class="btn btn-success">Valid</a>
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
    <a class="btn btn-info" href="<?php echo base_url() ?>admin/berkas">kembali</a>
</p>