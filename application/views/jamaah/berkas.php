<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Berkas</h1>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>Kode Pedaftaran</th>
                    <th>Nama</th>
                    <th>Paket</th>
                    <th>Berkas KTP</th>
                    <th>Berkas KK</th>
                    <th>Berkas Passport</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                <?php foreach($pendaftaran as $daftar) : ?>

                <td><?php echo $daftar['kode_pendaftaran'] ?></td>
                <td><?php echo $daftar['nama'] ?></td>
                <td><?php echo $daftar['nama_produk'] ?></td>
                <td class="<?php if($daftar['status_berkas_ktp'] == 'valid'){echo 'success';}elseif($daftar['status_berkas_ktp'] == 'tidak valid'){echo 'danger';}else{echo 'info';} ?>"><?php echo $daftar['status_berkas_ktp'] ?></td>
                <td class="<?php if($daftar['status_berkas_kk'] == 'valid'){echo 'success';}elseif($daftar['status_berkas_kk'] == 'tidak valid'){echo 'danger';}else{echo 'info';} ?>"><?php echo $daftar['status_berkas_kk'] ?></td>
                <td class="<?php if($daftar['status_berkas_passport'] == 'valid'){echo 'success';}elseif($daftar['status_berkas_passport'] == 'tidak valid'){echo 'danger';}else{echo 'info';} ?>"><?php echo $daftar['status_berkas_passport'] ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo base_url() ?>jamaah/uploadberkas/<?php echo $daftar['kode_pendaftaran'] ?>">Upload Berkas</a>
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
                <td></td>
                <td></td>
            </tfoot>
        </table>
    </div>
</div> <!-- end of table -->