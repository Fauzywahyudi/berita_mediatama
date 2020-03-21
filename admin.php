<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Admin</li>
    </ol>





    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="" btn btn-primary mb-4>Tambah Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = $kon->query("SELECT * FROM tb_admin");
                        $no = 1;
                        while ($data = $sql->fetch_array()) {

                            echo "<tr>
                            <td>$no</td>
                            <td>$data[admin_username]</td>
                            <td>$data[admin_password]</td>
                            <td>$data[admin_nama]</td>
                            <td align='center'>
                                <a href='#' class='btn btn-success'>Edit</a>
                                <a href='#' class='btn btn-danger'>Hapus</a>
                            </td>
                        </tr>";
                        $no++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

</div>