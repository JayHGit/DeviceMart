<?php
	include("config.php");
	$product_array = mysqli_query($db,"SELECT * FROM peripherals ORDER BY product_id ASC");
?>
<html>
<head>
<title>DeviceMart | Peripherals</title>

<?php include("head.php"); ?>


</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>

<!--banner-->	
<div class="banner-top">
	<div class="container">
		<h3 >Peripherals</h3>
		<h4><a href="index.php">Home</a><label>/</label>Peripherals</h4>
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
								<a href="peripheralsDetail.php?id=<?php echo $row['product_id']; ?> " style="text-decoration:none"   class="offer-img">
										<img src="images\peripherals\<?php echo $row['image'];?>" class="img-responsive" alt="" width="280" height="180">
									<div class="mid-1">
										<div>
											<h6><?php echo $row['model_name']; ?><?php echo $row['type']; ?>Printer (<?php echo $row['color']; ?>, <?php echo $row['refill_type']; ?>)</h6>							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Rs. <?php echo $row['price']; ?>/-</em></p>
										</a>
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
										   <button class="btn btn-danger my-cart-btn my-cart-b" alt="" onclick="addcart(<?php echo $row['product_id']; ?>)" data-id="<?php echo $row['product_id']; ?>" data-name="<?php echo $row['model_name']; ?>" data-summary="summary 3" data-price="<?php echo $row['price']; ?>" data-quantity="1" data-image="images\peripherals\<?php echo $row['image'];?>">Add to Cart</button>
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