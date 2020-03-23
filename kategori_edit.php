<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">
            <a href="index.php?page=kategori">Kategori</a>
        </li>
        <li class="breadcrumb-item active">Edit Data</li>
    </ol>

    <?php 
        $id = $_GET['id'];
        $sql = $kon->query("SELECT * FROM tb_kategori WHERE kategori_id='$id'");
        $data = $sql->fetch_assoc();
    ?>

    <!-- DataTables Example -->
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Edit Kategori</div>
            <div class="card-body">
                <form method="POST">
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['kategori_nama'] ?>" required="required">
                            <label>Nama Kategori</label>
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="tambah" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>

    <?php 
        if (isset($_POST['tambah'])) {
            
            $nama       = $_POST['nama'];

            $sql = $kon->query("UPDATE tb_kategori SET  kategori_nama='$nama' WHERE kategori_id='$id'");

            if ($sql) {
                echo "<script>
                alert('Data Tersimpan');
                window.location='index.php?page=kategori';
                </script>";
            }else{
                echo "<script>
                alert(Gagal Tersimpan);
                </script>";
            }
        }
    ?>

</div>