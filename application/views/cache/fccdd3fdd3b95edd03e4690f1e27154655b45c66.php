<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo e(base_url()); ?>assets/admin-template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MANTRA HINDU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(base_url()); ?>assets/admin-template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo e(base_url()); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Materi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
					<a href="<?php echo e(base_url()); ?>quis" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
							Quis
                        </p>
                    </a>
                </li>
				<li class="nav-item">
					<a href="<?php echo e(base_url()); ?>users" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>
							Users
						</p>
					</a>
				</li>
                <li class="nav-item">
                    <a href="<?php echo e(base_url()); ?>leaderboard" class="nav-link">
                        <i class="nav-icon fas fa-chess-queen"></i>
                        <p>
                            Leaderboard
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH D:\xaamp\htdocs\mantra-hindu\application\views/layouts/sidebar.blade.php ENDPATH**/ ?>