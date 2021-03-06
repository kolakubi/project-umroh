<?php $index = 1; ?>


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
                    <th>No</th>
                    <th>kode Daftar</th>
                    <th>KTP</th>
                    <th>Nama</th>
                    <th>Status Berkas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($pendaftaran as $daftar) : ?>
                    <td><?php echo $index ?></td>
                    <td><?php echo $daftar['kode_pendaftaran'] ?></td>
                    <td><?php echo $daftar['ktp'] ?></td>
                    <td><?php echo $daftar['nama'] ?></td>
                    <td class="<?php if(empty($daftar['ket_status_berkas'])){echo 'danger';}else{echo 'success';} ?>"><?php if($daftar['ket_status_berkas'] == null){echo 'belum valid';}else{echo $daftar['ket_status_berkas'];} ?></td>
                    <td>
                        <a class="btn btn-info" href="<?php echo base_url() ?>frontoffice/berkasvalidasi/<?php echo $daftar['kode_pendaftaran'] ?>">Validasi Berkas</a>
                    </td>
                </tr>
                <?php $index++ ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
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
