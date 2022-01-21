<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MediaWater</span>
    </a>
        <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $this->session->userdata(
                    'nama_lengkap'
                ); ?> | <?php echo $this->session->userdata('status'); ?></a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url(
                        'datapribadi'
                    ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Data Pribadi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('main'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-upload"></i>
                        <p>
                            Upload Disini
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(
                        'admin/index'
                    ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(
                        'admin/team'
                    ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Team Kami
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(
                        'login/logout'
                    ); ?>" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
