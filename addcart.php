<?php
 session_start();
 if(!(isset($_SESSION['login_user'])))
 {
   echo 0;
 }
 else
 {
	$uname=$_SESSION['login_user'];
	$db=mysqli_connect("localhost","root","","devicemart");
	$id= $_GET['id'];
	$sql="select * from cart where u_name='$uname' and p_id=$id";
	$result=mysqli_query($db,$sql);
	
	$row = mysqli_fetch_assoc($result);
	if($row['qty']>0)
		$sql="update  cart set qty=qty+1  where u_name='$uname' and p_id=$id";
	else
		$sql="insert into cart(u_name,p_id,qty) values('$uname',$id,1)";
	if(mysqli_query($db,$sql))
		echo "Record Added";
	else
		echo "Somthing Wrong";
}
?>