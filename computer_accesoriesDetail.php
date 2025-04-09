<?php
	include("config.php");
	if(isset($_GET["id"])){$id   =  $_GET['id'];}
	$sql = mysqli_query($db,"SELECT * FROM computer_accessories WHERE product_id='$id'");
	while($row = mysqli_fetch_assoc($sql)){
		$product_id = $row["product_id"];
		$image = $row["image"];
		$brand = $row["brand"];
		$model_name = $row["model_name"];
		$display = $row["display"];
		$os_supported = $row["os_supported"];
		$price = $row["price"];
		$color = $row["color"];
		$features = $row["features"];
		$connectivity = $row["connectivity"];
		$warranty = $row["warranty"];
	}
?>
<html>
<head>
<title><?php echo $model_name; ?></title>
<link href="css/XKVKKK.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/XKVKKK.js"></script>

<?php include("head.php"); ?>


</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>

<div class="container">
  <hr>
  <div class="row">
    <div style="width:100%">
      <div style="width:30%;float:left;">
        <img id="product-image" src="images\computer_accessories\<?php echo $image;?>">
		<div style="padding-top:5%;">
			<button class="btn btn-danger my-cart-btn my-cart-b" style="padding: 10px 22px;" onclick="addcart(<?php echo $product_id; ?>)" data-id="<?php echo $product_id; ?>"  data-name="<?php echo $model_name; ?>"  data-price="<?php echo $price; ?>" data-quantity="1" data-image="images\computer_accessories\<?php echo $image;?>">ADD TO CART</button>
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
			<button class="btn btn-danger my-cart-btn my-cart-b" style="padding: 10px 34px;">BUY NOW</button>
		</div>
      </div>
      <div style="width:70%;float:right;">
        <h3><?php echo $brand; ?> <?php echo $display; ?> HD LED <?php echo $color; ?> Monitor (<?php echo $model_name; ?>)</h3>
		<div class="mid-2" style="padding-top:1.5%;">
			<p1><b>&#8377 <?php echo $price; ?>/-</b></p1> <p><label>&#x20B9;<?php echo $price; ?>/-</label></p>		  
			<div class="clearfix"></div>
		</div>
        <div class="product-details">
		  <h4><b>Features</b></h4>
          <p><?php echo $features; ?></p>
        </div>
		<table>
		<div class="product-details">
		  <h4><b>Specifications</b></h4>
          <p><?php echo "<tr><td>Brand </td><td> : ".$brand."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Model name </td><td> : ".$model_name."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Os Supported </td><td> : ".$os_supported."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Connectivity </td><td> : ".$connectivity."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Display </td><td> : ".$display."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Color </td><td> : ".$color."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Warranty </td><td> : ".$warranty."</td></tr>";?></p>
        </div>
		</table>
      </div>
    </div>
  </div>
  </hr>
</div>  
<?php include("footer.php"); ?>
</body>
</html>