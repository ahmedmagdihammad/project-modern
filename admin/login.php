<?php
  session_start();
  // if already logged IN
  if (isset($_SESSION['loggedIN'])) {
    header('Location: index.php');
    exit();
  }

  include('config.php');

  // condition Login
	if(isset($_POST['login'])) {
		$email = $connection->real_escape_string($_POST['email']);
		$password = md5($connection->real_escape_string($_POST['password']));

		// query login
		$data = $connection->query("SELECT * FROM admin WHERE email='$email' AND password='$password'");
		$show = mysqli_fetch_assoc($data);

		// condition check on admin
		if ($data->num_rows > 0) {
			// everyting OK, lets login
			$_SESSION['loggedIN'] = '1';
			$_SESSION['id'] = $show['id'];
			$_SESSION['email'] = $show['email'];
			$_SESSION['name'] = $show['name'];
			$_SESSION['mobile'] = $show['mobile'];
      
      // echo '<script>location.reload();</script>';
       echo 1; 
       return die();
		}else {
       echo 0;
       return die();

    }
    
		mysqli_close($connection);
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <!-- message response  -->
      <span class="invalid-feedback text-center alert mb-1" role="alert" >
        <strong id="response"></strong>
      </span>
      <h1></h1>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="email form-control " placeholder="Enter Your Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="password form-control" placeholder="Enter Your  Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block login" id="login">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
<!-- code login ajax  -->
<script src="assets/ajax/login.js" ></script>

</body>
</html>
