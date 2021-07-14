<?php
  session_start();
  // if already logged IN
  if (!isset($_SESSION['loggedIN'])) {
    header('Location: ../login.php');
    exit();
  } 

  // include fiel database
  include('../config.php');
  
  // Page Path
  $root = '../';
  $namePage = 'customers';

  // Get All Admins
  $customers = $connection->query("SELECT * FROM customer");

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <!-- Start Head -->
  <title>Customers</title>
  <?php include '../layouts/head.php'; ?>
  <!-- End Head -->

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Start Header -->
  <?php include '../layouts/header.php' ?>
  <!-- End Header -->

  <!-- Start Sidebar -->
  <?php include '../layouts/sidebar.php' ?>
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
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Customers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">customers List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>Time</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <!-- Get Loop Data -->
                    <?php foreach($customers as $customer) { ?>
                    <tr>
                      <td><?php echo $customer['id']; ?></td>
                      <td><?php echo $customer['name']; ?></td>
                      <td><?php echo $customer['mobile']; ?></td>
                      <td><?php echo $customer['email']; ?></td>
                      <td><?php echo $customer['created_at']; ?></td>
                      <td>
                        <div class="row">
                          <form action="delete.php" method="delete" >
                            <button type="submit" onclick="return confirm('Are you sure?');" class="btn btn-link text-danger">
                              <i class="fa fa-trash"></i>
                            </button>
                            <input type="hidden" name="customer_id" name="customer_id" value="<?php echo $customer['id']; ?>">
                          </form>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<!-- Start Footer -->
<?php include '../layouts/footer.php'; ?>
<!-- End Foot er-->

<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- Start Foot -->
<?php include '../layouts/foot.php'; ?>
<!-- End Foot -->
</body>
</html>
