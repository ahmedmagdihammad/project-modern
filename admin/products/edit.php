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
    $namePage = 'product-edit';

     //Query the DB
     $query = $connection->query("SELECT * FROM products WHERE id='$_GET[id]'");
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
  <title>Product Edit</title>
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
              <li class="breadcrumb-item"><a href="index.php">Products</a></li>
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
                <h3 class="card-title"><i class="fa fa-plus"></i> Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <?php
                include('update.php')
              ?>
              <!-- form start -->
              <form action="<?php echo basename($_SERVER['REQUEST_URI']); ?>" method="post" enctype="multipart/form-data">
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
                        <div class="form-group col-4">
                          <label>Image</label>
                          <input type="file" name="img" value="<?php echo $res['img']; ?>" class="form-control" placeholder="Enter image" >
                        </div>
                        <div class="form-group col-2">
                          <img src="<?php echo $res['img']; ?>" alt="" width="100" style="border-radius: 50%;">
                        </div>
                        <div class="form-group col-6">
                          <label>Price</label>
                          <input type="number" name="price" value="<?php echo $res['price']; ?>" class="form-control" placeholder="Enter price" required>
                        </div>
                        <div class="form-group col-6">
                          <label>Catgeory</label>
                          <input type="text" name="category" value="<?php echo $res['category']; ?>" class="form-control" placeholder="Enter category" required>
                        </div>
                        <div class="form-group col-6" hidden>
                          <label>Admin</label>
                          <input type="text" name="admin_id" class="form-control" value="<?php echo $_SESSION['id'] ?>" placeholder="Enter ADMIN" required>
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
