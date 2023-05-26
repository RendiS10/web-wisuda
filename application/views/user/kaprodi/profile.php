<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile</h1>
    <?php echo $this->session->flashdata('message') ?>
    <ul class="list-group" style="max-width:540px; ">
        <li class="list-group-item">Nama Kaprodi : <?= $user['name'] ?></li>
        <li class="list-group-item">Kode Kaprodi : <?= $user['kode_prodi'] ?></li>
        <li class="list-group-item">Kode Dosen : <?= $user['kode_dosen'] ?></li>
    </ul>
    <br>
    <a href="<?php echo base_url('') ?>Kaprodi/edit/<?php echo $user['id'] ?>">
        <i class="fas fa-user-edit"> Edit</i>
    </a>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->