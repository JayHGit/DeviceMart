<?php
	include("config.php");
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
			$name  =  $_POST['name'];
			$mobile  =  $_POST['mobile'];
			$email =  $_POST['email'];
			$password   =  $_POST['password'];
			if(isset($_POST["confirm_password"])){$confirm_password   =  $_POST['confirm_password'];}
			
			if($password==$confirm_password )
			{
				
				$query="INSERT INTO user_master(full_name,mobile_number,email,password)VALUES('$name','$mobile','$email','$password')";
		
			$data = mysqli_query($db,$query);
			if($data)
			{
				echo '<script language="javascript">';
				echo 'alert("YOUR REGISTRATION IS COMPLETED...")';
				echo '</script>';
				$_SESSION['login_user'] = $name;
				header("Location:index.php");
			}	
			}
			else
			{	
						
							echo '<script language="javascript">';
							echo 'alert("Password Not Match")';
							
							echo '</script>';
							
			}	
   }
?>
<html>
<head>
<title>DeviceMart | Sign Up</title>

<?php include("head.php"); ?>

</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>

<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.php">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--Register-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="#" method="post">
						<div class="key">
							<input  type="text" name="name" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}"  required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" name="mobile" value="Mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}"  required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" name="email" value="Email ID" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email ID';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" value="Password" name="confirm_password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit"><a href="index.php" style="text-decoration:none;color:#029241;font-size:1.25em;padding-left:55%;hover:#fdb515;" onMouseOver="this.style.color='#fdb515'" onMouseOut="this.style.color='#029241'">Login</a>
				</div>
					</form>
				</div>
					
				
			</div>
		</div>
	<?php include("footer.php"); ?>
</body>
</html>