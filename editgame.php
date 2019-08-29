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

</head>
<body>
  <?php
    session_start();
   
    
    
       
    $username = $_SESSION['user_name'];
    $usertype = $_SESSION['user_type'];


 
    
    if($username == true && $usertype == true){
        
    }
    
  
    else{
        header("location: admin123xyz.php");
    }

?>

<div class="container mt-3">
<div class="row">
  <div class="col-md-8" style="border-right: 2px solid black;">

    <h3 style="text-align: center;">Edit Basic Info</h3>
    <br>
 
    <?php
        include_once("connection.php");
        
     
        
        if(isset($_GET['view'])){
     
   
            $sql = "SELECT * FROM game WHERE id='{$_GET['id']}'";
            $rim= mysqli_query($conn,$sql);
        
 
                 while ($res = mysqli_fetch_array($rim)) {
                 ?>
                            <form method="post" action="" enctype="multipart/form-data"> 
        <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
  </div>
  <input type="text" name="brand" value="<?php echo $res['brand'];?>" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
  </div>
  <input type="text" name="name" value="<?php echo $res['name'];?>" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
  </div>
  <input type="text" name="des" value="<?php echo $res['des'];?>" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Stock</span>
  </div>
  <input type="number" name="stock" value="<?php echo $res['stock'];?>" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
  </div>
  <input type="number" name="price" value="<?php echo $res['price'];?>" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" required>
</div>

<div style="text-align: center;">
<button class="btn btn-primary" type="submit" name="submit">Update</button>
</div>
 </form>
 </div>

 <div class="col-md-4" style="text-align: center;">
  <h3>Edit Product Image</h3>
  <br>
  <form method="post" action="" enctype="multipart/form-data">
 <img src="item/<?php echo $res['img_name'];?>" id="image" height="150" width="200">
 <br>
    <label>Update Your Image</label>
    <br>
    <br>
    <input name="img" onchange="showImage.call(this)" type="file" required>
    <br>
    <br>
    <button type="submit" name="sub" class="btn btn-primary">Update</button>
  </form>
</div>
   
                 <?php


        
     
        
        if(isset($_POST['submit'])){

        
        $id = $res['id'];
        $brand = $_POST['brand'];    
        $name = $_POST['name'];
        $des = $_POST['des'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
       
   
            $sql = "UPDATE game SET brand = '$brand',name = '$name',des = '$des',stock = '$stock',price = '$price' WHERE id = '$id'";

                $res = mysqli_query($conn,$sql);              
                echo  '<meta http-equiv="refresh" content="0">';
            
        }

        if(isset($_POST['sub'])){

        
        $id = $res['id'];
        $umg = $res['img_name']; 
        $imagePath = "item/";
        $uniquesavename=time().uniqid(rand()) . '.jpg';
        $destFile = $imagePath . $uniquesavename;
        $filename = $_FILES["img"]["tmp_name"];
        list($width, $height) = getimagesize( $filename);       
        move_uploaded_file($filename,  $destFile);

        unlink("item/".$umg);
       
   
            $sql = "UPDATE game SET img_name = '$uniquesavename' WHERE id = '$id'";

                $res = mysqli_query($conn,$sql);              
                echo  '<meta http-equiv="refresh" content="0">';
            
        }
            
                 }
               }
      
        ?>
   
    




<br>
<hr>
<a href="admindash.php" style="text-align: center; font-size: 25px; font-weight: bolder;">Back To Home</a>
</div>
</div>
 <script type="text/javascript">
    
    function showImage(){
        if(this.files && this.files[0]){
            var obj = new FileReader();
            obj.onload = function(data){
                var image = document.getElementById("image");
                image.src = data.target.result;
                image.style.display = "block";
            }
            
            obj.readAsDataURL(this.files[0]);
        }
    }
    
    </script>
</body>
</body>
</html>
