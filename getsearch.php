<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    
}

table, td, th {
    border: 1px solid black;
    padding: 15px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
 
 include_once("connection.php");
$q = $_GET['q'];


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql=" Select * from laptop where name like '%".$q."%' OR brand like '%".$q."%'
union
Select * from phone where name like '%".$q."%' OR brand like '%".$q."%'
union
Select * from tab where name like '%".$q."%' OR brand like '%".$q."%'
union
Select * from tv where name like '%".$q."%' OR brand like '%".$q."%'
union
Select * from game where name like '%".$q."%' OR brand like '%".$q."%'  ";

$result = mysqli_query($conn,$sql);
$rowcount= mysqli_num_rows($result);

if($rowcount > 0) {
  echo "<table>
  <tr>
  
  
  </tr>";
  while($row = mysqli_fetch_array($result)) {

       ?>
       <tr>
       	<td>
       		<span><img class="card-img-top" style="height: 50px; width: 60px" src="item/<?php echo $row['img_name'] ?>"><a href="searchresult.php?search=1&name=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></span>
       	</td>
       </tr>
       <?php


    }
}
else{
  ?>
  <tr>
  	<p>No Search Result</p>
  </tr>
  <?php
}





  echo "</table>";
  mysqli_close($conn);

?>
</body>
</html>