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
    $namePage = 'admin-edit';

     //Query the DB
     $query = $connection->query("SELECT * FROM admin WHERE id='$_GET[id]'");
     $res = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <!-- Start Head -->
  <title>Admin Edit</title>
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
              <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="index.php">Admin</a></li>
              <li class="breadcrumb-item active">Edit</li>
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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-defult">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus"></i> Edit Admin</h3>
              </div>
              <!-- /.card-header -->
              <?php
                include('update.php')
              ?>
              <!-- form start -->
              <form action="<?php echo basename($_SERVER['REQUEST_URI']); ?>" method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-6" hidden>
                            <label>ID</label>
                            <input type="text" name="id" class="form-control <?php if($message == 'id'){ echo 'is-invalid'; } ?>" placeholder="Enter ID" value="<?php echo $_GET['id']; ?>" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control <?php if($message == 'name'){ echo 'is-invalid'; } ?>" placeholder="Enter name" required>
                        </div>
                        <div class="form-group col-6">
                          <label>Mobile</label>
                          <input type="number" name="mobile" value="<?php echo $res['mobile']; ?>" class="form-control" placeholder="Enter mobile" required>
                        </div>
                        <div class="form-group col-6">
                          <label>Email</label>
                          <input type="email" name="email" value="<?php echo $res['email']; ?>" class="form-control" placeholder="Enter email" required>
                        </div>
                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" class="btn btn-warning" name="submit" value="Update">
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
