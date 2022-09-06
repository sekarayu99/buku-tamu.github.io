<!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url();?>assets/dist/img/user-icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $login['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?= base_url('tamu');?>">
            <i class="fa fa-user"></i> <span> Data Tamu</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('auth/logout');?>">
            <i class="fa fa-sign-out"></i> <span> Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title;?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?= base_url('dashboard/'.$this->uri->segment(2));?>"><?= ucfirst(str_replace('_', '', $this->uri->segment(2)));?></a></li>
        <li class="active"><?= $title;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
