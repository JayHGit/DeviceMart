<?php
   require_once("config.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	  $email=$_POST["email"];
	  $password=$_POST["password"];
      $sql = "SELECT * FROM user_master WHERE email = '$email' and password = '$password'";
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_assoc($result);
	  $active = $row['active'];
	  $count = mysqli_num_rows($result);
		
      if($count == 1) {
        $_SESSION['login_user'] = $row['full_name'];
        header("location: index.php");
      }else {
			echo '<script language="javascript">';
			echo 'alert("Your Login Email or Password is invalid")';
			echo '</script>';
      }
   }
?>
<html>
<head>
<title>DeviceMart | Login</title>

<?php include("head.php"); ?>

</head>
<body>

<div class="header">
	<?php include("header.php"); ?>		
</div>
  
  
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="index.php">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!--login-->

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Login</h3>
					<form action="#" method="post">
						<div class="key">
							<input  type="text" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="forg">
					<a href="#" class="forg-left">Forgot Password</a>
					<a href="register.php" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	<?php include("footer.php"); ?>
</body>
</html>