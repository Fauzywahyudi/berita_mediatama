<?php
// session_start();
// include 'koneksi.php';
// if (!empty($_SESSION["username"]) and !empty($_SESSION["passuser"])) {
//   header('location:home_admin.php');
// }else{
//   header('location:login.php');
// }
?>

<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (empty($_SESSION['admin'])) {
  echo "<script>
  alert('Anda Harus Login');
  window.location='login.php';
</script>";
}

include 'koneksi.php'
?>

<head>
    <?php include 'partial/head.php';  ?>
    <title>Berita Mediatama</title>
</head>

<body id="page-top">
    <?php include 'partial/top_bar.php' ?>

    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'partial/side_bar.php' ?>

        <div id="content-wrapper">
            <?php include 'content.php' ?>

            <!-- /.container-fluid -->


            <!-- Sticky Footer -->
            <?php include 'partial/footer.php' ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php include 'partial/modal.php' ?>

    <!-- source JS -->
    <?php include 'partial/script.php' ?>

</body>

</html>