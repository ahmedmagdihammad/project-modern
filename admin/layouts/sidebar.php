<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $root; ?>index.php" class="brand-link">
      <img src="<?php echo $root; ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $root; ?>assets/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               
          <li class="nav-item">
            <a href="<?php echo $root; ?>index.php" class="nav-link <?php if($namePage == 'dashboard'){ echo 'active'; } ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item  <?php if($namePage == 'admin' || $namePage == 'admin-create' || $namePage == 'admin-edit'){ echo ' menu-open'; }else{ echo 'menu-close'; } ?>">
            <a href="#" class="nav-link <?php if($namePage == 'admin' || $namePage == 'admin-create' || $namePage == 'admin-edit'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-user-plus"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/<?php echo $root; ?>index.php" class="nav-link <?php if($namePage == 'admin'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/<?php echo $root; ?>create.php" class="nav-link <?php if($namePage == 'admin-create'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
              <?php if(basename($_SERVER['REQUEST_URI']) == 'edit.php?id='.$_GET['id']){ ?>
              <li class="nav-item">
                <a href="admin/<?php echo $root; ?>edit.php?id=<?php echo $_GET['id']; ?>" class="nav-link <?php if($namePage == 'admin-edit'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Admin</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo $root; ?>customers.php" class="nav-link  <?php if($namePage == 'customers.php'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Customers
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="products.php" class="nav-link <?php if($namePage == 'products.php'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Products
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item menu-close">
            <a href="#" class="nav-link  <?php if($namePage == 'orders.php'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-shopping-bag"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="orders.php" class="nav-link  <?php if($namePage == 'orders.php'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order Statuses</p>
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