<?php

if (isset($_GET['id'])){
     include "dbconnection.php";

     $query = "DELETE FROM tb_produk WHERE kd_barang = '$_GET[id]'";

     $delete = mysqli_query ($db_connection, $query);

     if ($delete) { //check if query True / success
         echo "<script> alert ('Item deleted succesfully !')</script>";//success msg(js version)
     } else {
         echo "<script> alert ('Item delete failed !')</script>"; //fail msg(js version)
     }
}

?>

<script>window.location.replace("list_barang.php");</script>
