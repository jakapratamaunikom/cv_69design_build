<?php Defined("BASE_PATH") or die("Dilarang Mengakses File Secara Langsung"); ?>

<!-- Left Sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      	<!-- Sidebar user panel (optional) -->
      	<div class="user-panel">
        	<div class="pull-left image">
          		<img src="<?= $_SESSION['sess_foto']; ?>" class="img-circle" alt="User Image">
        	</div>
        	<div class="pull-left info">
          		<p><?= $_SESSION['sess_nama']; ?></p>
          		<!-- Status -->
          		<a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
        	</div>
      	</div>

      	<!-- Sidebar Menu -->
      	<ul class="sidebar-menu" data-widget="tree">
        	<li class="header">MENU NAVIGASI</li>
        	<?php echo $this->menuSidebar; ?>
      	</ul>
      	<!-- /.sidebar-menu -->
	</section>
    <!-- /.sidebar -->
</aside>
<!-- end left sidebar -->