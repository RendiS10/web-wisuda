<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <ul class="list-group" style="max-width:350px; ">
        <form action="<?php echo base_url('kaprodi/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <li class="list-group-item">
                <label for="">Nama :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" value="<?= $user['name'] ?>" name="name">
                <?= form_error('name', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class=" list-group-item"><label for="">Kode Kaprodi :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" name="kode_prodi" value="<?= $user['kode_prodi'] ?>">
                <?= form_error('kode_prodi', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item"><label for="">Kode Dosen :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" name="kode_dosen" value="<?= $user['kode_dosen'] ?>">
                <?= form_error('kode_dosen', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <br>
            <br>
            <a href="<?php echo base_url('') ?>kaprodi">
                <i class="fas fa-long-arrow-alt-left"> Back</i>
            </a>
            <button type="submit" class="btn btn-primary fas fa-save ml-5" name="update">
                Save
            </button>

        </form>
    </ul>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->