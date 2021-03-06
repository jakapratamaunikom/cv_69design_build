<?php Defined("BASE_PATH") or die("Dilarang Mengakses File Secara Langsung"); ?>

<!-- Header -->
<header class="main-header">
	<!-- logo -->
	<a href="<?= BASE_URL ?>" class="logo">
		<!-- logo mini -->
		<span class="logo-mini">69</span>
		<!-- logo default -->
		<span class="logo-lg">69 Design & Build</span>
	</a>

	<!-- header navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- sidebar toggle button -->
		<a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
	  	</a>
	  	<!-- navbar menu notifikasi, profil -->
	  	<div class="navbar-custom-menu">
	  		<ul class="nav navbar-nav">

	          	<!-- notifikasi -->
	          	<li class="dropdown notifications-menu">
		            <!-- Menu toggle button -->
		            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
		              	<i class="fa fa-bell-o"></i>
		              	<span class="label label-warning label-jumlah"></span>
		            </a>
		            <ul class="dropdown-menu">
		              	<li class="header label-notif"></li>
		              	<li>
		                	<!-- Inner Menu: contains the notifications -->
		                	<ul class="menu" id="data-notif">
		                  		
		                	</ul>
		              	</li>
		              	<li class="footer"><a id="view-all" href="javascript:void(0)">View all</a></li>
            		</ul>
	          	</li>
	          	<!-- end notifikasi -->

	          	<!-- user account menu -->
	          	<li class="dropdown user user-menu">
		            <!-- Menu Toggle Button -->
		            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
		              	<!-- The user image in the navbar-->
		              	<img src="<?= $_SESSION['sess_foto']; ?>" class="user-image" alt="User Image">
		              	<!-- hidden-xs hides the username on small devices so only the image appears. -->
		              	<span class="hidden-xs"><?= $_SESSION['sess_nama']; ?></span>
		            </a>
		            <ul class="dropdown-menu">
		              	<!-- The user image in the menu -->
		              	<li class="user-header">
		                	<img src="<?= $_SESSION['sess_foto']; ?>" class="img-circle" alt="User Image">
		                	<p>
		                  		<?= $_SESSION['sess_nama']." - ".$_SESSION['sess_level']; ?>
		                	</p>
		              	</li>
	              		<!-- Menu Footer-->
	              		<li class="user-footer">
	                		<div class="pull-left">
	                  			<a href="<?= BASE_URL."profil" ?>" class="btn btn-default btn-flat">Profile</a>
	                		</div>
	                		<div class="pull-right">
	                  			<a href="<?= BASE_URL."login/logout" ?>" class="btn btn-default btn-flat">Logout</a>
	                		</div>
	              		</li>
		            </ul>
		    	</li>
		    	<!-- end user acoount menu -->

	  		</ul>
	  	</div>
	  	<!-- end navbar menu notifikasi, profil -->

	</nav>
	<!-- end navbar -->

</header>
<!-- end header -->