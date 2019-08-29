<?php

session_start();
   
    
    
    $username = $_SESSION['user_name'];
    $usertype = $_SESSION['user_type'];


 
    
    if($username == true && $usertype == 'admin'){
        
    }
    
  
    else{
        header("location: admin123xyz.php");
    }

 include_once("connection.php");

 if(isset($_GET['update'])){
         
        $tql = "UPDATE order_history SET type = 1 WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($conn,$tql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

if(isset($_GET['delete'])){
         
        $dql = "DELETE FROM order_history WHERE id = '{$_GET['id']}'";
        $result = mysqli_query($conn,$dql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
if(isset($_GET['shipment'])){
         
        $tql = "UPDATE order_history SET shipment = 1 WHERE order_number = '{$_GET['order_number']}' AND type=1";
        $tim = mysqli_query($conn,$tql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>
