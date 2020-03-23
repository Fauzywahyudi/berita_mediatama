<?php 
    $id = $_GET['id'];

    $sql = $kon->query("DELETE FROM tb_kategori WHERE kategori_id='$id'");

    if ($sql) {
        echo "<script>
        alert('Data Berhasil dihapus!');
        window.location='index.php?page=kategori';
    </script>";
    }else{
        echo "<script>
        alert('Data Gagal dihapus!');
        window.location='index.php?page=kategori';
    </script>";
    }
?>