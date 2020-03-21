<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <?php include 'partial/head.php';  ?>

</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand navbar-dark bg-info static-top ">

        <a class="navbar-brand mr-1" href="index.php">Selamat Datang</a>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>

    </nav>

    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Register an Account</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                                    <label for="firstName">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                                    <label for="lastName">Last name</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                    <label for="confirmPassword">Confirm password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-block" href="login.html">Register</a>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login Page</a>
                </div>
            </div>
        </div>
    </div>

    <!-- source JS -->
    <?php include 'partial/script.php' ?>

</body>

</html>