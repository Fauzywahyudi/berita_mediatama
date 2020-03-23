<div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Berita</li>
    </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Berita</div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="index.php?page=admin_tambah" class="btn btn-primary mb-4">Tambah Data</a>
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
                                <a href='index.php?page=admin_edit&id=$data[admin_id]' class='btn fa fa-edit bg-success text-white'></a>
                                <a href='index.php?page=admin_hapus&id=$data[admin_id]' class='btn fa fa-trash bg-danger text-white'></a>
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