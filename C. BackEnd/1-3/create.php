<?php
    if (isset($_POST['save'])) { //check variable POST from FORM
        include "dbconnection.php"; // call connection

        $gambar = "uploads/" . basename($_FILES["gambar"]["name"]); // path penyimpanan gambar
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar); // menyimpan gambar di path yang telah ditentukan

        $query = "INSERT INTO tb_produk (nama_barang, harga_hpp, harga_retail, harga_distributor, gambar) 
        VALUES ('$_POST[nama_barang]', '$_POST[harga_hpp]', '$_POST[harga_retail]', '$_POST[harga_distributor]', '$gambar' )";


        // run query
        $create = mysqli_query ($db_connection, $query);

        if ($create) { //check if query True / success
            echo "<script> alert ('Item added succesfully !')</script>";//success msg(js version)
        } else {
            echo "<script> alert ('Item add failed !')</script>"; //fail msg(js version)
        }
  	//getting the post values
    // $nama_barang=$_POST['nama_barang'];
    // $harga_hpp=$_POST['harga_hpp'];
    // $harga_retail=$_POST['harga_retail'];
    // $harga_dis=$_POST['harga_dis'];
    // $photo=$_POST['photo'];
// allowed extensions
// $allowed_extensions = array(".jpg","jpeg",".png",".gif");
// // Validation for allowed extensions .in_array() function searches an array for a specific value.
// if(!in_array($allowed_extensions))
//     {
//         echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
//     }
//     else
//     {
//     //rename the image file
//     $photo=md5($imgfile).time().$extension;
//     // Code for move image into directory
//     move_uploaded_file($_FILES["photo"]["tmp_name"],"photos/".$photo);
//     // Query for data insertion
//     $query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Email, Address,photo) value('$fname','$lname', '$harga_retail', '$emaiharga_retail', '$add','$imgnewfile' )");
//     if ($query) {
//     echo "<script>alert('You have successfully inserted the data');</script>";
//     echo "<script type='text/javascript'> document.location ='index.php'; </script>";
//     } else{
//     echo "<script>alert('Something Went Wrong. Please try again');</script>";
//     }}
    }
?>

<script>window.location.replace("list_barang.php");</script>