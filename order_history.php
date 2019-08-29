<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Dash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="css/signup.css" rel="stylesheet">
</head>
<body>
  <?php
    session_start();
   
    
    
    $username = $_SESSION['user_name'];
    $usertype = $_SESSION['user_type'];


 
    
    if($username == true && $usertype == 'admin'){
        
    }
    
  
    else{
        header("location: admin123xyz.php");
    }

?>
<div class="container mt-5">
  <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th>#</th>
      <th>Order Number</th>
      <th>Username</th>
      <th>Product</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Purchase Time</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
      <?php

      include_once("connection.php");

      $sql = "SELECT * FROM order_history WHERE shipment=0";
      $res = mysqli_query($conn,$sql);
      $count = 0;
      while($row = mysqli_fetch_array($res)){
      $count++;
      ?>
        <tr>
      <td><?php echo $count; ?></td>
      <td><?php echo $row['order_number']; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['item']; ?></td>
      <td><?php echo $row['quantity']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['date_time']; ?></td>
      <td>
        
        <?php
          
          if($row['type']==0){
          ?>
           <a href="order_update.php?update=1&id=<?php echo $row['id']; ?>" name="up" class="btn btn-primary btn-sm btn-round">Confirm Shipment</a>
           <a href="order_update.php?delete=1&id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" href="">Cancel Order</a>
          <?php
        }

        else{
        ?>
              <a href="pdf.php?print=1&order_number=<?php echo $row['order_number']; ?>" class="btn btn-danger btn-sm" href="">Print</a>
        <?php
      }

        ?>
        
       


      </td>
    

      <?php
      
      

    }


      ?>
     
    </tr>
   
  </tbody>

</table>
</div>
</body>
</html>
