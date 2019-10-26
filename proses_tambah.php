<?php 

include "connect.php";
$judul = $_POST['judul'];
$content = $_POST['content'];
$foto = $_POST['foto'];
$tambah = @$_POST['tambah'];

if ($tambah) {
    $sql = mysqli_query($connect, "insert into tbl_home 
        values('$judul', '$content', '$foto')");
    if ($sql) { ?>
        <script>
            alert('Tambah Data Sukses');
            window.location.href="dashboard.php";
        </script>
     <?php
    } else {
        echo "Tambah data gagal";
    }
}


?>