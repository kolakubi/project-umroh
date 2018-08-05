<h1 class="text-center">Jamaah</h1>
<br><br>

<!-- button tambah -->
<a href="<?php echo base_url() ?>admin/jamaahtambah" class="btn btn-info">Tambah Jamaah +</a>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">

        <table class="table table-responsive table-bordered table-hover table-striped">
            <thead>
                <tr class="info">
                    <th class="text-center">ktp</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Kelamin</th>
                    <th class="text-center">Kewarganegaraan</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jamaah as $orang) : ?>
                <tr>
                    <td><?php echo $orang['ktp'] ?></td>
                    <td><?php echo $orang['nama'] ?></td>
                    <td><?php echo $orang['telepon'] ?></td>
                    <td><?php echo $orang['kelamin'] ?></td>
                    <td><?php echo $orang['kewarganegaraan'] ?></td>
                    <!-- action -->
                    <td>
                        <!-- detail -->
                        <a href="<?php echo base_url() ?>admin/jamaahdetail/<?php echo $orang['ktp'] ?>" class="btn btn-info">Detail</a>
                        <!-- ubah -->
                        <a href="<?php echo base_url() ?>admin/jamaahdetail/<?php echo $orang['ktp'] ?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>