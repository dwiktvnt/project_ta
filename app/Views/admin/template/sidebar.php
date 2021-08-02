<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><strong>SPPK</strong></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item  ">
                    <a href="<?= base_url('admin'); ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item  ">
                    <a href="<?= base_url('admin/profile'); ?>" class='sidebar-link'>
                        <i class="bi bi-person-circle"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <?php if (in_groups('admin')) : ?>
                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/userList'); ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>User List</span>
                        </a>
                    </li>
                <?php endif; ?>

                <?php if (in_groups('admin')) : ?>
                    <li class="sidebar-title">Data Management</li>

                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/dataGejala'); ?>" class='sidebar-link'>
                            <i class="bi bi-clipboard-data"></i>
                            <span>Data Gejala</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/dataPenyakit'); ?>" class='sidebar-link'>
                            <i class="bi bi-clipboard-data"></i>
                            <span>Data Penyakit</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/dataSolusi'); ?>" class='sidebar-link'>
                            <i class="bi bi-clipboard-data"></i>
                            <span>Data Solusi</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/rulePakar'); ?>" class='sidebar-link'>
                            <i class="bi bi-clipboard-data"></i>
                            <span>Rule Pakar</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="<?= base_url('admin/riwayatDiagnosa'); ?>" class='sidebar-link'>
                            <i class="bi bi-file-earmark-check-fill"></i>
                            <span>Riwayat Diagnosa</span>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="sidebar-title">Setting</li>

                <li class="sidebar-item  ">
                    <a href="<?= base_url('logout'); ?>" class='sidebar-link'>
                        <i class="bi bi-door-closed-fill"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>