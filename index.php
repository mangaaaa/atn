<?php 
require("inc/conn.php");
include('inc/header.php');
?>
<!-- slide -->
<div>
<img src="img/hompage.jpg" style="width:100%;height:500px;margin: bottom 40px;">
</div>
<!-- end slide -->
<!-- list product -->
<div class="container-fluid">
	<div class="row">
		<div style="border-bottom:4px solid #C63D5D;width: 100%">
		<h2 >List Toys</h2>
		</div>
    <div style="width: 100%;color: red;text-align: center;">
    <marquee behavior="alternate" width="10%">>></marquee>Wish you find and buy the right product<marquee behavior="alternate" width="10%"><< </marquee>
    </div>
	<?php 
    $sql="SELECT * FROM product";
    $rs= pg_query($dbconn,$sql);
    if (pg_num_rows($rs)>0) 
    {
      while ($row=pg_fetch_assoc($rs)) 
      {
    ?>
					<div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px; 
					border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
			      	<a href="single.php?id=<?php echo $row['productid']?>" style=" text-decoration: none; 
			      text-align: center;">
			      <div style="height:80px">
			        <h2><?php echo $row['productname'] ?></h2>
			        </div>
			        <div><img src="img/<?php echo $row['productimg']?>" style="width: 247px;height: 200px;padding: 7px"></div>
			        <p style="color: red"><?php echo $row['productprice']." $"; ?></p>
			      </a>
    			</div>
    				 	<?php
      }
  }
    ?>
		</div>
		</div>
	
<!-- end list product -->
<?php 
include("inc/footer.php");
 ?>