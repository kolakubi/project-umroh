<h1 class="text-center">Data Jamaah</h1>

<div class="row">
    <div class="col-xs-12 col-md-4 col-md-offset-4">

        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">
                        <img src="<?php echo base_url().'uploads/foto/'.$jamaah['foto'] ?>" alt="" class="img img-responsive" style="margin: 0 auto;">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No KTP:</td>
                    <td><?php echo $jamaah['ktp'] ?></td>
                </tr>
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
                    <td>Pekerjaan:</td>
                    <td><?php echo $jamaah['pekerjaan'] ?></td>
                </tr>
                <tr>
                    <td>Muka:</td>
                    <td><?php echo $jamaah['muka'] ?></td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<!-- button kembali -->
<p class="text-center">
    <a class="btn btn-info" href="<?php echo base_url() ?>admin/jamaah/">kembali</a>
</p>