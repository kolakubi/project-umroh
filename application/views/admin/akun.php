<h1 class="text-center">Akun</h1>
<br><br>

<!-- button tambah -->
<a href="<?php echo base_url() ?>admin/akuntambah" class="btn btn-info">Tambah Akun +</a>
<br><br>

<!-- table -->
<div class="row">
    <div class="col-xs-12">

        <table class="table table-responsive table-bordered table-hover table-striped">
            <thead>
                <tr class="info">
                    <th class="text-center">Username</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Level</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($akun as $login) : ?>
                <tr>
                    <td><?php echo $login['username'] ?></td>
                    <td><?php echo $login['password'] ?></td>
                    <td><?php echo $login['email'] ?></td>
                    <!-- level -->
                    <td>
                    <?php 
                    if($login['level']==1){echo 'Admin';}
                    elseif($login['level']==2){echo 'Keuangan';}
                    elseif($login['level']==3){echo 'Direktur';}
                    elseif($login['level']==4){echo 'jamaah';}
                    elseif($login['level']==5){echo 'Front Office';} ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>admin/akunubah/<?php echo $login['username'] ?>" class="btn btn-warning">Ubah</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>