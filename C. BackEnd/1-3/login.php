<?php
session_start(); //start session
if(isset($_POST['login'])) { //check post variable
    include 'dbconnection.php';
    
    //make query based on username
    $query="SELECT * FROM tb_user WHERE username='$_POST[username]'";

    //run query 
    $login=mysqli_query($db_connection,$query);
    
    if(mysqli_num_rows($login) > 0) { //check if the username found or not
        $user=mysqli_fetch_assoc($login); //if user found, ectract the data
        if($_POST['password1'] = $user['password1']) { //verify the data
        
        // if password match, then make session variable
        $_SESSION['login']=TRUE;
        $_SESSION['user_id']=$user['user_id'];
        $_SESSION['username']=$user['username'];
        $_SESSION['password1']=$user['password1'];
        $_SESSION['nama_lengkap']=$user['nama_lengkap'];
        
        echo "<script>alert('login success !');window.location.replace('list_barang.php');</script>";
        } else {
            echo "<script>alert('login failed, wrong password !');window.location.replace('form_login.php');</script>";
        }
    }else {
            echo "<script>alert('login failed, user not found !');window.location.replace('form_login.php');</script>";
    }
}
?>