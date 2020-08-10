    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">Menu Utama</li>
          <li class="">
            <a href="<?php echo base_url() . 'admin/dashboard' ?>">
              <i class="fa fa-home"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/pengguna' ?>">
              <i class="fa fa-users"></i> <span>Pengguna</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url() . 'admin/rental' ?>">
              <i class="fa fa-car"></i> <span>Rental</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/testi' ?>">
              <i class="fa fa-pencil"></i> <span>Testimoni</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-truck"></i>
              <span>Pengiriman Barang</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/jasa/konten' ?>"><i class="fa fa-camera"></i> Foto Konten</a></li>
              <li><a href="<?php echo base_url() . 'admin/jasa' ?>"><i class="fa fa-list"></i> Tabel Harga</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Konten</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url() . 'admin/landing' ?>"><i class="fa fa-list"></i> Landing Page</a></li>
              <li><a href="<?php echo base_url() . 'admin/welcome' ?>"><i class="fa fa-list"></i> Selamat Datang</a></li>
              <li><a href="<?php echo base_url() . 'admin/layanan' ?>"><i class="fa fa-list"></i> Layanan</a></li>
              <li><a href="<?php echo base_url() . 'admin/k_rental' ?>"><i class="fa fa-list"></i> Rental</a></li>
              <li><a href="<?php echo base_url() . 'admin/k_jasa' ?>"><i class="fa fa-list"></i> Jasa</a></li>
              <li><a href="<?php echo base_url() . 'admin/k_testi' ?>"><i class="fa fa-list"></i> Testimoni</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo base_url() . 'admin/kontak' ?>">
              <i class="fa fa-book"></i> <span>Kontak & Informasi</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>

          <li>
            <a href="<?php echo base_url() . 'administrator/logout' ?>">
              <i class="fa fa-sign-out"></i> <span>Sign Out</span>
              <span class="pull-right-container">
                <small class="label pull-right"></small>
              </span>
            </a>
          </li>


        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>