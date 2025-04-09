<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>This website is specially design by devicemart. This system’s main purpose to sell computers and it’s all accessories at one place. Customers can buy Laptops, Desktop PCs, Peripherals, CPUs, Software and Games.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="computer_accesories.php">Computer accesories</a></li>
				<li><a href="laptops.php">Laptops</a></li>
				<li><a href="peripherals.php">Peripherals</a></li>
				<li><a href="wireless.php">Wireless</a></li>
				<li><a href="gaming_software.php">Gaming &amp; Software</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="terms.php">Terms & Conditions</a></li>
				<li><a href="contact.php">Contact</a></li>					 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="index.php">
				<?php
					if(isset($_SESSION['login_user']))
						echo $_SESSION['login_user']."</a>";
					else
						echo "<a href='login.php'>Login / Register</a></li>";
					?>
				<li><a href="wishlist.php">Wishlist</a></li>
				<li><a href="logout.php"><?php
					if(isset($_SESSION['login_user']))
						echo "Logout</a>";
					else
						echo "";
					?></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php">DeviceMart</a></h2>
				<p class="fo-para"></p>
				<ul>
					<li><a href="#" ><img src="images\f.png" width=5%></a>&nbsp&nbsp&nbsp
					<a href="#" ><img src="images\t.png" width=5%></a>&nbsp&nbsp&nbsp
					<a href="#" ><img src="images\p.png" width=5%></a>&nbsp&nbsp&nbsp
					<a href="#" ><img src="images\i.png" width=5%></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Atmiya , Kalawad Road Rajkot.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+919632587410 , +919632587410</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>devicemart@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2018 DeviceMart. All Rights Reserved | Design by  <a href="index.php"> DeviceMart</a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>