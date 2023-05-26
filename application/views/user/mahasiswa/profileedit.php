<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <ul class="list-group" style="max-width:350px; ">
        <form action="<?php echo base_url('mahasiswa/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $user['id']; ?>">
            <li class="list-group-item"><label for="">NIM :</label>
                <input class="form-control form-control-sm" type="number" style="max-width: 300px;" name="nim" value="<?= $user['nim'] ?>">
                <?= form_error('nim', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item">
                <label for="">Nama :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" value="<?= $user['name'] ?>" name="name">
                <?= form_error('name', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class=" list-group-item"><label for="">Tempat Lahir :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" name="place_of_birth" value="<?= $user['place_of_birth'] ?>">
                <?= form_error('place_of_birth', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item"><label for="">Tanggal Lahir :</label>
                <input class="form-control form-control-sm" type="date" style="max-width: 300px;" name="date_of_birth" value="<?= $user['date_of_birth'] ?>">
                <?= form_error('date_of_birth', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item"><label for="">Alamat :</label>
                <input class="form-control form-control-sm" type="text" style="max-width: 300px;" name="addres" value="<?= $user['addres'] ?>">
                <?= form_error('addres', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item"><label for="">Telpon :</label>
                <input class="form-control form-control-sm" type="number" style="max-width: 300px;" name="telp" value="<?= $user['telp'] ?>">
                <?= form_error('telp', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <li class="list-group-item">
                <label for="">Prodi :</label>
                <select class="form-control form-control-sm" name="prodi">
                    <option value="<?= $user['prodi'] ?>"><?= $user['prodi'] ?></option>
                    <option value="Teknik Informatika S1">Teknik Informatika S1</option>
                    <option value="Teknik Informatika D3">Teknik Informatika D3</option>
                    <option value="Manajemen Informatika D3">Manajemen Informatika D3</option>
                    <option value="Komputerisasi Akutansi D3">Komputerisasi Akutansi D3</option>
                </select>
                <?= form_error('prodi', '<small class="text-danger pl-3 ">', '</small>') ?>
            </li>
            <br>
            <a href="<?php echo base_url('') ?>mahasiswa">
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