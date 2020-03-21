<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
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
        <form>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <!-- <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div> -->
          <a class="btn btn-primary btn-block" href="index.html">Login</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register di sini!</a>
        </div>
      </div>
    </div>
  </div>

  <!-- source JS -->
  <?php include 'partial/script.php' ?>

</body>

</html>