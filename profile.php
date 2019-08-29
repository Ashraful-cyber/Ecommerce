<!DOCTYPE html>
<html lang="en">
<head>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/cart.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
  h1{
    font-family: 'Vollkorn', serif;
    color: #0099ff;
  }
   .modal-body {
   
   overflow: auto;
}
</style>
</head>
<body>
	 <?php
	 ob_start();
    session_start();
   
    
    
    $username = $_SESSION['user_name'];
    $usertype = $_SESSION['user_type'];


 
    
    if($username == true && $usertype == 'public'){
        
    }
    
  
    else{
        header("location: login.php");
    }

?>
	 <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="text-white sidebar-heading"> BuyTech </div>
      <div class="list-group list-group-flush">

        <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Laptop
  </button>
  <div class="dropdown-menu bg-info">
        <a href="apple.php" class="list-group-item list-group-item-action bg-info" >Apple</a>
        <a href="asus.php" class="list-group-item list-group-item-action bg-info">Asus</a>
        <a href="accer.php" class="list-group-item list-group-item-action bg-info">Accer</a>
        <a href="hp.php" class="list-group-item list-group-item-action bg-info">Hp</a>
        <a href="dell.php" class="list-group-item list-group-item-action bg-info">Dell</a>
        <a href="lenevo.php" class="list-group-item list-group-item-action bg-info">Lenevo</a>
  </div>
</div>


           <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Mobile
  </button>
  <div class="dropdown-menu bg-info">
        <a href="iphone.php" class="list-group-item list-group-item-action bg-info" >iPhone</a>
        <a href="samsung.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
        <a href="huawei.php" class="list-group-item list-group-item-action bg-info">Huawei</a>
        <a href="xiomi.php" class="list-group-item list-group-item-action bg-info">Xiomi</a>
        <a href="oneplus.php" class="list-group-item list-group-item-action bg-info">OnePlus</a>
  </div>
</div>


    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tablet
  </button>
  <div class="dropdown-menu bg-info">
        <a href="ipad.php" class="list-group-item list-group-item-action bg-info" >iPad</a>
        <a href="samsung_tab.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
  </div>
</div>

    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    TV
  </button>
  <div class="dropdown-menu bg-info">
        <a href="sony.php" class="list-group-item list-group-item-action bg-info" >Sony</a>
        <a href="samsung_tv.php" class="list-group-item list-group-item-action bg-info">Samsung</a>
        <a href="lg.php" class="list-group-item list-group-item-action bg-info">Lg</a>
  </div>
</div>


    <div class="btn-group dropright">
  <button type="button" class="list-group-item list-group-item-action bg-dark dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Gaming
  </button>
  <div class="dropdown-menu bg-info">
        <a href="xbox.php" class="list-group-item list-group-item-action bg-info" >Xbox</a>
        <a href="ps4.php" class="list-group-item list-group-item-action bg-info">PS4</a>
  </div>
</div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-info border-bottom">
        <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <!-- Button trigger modal -->
<a href="" class="nav-link" data-toggle="modal" data-target="#exampleModal7">
  Cart
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <table class="table table-bordered">
    <tr>
      <th>#</th>
     <th>Item Name</th>
     <th>Quantity</th>
     <th>Price</th>
     <th>Total</th>
     <th>Action</th>
    </tr>
   <?php
   if(isset($_COOKIE["shopping_cart"]))
   {
    $total = 0;
    $cookie_data = stripslashes($_COOKIE['shopping_cart']);
    $cart_data = json_decode($cookie_data, true);
    $count = 0;
    foreach($cart_data as $keys => $values){
       $count++;
   ?>
    <tr>
    	<form method="post">
    <td><?php echo $count ?></td>
     <td><?php echo $values["item_name"]; ?></td>
     <td><?php echo $values["item_quantity"]; ?></td>
     <td><?php echo $values["item_price"]; ?> Tk.</td>
     <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> Tk.</td>
     <td><a href="add_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
    </tr>
   <?php 
     $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
   ?>
    <tr>
     <td colspan="4" align="right">Total</td>
     <td align="right">$ <?php echo number_format($total, 2); ?></td>
     <td> <?php
       
       if($_COOKIE["shopping_cart"]){
        ?>
        <a href="add_cart.php?action=clear&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove Al</span></a>
        <?php
       }

     ?> </td>
    </tr>
    <tr>
    	<td colspan="6" style="text-align: center;">
    	<button type="submit" name="checkout" class="btn btn-success">Checkout</button>
    	</td>
    </tr>
  
    

    </form>
   <?php
   }
   else
   {
    echo '
    <tr>
     <td colspan="5" align="center">No Items in Cart</td>
    </tr>
    ';
   }
   ?>
   </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=""><?php echo $_SESSION['user_name']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

<?php
include_once("connection.php");

 if(isset($_POST['checkout'])){
      
      $order_number = substr(number_format(time() * rand(),0,'',''),0,6);
      $user = $_SESSION['user_name'];
      $user_add = $_SESSION['address_data'];
      $user_phone = $_SESSION['user_phone'];
      $date = date('Y-m-d H:i:s');
      $pro_data = json_decode($cookie_data, true);
       foreach($pro_data as $keys => $values){
         $item = $values['item_name'];
         $quantity = $values['item_quantity'];
         $price = $values['item_price'] * $quantity;

         $cql = "INSERT INTO order_history(order_number,username,item,quantity,price,address,phone,date_time,type,shipment)VALUES('$order_number','$user','$item','$quantity','$price','$user_add','$user_phone',NOW(),0,0)";

 	       $result = mysqli_query($conn,$cql);

 	       setcookie("shopping_cart", "", time() - 3600);
         header('Location: ' . $_SERVER['HTTP_REFERER']);

       }

            try{
 $soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
 $paramArray = array(
 'userName' => "01629710423",
 'userPassword' => "pranto224466",
 'mobileNumber' => "$user_phone",
 'smsText' => "Your Order Placed Successfully.Your Order Number is $order_number ---BuyTech",
 'type' => "TEXT",
 'maskName' => '',
 'campaignName' => '',
 );
 
 $value = $soapClient->__call("OneToOne", array($paramArray));
 print_r($value->OneToOneResult);
} 
catch (Exception $e) {
 print_r($e->getMessage());
}

        


 
}

?>


<div class="container-fluid" style="margin-top: 1%;">

  <div class="row">
    <div class="col-md-4" style="border-right: 2px solid grey;">

      <h3 style="text-align: center;">Edit Info</h3>
      <br>
 
 <?php

 include_once("connection.php");

 $user = $_SESSION['user_name'];

 $sql = "SELECT * FROM signup WHERE username = '$user'";
 $rim = mysqli_query($conn,$sql);

 while($res = mysqli_fetch_array($rim)){
 ?>
 <form method="post">
 <div class="form-group">
  <label for="usr">First Name:</label>
  <input type="text" name="first_name" class="form-control" id="usr" value="<?php echo $res['first_name']; ?>" required>
</div>
<div class="form-group">
  <label for="usr">Last Name:</label>
  <input type="text" name="last_name" class="form-control" id="usr" value="<?php echo $res['last_name']; ?>" required>
</div>
<div class="form-group">
  <label for="usr">Phonee:</label>
  <input type="text" name="phone" class="form-control" id="usr" value="<?php echo $res['phone']; ?>" required>
</div>
<div class="form-group">
  <label for="usr">Address:</label>
  <input type="text" name="address" class="form-control" id="usr" value="<?php echo $res['address']; ?>" required>
</div>
<div class="form-group">
  <label for="usr">Zipcode:</label>
  <input type="text" name="zipcode" class="form-control" id="usr" value="<?php echo $res['zipcode']; ?>" required>
</div>
<div class="form-group">
  <label for="usr">Card:</label>
  <input type="number" name="card" class="form-control" id="usr" value="<?php echo $res['card']; ?>">
</div>
<div style="text-align: center;">
  <button type="submit" name="upu" class="btn btn-success btn-sm">Update</button>
</div>
</form>
 <?php
}

 ?>
 </div>
 <?php
  
  include_once("connection.php");

  $user = $_SESSION['user_name'];

  if(isset($_POST['upu'])){

  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $zipcode = $_POST['zipcode'];
  $card = $_POST['card'];

  $uql = "UPDATE signup
          SET first_name = '$first_name', last_name= '$last_name', phone = '$phone', address = '$address', zipcode = '$zipcode', card = '$card'
          WHERE username = '$user'";
  $rql = mysqli_query($conn,$uql);
  header('Location: ' . $_SERVER['HTTP_REFERER']);

}


 ?>
 <div class="col-md-8">

  <h3 style="text-align: center;">My Order History</h3>
  <br>
   <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Order Number</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Status</th>
        <th>Date/Time</th>
      </tr>
    </thead>
    <tbody>
      <?php

        include_once("connection.php");

        $user = $_SESSION['user_name'];
        $count = 0;

        $oql = "SELECT * FROM order_history WHERE username = '$user'";
        $tql = mysqli_query($conn,$oql);

        while($result = mysqli_fetch_array($tql)){
        $count++;
        ?>
        <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $result['order_number']; ?></td>
        <td><?php echo $result['item']; ?></td>
        <td><?php echo $result['quantity']; ?></td>
        <td><?php echo $result['price']; ?></td>
        <td>
          <?php 
          if($result['type'] == 0){
          ?>
          <div class="alert-primary" style="padding: 2px 5px; border-radius: 5px;" role="alert">
            Order Placed
          </div>
          <?php
        }

        elseif($result['type'] == 1 && $result['shipment'] == 0){
        ?>
        <div class="alert-success" style="padding: 2px 5px; border-radius: 5px;" role="alert">
          Order Confirm
        </div>
        <?php
      }
      elseif($result['shipment'] == 1){
        ?>
        <div class="alert-info" style="padding: 2px 5px; border-radius: 5px;" role="alert">
          Shiping
        </div>
        <?php
      }
          ?>
            
          </td>
          <td><?php echo $result['date_time']; ?></td>
        <?php
      }



      ?>
      
      </tr>
      
    </tbody>
  </table>
 </div>
</div>
  </div>
    <!-- /#page-content-wrapper -->

      <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  </div>
</body>
</html>