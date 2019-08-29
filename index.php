<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="search.css">
<style type="text/css">
  h1{
    font-family: 'Vollkorn', serif;
    color: #0099ff;
  }
 .modal-body {
   
   overflow: auto;
}

</style>
<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","getsearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>

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
             <form>

<div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" id="mod" type="text" size="30" name="search" onkeyup="showResult(this.value)" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>

</form>
      
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
    <td><?php echo $count ?></td>
     <td><?php echo $values["item_name"]; ?></td>
     <td><?php echo $values["item_quantity"]; ?></td>
     <td> <?php echo $values["item_price"]; ?> Tk.</td>
     <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> Tk.</td>
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
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Signup</a>
            </li>
          </ul>
        </div>
      </nav>

  

<!-- Modal -->
<div class="modal fade" id="smodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Search Result</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="livesearch"></div>
      </div>
      
    </div>
  </div>
</div>

<div class="container-fluid" style="margin-top: 1%;">
  <h1 style="text-align: center;">Laptop</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM laptop LIMIT 4";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
      
       <div class="hovereffect">
        <img class="card-img-top" style="height: 250px;" src="item/<?php echo $res['img_name'] ?>">
        <div class="overlay">
          <form method="post" action="add_cart.php">
       <input type="hidden" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $res["id"]; ?>" />
           <button type="submit" name="add_to_cart" class="info">Add Cart</button>
           </form>
        </div>
    </div>
      <div class="card-body">

        <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $res['id'];?>">
  View More
</a></span></p> 



        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM laptop WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      

</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

</div>
          
        </div>
<br>
  <h1 style="text-align: center;">Phone</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM phone LIMIT 4";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
            <div class="hovereffect">
        <img class="card-img-top" style="height: 250px; width: 200px; display: block; margin-left: auto; margin-right: auto;" src="item/<?php echo $res['img_name'] ?>">
        <div class="overlay">
           <form method="post" action="add_cart.php">
       <input type="hidden" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $res["id"]; ?>" />
           <button type="submit" name="add_to_cart" class="info">Add Cart</button>
           </form>
        </div>
    </div>
      
      
      <div class="card-body">

         <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $res['id'];?>">
  View More
</a></span></p> 
      

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM phone WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

</div>

<br>
  <h1 style="text-align: center;">Tablet</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM tab LIMIT 4";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
         <div class="hovereffect">
        <img class="card-img-top" style="height: 250px; width: 200px; display: block; margin-left: auto; margin-right: auto;" src="item/<?php echo $res['img_name'] ?>">
        <div class="overlay">
           <form method="post" action="add_cart.php">
       <input type="hidden" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $res["id"]; ?>" />
           <button type="submit" name="add_to_cart" class="info">Add Cart</button>
           </form>
        </div>
    </div>
      <div class="card-body">

         <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter1<?php echo $res['id'];?>">
  View More
</a></span></p> 
      

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM tab WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

</div>

<br>
   <h1 style="text-align: center;">TV</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM tv LIMIT 4";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
         <div class="hovereffect">
        <img class="card-img-top" style="height: 250px; display: block; margin-left: auto; margin-right: auto;" src="item/<?php echo $res['img_name'] ?>">
        <div class="overlay">
           <form method="post" action="add_cart.php">
       <input type="hidden" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $res["id"]; ?>" />
           <button type="submit" name="add_to_cart" class="info">Add Cart</button>
           </form>
        </div>
    </div>
      <div class="card-body">

         <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter12<?php echo $res['id'];?>">
  View More
</a></span></p> 
      

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter12<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM tv WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

</div>
<br>
   <h1 style="text-align: center;">Game</h1>
  <hr>
  <div class="card-deck">

    <?php
    include_once("connection.php");
      $rom="SELECT * FROM game LIMIT 4";
      $rim = mysqli_query($conn,$rom);
      
      while ($res = mysqli_fetch_array($rim)) {
    
       ?>
         <div class="col-lg-3 col-md-6 col-12">
          <br>
       <div class="card" style="">
         <div class="hovereffect">
        <img class="card-img-top" style="height: 250px; width: 200px; display: block; margin-left: auto; margin-right: auto;" src="item/<?php echo $res['img_name'] ?>">
        <div class="overlay">
           <form method="post" action="add_cart.php">
       <input type="hidden" name="quantity" value="1" class="form-control" />
      <input type="hidden" name="hidden_name" value="<?php echo $res["name"]; ?>" />
      <input type="hidden" name="hidden_price" value="<?php echo $res["price"]; ?>" />
      <input type="hidden" name="hidden_id" value="<?php echo $res["id"]; ?>" />
           <button type="submit" name="add_to_cart" class="info">Add Cart</button>
           </form>
        </div>
    </div>
      <div class="card-body">

         <p><?php echo $res['name']; ?><span style="float: right; color: salmon;"><?php echo $res['price'].' Tk.'; ?></span></p> 
        <p>Stock: <span style="color: red;"><?php echo $res['stock']; ?> </span><span style="float: right;"><a style="float: right;" href="" class="" data-toggle="modal" data-target="#exampleModalCenter12<?php echo $res['id'];?>">
  View More
</a></span></p> 
      

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter12<?php echo $res['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $res['name'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php
       include_once("connection.php");
       $id = $res['id'];
      $rkm="SELECT * FROM game WHERE id = '$id'";
      $rtm = mysqli_query($conn,$rkm);
      
      while ($result = mysqli_fetch_array($rtm)) { 
        ?>
        <div style="text-align: center;">
        <img class="img-responsive" style="height: 150px;" src="item/<?php echo $res['img_name'] ?>">
        </div>
        <br>
        <p><span style="color: #00cc99;">Brand: </span> <?php echo $result['brand'];?></p>
        <p><span style="color: #00cc99;">Name: </span> <?php echo $result['name'];?></p>
        <p><span style="color: #00cc99;">Description: </span> <?php echo $result['des'];?></p>
        <?php
      }

       ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
   



  </div>
  </div>

       <?php
     
}
  ?>

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
  <script type="text/javascript">
  $("#mod").keyup(function(){
     setTimeout(function(){
  $('#smodal').modal("show");
   }, 1500);
});
</script>

  </div>
 <br>

  <!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>
<div style="background-color: #212E78;color: white;">
  <!-- Footer Links -->
  <div class="container text-center text-md-left" style="margin-top: -0.8%;">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
<br><br>
        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">BuyTech</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>We providing best e-commerce service in Bangladesh. We have one lakh mobile stock. Any time, any area you can buy our product through our website.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links --><br><br>
        <h6 class="text-uppercase font-weight-bold">Brnds</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          Apple
        </p>
        <p>
          Hp
        </p>
        <p>
         Dell
        </p>
        <p>
          Samsung
        </p>
        <p>
          Xiomi
        </p>
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
<br><br>
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Categories</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          Laptop
        </p>
        <p>
          Phone
        </p>
        <p>
          Tv
        </p>
        <p>
          Tablet
        </p>
        <p>
          Gaming
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
<br><br>
        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Bashundhara Residential Area, &nbsp &nbsp &nbsp &nbsp &nbspDhaka, Bangladesh.</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> abu.pranto@northsouth.edu</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +8801629710423</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 096100000</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
</div>
  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
    <a class="dark-grey-text" href="">buytech.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>