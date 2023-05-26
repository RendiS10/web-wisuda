<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <?php echo $this->session->flashdata('message') ?>
    <ul class="list-group" style="max-width:540px; ">
        <li class="list-group-item">NIM : <?= $user['nim'] ?></li>
        <li class="list-group-item">Nama : <?= $user['name'] ?></li>
        <li class="list-group-item">Tempat Lahir : <?= $user['place_of_birth'] ?></li>
        <li class="list-group-item">Tanggal Lahir : <?= $user['date_of_birth'] ?></li>
        <li class="list-group-item">Alamat : <?= $user['addres'] ?></li>
        <li class="list-group-item">Telpon : <?= $user['telp'] ?></li>
        <li class="list-group-item">Prodi : <?= $user['prodi'] ?></li>
    </ul>
    <br>
    <a href="<?php echo base_url('') ?>Mahasiswa/edit/<?php echo $user['id'] ?>">
        <i class="fas fa-user-edit"> Edit</i>
    </a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->