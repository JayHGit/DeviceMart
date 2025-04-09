<?php
include("config.php");
$product_array = mysqli_query($db,"SELECT * FROM offer");
?>
<html>
<head>
<title>DeviceMart</title>

<?php include("head.php"); ?>

</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>


<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="#"> <img class="first-slide" src="images/index/sd.jpg" alt=""></a>
       
        </div>
        <div class="item">
         <a href="#"> <img class="second-slide " src="images/index/sd2.jpg" alt=""></a>
         
        </div>
        <div class="item">
          <a href="#"><img class="third-slide " src="images/index/sd3.jpg" alt=""></a>
          
        </div>
		<div class="item">
          <a href="#"><img class="forth-slide " src="images/index/sd4.jpg" alt=""></a>
          
        </div>
		<div class="item">
          <a href="#"><img class="fifth-slide " src="images/index/sd5.jpg" alt=""></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
<!--offer-->
	<div class="product">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			<div class="col-m">
				<?php 
				while($row = mysqli_fetch_assoc($product_array)){?>
							<div style="position:relative;float:left;width:20%;">
								<a href="<?php echo $row['page']; ?>?id=<?php echo $row['offer_id']; ?>"  class="offer-img" style="text-decoration: none;">
									<div style="min-height:100px;">
										<img src="images\offer\<?php echo $row['image'];?>" class="img-responsive" alt="" width="280" height="180">
									</div>
										<div style="padding: 1.5em 0 0;">
											<center><h6 style="color:#000000;font-size:1.2em;font-family:Arial;font-style:normal;"><?php echo $row['category']; ?></h6>						
										</div>
										<div style="padding: 1em 0 0;">
											<center><p style="color:#008000;font-size:1em;font-family:Arial;font-style:normal;"><?php echo $row['offer']; ?></p>
										</div>
										<div style="padding: 1em 0 0;">
											<center><p style="color:#B4B4B4;font-size:1em;font-family:Arial;font-style:normal;"><?php echo $row['brands']; ?></p>
										</div>
								</a>
							</div>
			<?php  }?>
			<div style="padding:7.5em;">
		</div>
	</div>
<!---->
<br>
	<div class="carousel-inner" >
        <div class="item active">
         <a href="peripherals.php"> <img src="images/index/premium-audio-store.jpg" alt=""></a>
        </div>
    </div>
	
	
	<div style="margin:0.1em;">
		<a href="peripherals.php"><img height="300" width="auto" src="images\Index\bose.jpg"></img></a>
		<a href="peripherals.php"><img height="300" width="auto" src="images\Index\JAM.jpg"></img></a>
		<a href="laptops.php"><img height="300" width="301" src="images\Index\Laptops.jpg"></img></a>
	</div>
	
	<?php include("footer.php"); ?>
</body>
</html>