<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="<?= base_url() ?>/template/assets/img/find_user.png" class="user-image img-responsive" />
            </li>

            <li>
                <a class="active-menu" href="<?= site_url() ?>"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a>
            </li>

            <li>
                <a href="<?= site_url('event') ?>"><i class="fa fa-desktop fa-3x"></i> Event</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Database<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= site_url('mahasiswa') ?>">Daftar Mahasiswa</a>
                    </li>
                    <li>
                        <a href="#">Daftar Fakultas<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Kelola Data Fakultas</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                    <li>
                        <a href="#">Daftar Jurusan</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Invitation<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Saya Mengundang</a>
                    </li>
                    <li>
                        <a href="#">Saya Diundang</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>

</nav>