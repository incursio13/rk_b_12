
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php
          if (isset($_SESSION['login'])){
            if ($_SESSION['user']=='admin') {
              echo '<p>'.$_SESSION['user'].'</p>';
            }
            else
              echo '<p>'.$_SESSION['user'].'</p>';
          }
          
          ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <?php
          if (isset($_SESSION['login'])){
            if ($_SESSION['user']=='admin') {
              echo '<li><a href="add_user.php"><i class="fa fa-user"></i> <span>User</span></a></li>';
            }
          }
          
          ?>       
        <li><a href="profil.php"><i class="fa fa-user"></i> <span>Profil</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gift"></i> <span>Barang Hilang</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tambah_barang_hilang.php"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
            <li><a href="list_barang_hilang.php"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-bag"></i> <span>Barang Temuan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tambah_barang_temuan.php"><i class="fa fa-circle-o"></i> Tambah Barang</a></li>
            <li><a href="list_barang_temuan.php"><i class="fa fa-circle-o"></i> List</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Pesan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tulis_pesan.php"><i class="fa fa-circle-o"></i> Tulis Pesan</a></li>
            <li><a href="pesan_masuk.php"><i class="fa fa-circle-o"></i> Pesan Masuk
              <span class="label label-primary pull-right">12</span>
            </a></li>
            <li><a href="pesan_terkirim.php"><i class="fa fa-circle-o"></i> Pesan Terkirim</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
