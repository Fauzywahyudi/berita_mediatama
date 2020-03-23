<?php 
    $id = $_GET['id'];

    $sql = $kon->query("DELETE FROM tb_admin WHERE admin_id='$id'");

    if ($sql) {
        echo "<script>
        alert('Data Berhasil dihapus!');
        window.location='index.php?page=admin';
    </script>";
    }else{
        echo "<script>
        alert('Data Gagal dihapus!');
        window.location='index.php?page=admin';
    </script>";
    }
?>