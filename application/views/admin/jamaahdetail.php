<h1 class="text-center">Data Jamaah</h1>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center"><?php echo $jamaah['ktp'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama:</td>
                    <td><?php echo $jamaah['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir:</td>
                    <td><?php echo $jamaah['tempatlahir'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir:</td>
                    <td><?php echo $jamaah['tanggallahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?php echo $jamaah['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Kelamin:</td>
                    <td><?php echo $jamaah['kelamin'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $jamaah['telepon'] ?></td>
                </tr>
                <tr>
                    <td>HP:</td>
                    <td><?php echo $jamaah['hp'] ?></td>
                </tr>
                <tr>
                    <td>Pendidikan:</td>
                    <td><?php echo $jamaah['pendidikan'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $jamaah['telepon'] ?></td>
                </tr>
                <tr>
                    <td>Telepon:</td>
                    <td><?php echo $jamaah['telepon'] ?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<!-- button kembali -->
<p class="text-center">
    <a class="btn btn-info" href="<?php echo base_url() ?>admin/">kembali</a>
</p>