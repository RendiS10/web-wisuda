<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">DAFTAR MENU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Mahasiswa
    </div>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('') ?>mahasiswa/daftarwisuda">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Daftar Wisuda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('') ?>mahasiswa/status">
            <i class="fas fa-fw fa-user-check"></i>
            <span>Status Acc</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->