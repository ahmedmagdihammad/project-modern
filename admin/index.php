<?php
  session_start();
  // if already logged IN
  if (!isset($_SESSION['loggedIN'])) {
    header('Location: login.php');
    exit();
  } 

  // include fiel database
  include('config.php');

  $root = '';
  $namePage = 'dashboard';


  // Get Count Data
  $orders = $connection->query("SELECT * FROM orders");
  $customers = $connection->query("SELECT * FROM customer");
  $admins = $connection->query("SELECT * FROM admin");
  $products = $connection->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <!-- Start Head -->
  <title>Dashbaord</title>
  <?php include 'layouts/head.php'; ?>
  <!-- End Head -->

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Start Header -->
  <?php include 'layouts/header.php' ?>
  <!-- End Header -->

  <!-- Start Sidebar -->
  <?php include 'layouts/sidebar.php' ?>
  <!-- End Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Starter Page</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <!-- <li class="breadcrumb-item active">Starter Page </li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $orders->num_rows; ?></h3>

                <p>Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="orders.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $customers->num_rows; ?></h3>

                <p>Customers</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="customers.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $products->num_rows; ?></h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="products.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $admins->num_rows; ?></h3>

                <p>Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Start Footer -->
<?php include 'layouts/footer.php'; ?>
<!-- End Foot er-->

<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- Start Foot -->
<?php include 'layouts/foot.php'; ?>
<!-- End Foot -->
</body>
</html>
