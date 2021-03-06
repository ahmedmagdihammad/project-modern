<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $root; ?>index.php" class="brand-link">
      <img src="<?php echo $root; ?>assets/img/logo/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PSW</span>
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

          <li class="nav-item menu-open <?php if($namePage == 'product' || $namePage == 'product-create' || $namePage == 'product-edit'){ echo ' menu-open'; }else{ echo 'menu-close'; } ?>">
            <a href="#" class="nav-link <?php if($namePage == 'product' || $namePage == 'product-create' || $namePage == 'product-edit'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $root; ?>products/index.php" class="nav-link <?php if($namePage == 'product'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $root; ?>products/create.php" class="nav-link <?php if($namePage == 'product-create'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Product</p>
                </a>
              </li>
              <?php if(basename($_SERVER['REQUEST_URI']) == 'edit.php?id='.$_GET['id']){ ?>
              <li class="nav-item">
                <a href="product/<?php echo $root; ?>edit.php?id=<?php echo $_GET['id']; ?>" class="nav-link <?php if($namePage == 'product-edit'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Product</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>

          <li class="nav-item menu-open <?php if( $namePage == 'orders'){ echo ' menu-open'; }else{ echo 'menu-close'; } ?>">
            <a href="#" class="nav-link  <?php if($namePage == 'orders'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-shopping-bag"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $root; ?>orders/index.php" class="nav-link  <?php if($namePage == 'orders'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orders</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open <?php if($namePage == 'admin' || $namePage == 'admin-create' || $namePage == 'admin-edit'){ echo ' menu-open'; }else{ echo 'menu-close'; } ?>">
            <a href="#" class="nav-link <?php if($namePage == 'admin' || $namePage == 'admin-create' || $namePage == 'admin-edit'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-user-plus"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $root; ?>admin/index.php" class="nav-link <?php if($namePage == 'admin'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo $root; ?>admin/create.php" class="nav-link <?php if($namePage == 'admin-create'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
              <?php if(basename($_SERVER['REQUEST_URI']) == 'edit.php?id='.$_GET['id']){ ?>
              <li class="nav-item">
                <a href="<?php echo $root; ?>admin/edit.php?id=<?php echo $_GET['id']; ?>" class="nav-link <?php if($namePage == 'admin-edit'){ echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Admin</p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?php echo $root; ?>customers/index.php" class="nav-link  <?php if($namePage == 'customers'){ echo 'active'; } ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Customers
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>