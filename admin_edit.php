<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="index.php?page=admin">Admin</a>
        </li>
        <li class="breadcrumb-item active">Tambah Data</li>
    </ol>

    <?php 
        $id = $_GET['id'];
        $sql = $kon->query("SELECT * FROM tb_admin WHERE admin_id='$id'");
        $data = $sql->fetch_assoc();
    ?>

    <!-- DataTables Example -->
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit Admin</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="text" name="username" class="form-control" value="<?php echo $data['admin_username'] ?>"  required="required" autofocus="autofocus">
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-label-group">
                                    <input type="password" name="password" class="form-control" value="<?php echo $data['admin_password'] ?>"  required="required">
                                    <label>Password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['admin_nama'] ?>" required="required">
                            <label>Nama Lengkap</label>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="tambah" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>

    <?php 
        if (isset($_POST['tambah'])) {
            
            $username   = $_POST['username'];
            $password   = $_POST['password'];
            $nama       = $_POST['nama'];

            $sql = $kon->query("UPDATE tb_admin SET admin_username='$username', admin_password='$password', admin_nama='$nama' WHERE admin_id='$id'");

            if ($sql) {
                echo "<script>
                alert('Data Tersimpan');
                window.location='index.php?page=admin';
                </script>";
            }else{
                echo "<script>
                alert(Gagal Tersimpan);
                </script>";
            }
        }
    ?>

</div>