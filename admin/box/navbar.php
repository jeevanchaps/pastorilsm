<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo SITEURL; ?>assets/dist/img/admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>WEB PASTROLISM</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
             <li>
              <a href="<?php echo SITEURL; ?>admin/index.php?type=dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            </li>
            <li>
              <a href="<?php echo SITEURL; ?>admin/index.php?type=user">
                <i class="fa fa-user"></i> <span>USER</span>
              </a>
            </li>
            <li>
              <a href="<?php echo SITEURL; ?>admin/index.php?type=places">
                <i class="fa fa-book"></i> <span>PLACES</span>
              </a>
            </li>
            <li>
              <a href="<?php echo SITEURL; ?>admin/index.php?type=messages">
                <i class="fa fa-folder-open"></i> <span>MESSAGES</span>
              </a>
            </li>
            
        </section>
        <!-- /.sidebar -->
      </aside>