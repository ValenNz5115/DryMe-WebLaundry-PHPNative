<?php
    if ($_GET['id_outlet']) {
        require '../../config/connection.php';
        $qry_hapus=mysqli_query($conn, "delete from outlet where id_outlet='".$_GET['id_outlet']."'");
        if ($qry_hapus) {
            echo "<script>alert ('Sukses hapus outlet'); location.href='../../frontend/user/outlet/table.php';</script>";
        }else {
            echo "<script>alert ('Gagal hapus outlet'); location.href='../../frontend/user/outlet/table.php';</script>";
        }
    }
?> 