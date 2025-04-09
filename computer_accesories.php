<?php
	include("config.php");
	$product_array = mysqli_query($db,"SELECT * FROM computer_accessories ORDER BY product_id ASC");
?>
<html>
<head>
<title>DeviceMart | Computer accessories</title>

<?php include("head.php"); ?>


</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>

<!--banner-->	
<div class="banner-top">
	<div class="container">
		<h3 >Computer accessories</h3>
		<h4><a href="index.php">Home</a><label>/</label>Computer accessories</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="product">
	<div class="container">
				<div class="con-w3l">
				<?php 
				while($row = mysqli_fetch_assoc($product_array)){?>
							<div class="prod">
								<div class="col-m">
								<a href="computer_accesoriesDetail.php?id=<?php echo $row['product_id']; ?>"   class="offer-img" style="text-decoration:none;">
										<img src="images\computer_accessories\<?php echo $row['image'];?>" class="img-responsive" alt="" width="280" height="180">
									<div class="mid-1">
										<div>
											<h6><?php echo $row['brand']; ?><?php echo $row['display']; ?> HD LED <?php echo $row['color']; ?> Monitor (<?php echo $row['model_name']; ?>)</h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Rs. <?php echo $row['price']; ?>/-</em></p>
											  
											<div class="clearfix"></div>
										</div>
										</a>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" alt="" onclick="addcart(<?php echo $row['product_id']; ?>)" data-id="<?php echo $row['product_id']; ?>" data-name="<?php echo $row['model_name']; ?>" data-summary="summary 3" data-price="<?php echo $row['price']; ?>" data-quantity="1" data-image="images\computer_accesories\<?php echo $row['image'];?>">Add to Cart</button>
										   <script>
function addcart(str) {
  var xhttp;   
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        if(this.responseText==0)
            window.location.href = "login.php";
      alert(this.responseText);
    }
  };
  xhttp.open("GET", "addcart.php?id="+str, true);
  xhttp.send();
}
</script>
										</div>
									</div>
								</div>
							</div>
							<?php  }?>
							<div class="clearfix" ></div>
				</div>
		</div>
	</div>

<?php include("footer.php"); ?>
</body>
</html>