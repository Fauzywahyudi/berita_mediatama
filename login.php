<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <?php include 'koneksi.php';  ?>
  <?php include 'partial/head.php';  ?>
</head>

<body class="bg-secondary">
  <nav class="navbar navbar-expand navbar-dark bg-info static-top ">

    <a class="navbar-brand mr-1" href="index.php">Selamat Datang</a>
    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

  </nav>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" required="required" autofocus="autofocus" name="username">
              <label>Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" class="form-control" required="required" name="password">
              <label>Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Login</button>
        </form>
        <?php
        if (isset($_POST['login'])) { 
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = $kon->query("SELECT * FROM tb_admin WHERE admin_username='$username' AND admin_password='$password'");
        }
        ?>
      </div>
    </div>
  </div>



  <!-- source JS -->
  <?php include 'partial/script.php' ?>

</body>

</html>