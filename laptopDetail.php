<?php
	include("config.php");
	if(isset($_GET["id"])){$id   =  $_GET['id'];}
	$sql = mysqli_query($db,"SELECT * FROM laptops WHERE product_id='$id'");
	while($row = mysqli_fetch_assoc($sql)){
		$product_id = $row["product_id"];
		$image = $row["image"];
		$brand = $row["brand"];
		$model_name = $row["model_name"];
		$processor = $row["processor"];
		$ram = $row["ram"];
		$hdd = $row["hdd"];
		$ssd = $row["ssd"];
		$os = $row["os"];
		$model_number = $row["model_number"];
		$price = $row["price"];
		$size = $row["size"];
		$color = $row["color"];
		$weight = $row["weight"];
		$description = $row["description"];
		$graphics = $row["graphics"];
		$cache = $row["cache"];
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
        <img id="product-image" src="images\laptops\<?php echo $image;?>">
		<div style="padding-top:5%;">
			<button class="btn btn-danger my-cart-btn my-cart-b" style="padding: 10px 22px;" onclick="addcart(<?php echo $product_id; ?>)" data-id="<?php echo $product_id; ?>"  data-name="<?php echo $model_name; ?>"  data-price="<?php echo $price; ?>" data-quantity="1" data-image="images\laptops\<?php echo $image;?>">ADD TO CART</button>
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
        <h3><?php echo $model_name; ?> <?php echo $processor; ?> - (<?php echo $ram; ?> GB/<?php echo $hdd; ?> HDD/<?php echo $os; ?>) <?php echo $model_number; ?> Laptop (<?php echo $size; ?>, <?php echo $color; ?>, <?php echo $weight; ?> kg)</h3>
		<div class="mid-2" style="padding-top:1.5%;">
			<p1><b>&#8377 <?php echo $price; ?>/-</b></p1> <p><label>&#x20B9;<?php echo $price; ?>/-</label></p>		  
			<div class="clearfix"></div>
		</div>
        <div class="product-details">
		  <h4><b>Product Description</b></h4>
          <p><?php echo $description; ?></p>
        </div>
		<table>
		<div class="product-details">
		  <h4><b>Specifications</b></h4>
          <p><?php echo "<tr><td>Brand </td><td> : ".$brand."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Model name </td><td> : ".$model_name."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Model number </td><td> : ".$model_number."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Operating system </td><td> : ".$os."</td></tr>";?></p>
		  <p><?php echo "<tr><td>RAM </td><td> : ".$ram." GB</td></tr>";?></p>
		  <p><?php echo "<tr><td>Processor </td><td> : ".$processor."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Graphics </td><td> : ".$graphics."</td></tr>";?></p>
          <p><?php echo "<tr><td>SSD </td><td> : ".$ssd."</td></tr>";?></p>
		  <p><?php echo "<tr><td>HDD </td><td> : ".$hdd."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Size </td><td> : ".$size."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Cache </td><td> : ".$cache."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Color </td><td> : ".$color."</td></tr>";?></p>
		  <p><?php echo "<tr><td>Weight </td><td> : ".$weight." kg</td></tr>";?></p>
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