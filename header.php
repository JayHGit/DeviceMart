<div class="container">
	<div class="logo">
		<h1><a href="index.php">DeviceMart</a></h1>
	</div>
	<div class="head-t">
		<ul class="card">
					<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i> Wishlist</a></li>
					<li><a href="index.php"><i class="fa fa-user" aria-hidden="true"></i>
					<?php
					if(isset($_SESSION['login_user']))
						echo "Welcome, ".$_SESSION['login_user']."</a>";
					else
						echo "<a href='login.php'>Login / Register";?></a></li>
					<li><a href="#" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
		</ul>	
	</div>
	
	<!--banner-->
    <div class="container">
			<div class="search-form">
				<form action="#" method="post">
					<input type="text" placeholder="Search..." name="search">
					<input type="submit" value=" " >
				</form>
			</div>	
    </div>

<!--->
	<div class="nav-top">
		<?php include("navigation.php"); ?>
	</div>
</div>