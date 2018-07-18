<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center">Jamaah</h1>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col-xs-12">
        <table class="table table-condensed table-borderd table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>KTP</th>
                    <th>Nama</th>
                    <th>Kelamin</th>
                    <th>Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($pendaftaran as $daftar) : ?>
                    <td><?php echo $daftar['ktp'] ?></td>
                    <td><?php echo $daftar['nama'] ?></td>
                    <td><?php echo $daftar['kelamin'] ?></td>
                    <td><?php echo $daftar['telepon'] ?></td>
                    <td>
                        <a class="btn btn-success" href="<?php echo base_url() ?>jamaah/uploadberkas/<?php echo $daftar['kode_pendaftaran'] ?>">lihat Detail</a>
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