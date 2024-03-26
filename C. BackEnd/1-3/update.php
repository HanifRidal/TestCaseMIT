<?php

    if (isset($_POST['save'])) { //check variable POST from FORM
        include "dbconnection.php"; // call connection

        $folder = 'uploads/'; // target folder for upload


        // if(move_uploaded_file($_FILES['new_photo_210060']['tmp_name'], $folder . $_FILES['new_photo_210060']['name'])){
            
        //     // success upload, get the photo name
        //     $photo = $_FILES['new_photo_210060']['name'];
        //     if($_POST['doc_photo_210060'] !== 'default.png') unlink($folder . $_POST['doc_photo_210060']); // delete old photo

        // } else $photo = $_POST['doc_photo_210060']; //jika tidak ganti foto, maka menggunakan foto lama pada hidden

        if(move_uploaded_file($_FILES['new_gambar']['tmp_name'], $folder . $_FILES['new_gambar']['name'])){
            
            // success upload, get the photo name
            $photo = $_FILES['new_gambar']['name'];
            if($_POST['gambar'] !== 'default.png') unlink($folder . $_POST['gambar']); // delete old photo

        } else $photo = $_POST['gambar']; //jika tidak ganti foto, maka menggunakan foto lama pada hidden




        // sql query UPDATE SET WHERE
        $query = "UPDATE tb_produk SET 
        nama_barang = '$_POST[nama_barang]', 
        harga_hpp = '$_POST[harga_hpp]',
        harga_retail = '$_POST[harga_retail]',
        harga_distributor = '$_POST[harga_distributor]',
        gambar = '$photo'
        WHERE kd_barang = '$_POST[kd_barang]'
        ;";

            // run query
            $upload = mysqli_query($db_connection, $query);

            if($upload){ // check query result TRUE/success
                // success msg
                echo "<script> alert ('Edit Item successfully !'); window.location.replace('list_barang.php'); </script>";
            } else {
                // failed msg
                echo "<script> alert ('Edit Item failed !'); window.location.replace('list_barang.php'); </script>";
            }
        
    }
?>
<!-- <script>window.location.replace("list_barang.php");</script> -->