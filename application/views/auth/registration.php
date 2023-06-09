    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun !</h1>
                            </div>
                            <form class="user" method="post" action="<?php echo base_url('auth/registration') ?>">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" placeholder="Fullname" name="name" value="<?= set_value('name') ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3 ">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email" value="<?= set_value('email') ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3 ">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                                        <?= form_error('password1', '<small class="text-danger pl-3 ">', '</small>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Repeat Password" name="password2">
                                    </div>
                                </div>
                                <button href="" class="btn btn-primary btn-user btn-block" type="submit">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth') ?>">Kamu Sudah Terdaftar ? Silahkan Login !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>