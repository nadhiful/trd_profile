<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <?php 
  $kunci = $this->session->userdata('id_role');
  ?>
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/backend/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">الحمد لله</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/backend/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator TRD</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview" id="profile_main">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" id="profile_a">
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/profile') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose Profile</p>
                </a>
              </li>
              <li class="nav-item" id="profile_b">
                <a href="<?php echo site_url('Admin/vision') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Perusahaan</p>
                </a>
              </li>
              <li class="nav-item" id="profile_c">
                <a href="<?php echo site_url('Admin/mission') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Misi Perusahaan</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview" id="unit_main">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Unit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" id="dm_unit">
                <a href="<?php echo site_url('Admin/diesel') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DM(Diesel Manufacture)</p>
                </a>
              </li>
              <li class="nav-item" id="sm_unit">
                <a href="<?php echo site_url('Admin/marine') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SM(Santosa Marine)</p>
                </a>
              </li>
              <li class="nav-item" id="mc_unit">
                <a href="<?php echo site_url('Admin/machine') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MC(Machining Center)</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview" id="extended_main">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Extended Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" id="karir">
              <li class="nav-item">
                <a href="<?php echo site_url('Admin/career') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karir</p>
                </a>
              </li>
              <li class="nav-item" id="event">
                <a href="<?php echo site_url('Admin/event') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
              <li class="nav-item" id="user">
                <a href="<?php echo site_url('Admin/manage_user') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Management User</p>
                </a>
              </li>
              <li class="nav-item" id="messages">
                <a href="<?php echo site_url('Admin/pesan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    var kunci = '<?php echo $kunci ?>';
    if (kunci == "HRO") {
       document.getElementById("profile_main").style.display = "none";
       document.getElementById("unit_main").style.display = "none";
       document.getElementById("user").style.display = "none";
    }else if(kunci == "DMO"){
      document.getElementById("profile_main").style.display = "none";
      document.getElementById("sm_unit").style.display = "none";
      document.getElementById("mc_unit").style.display = "none";
      document.getElementById("extended_main").style.display = "none";
    }else if(kunci == "SMO"){
      document.getElementById("profile_main").style.display = "none";
      document.getElementById("dm_unit").style.display = "none";
      document.getElementById("mc_unit").style.display = "none";
      document.getElementById("extended_main").style.display = "none";
    }else if(kunci == "MCO"){
      document.getElementById("profile_main").style.display = "none";
      document.getElementById("sm_unit").style.display = "none";
      document.getElementById("dm_unit").style.display = "none";
      document.getElementById("extended_main").style.display = "none";
    }
  </script>