
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<title>Login Page</title>
</head>
<style type="text/css">
	h1{
		text-align: center;
		size: 20px;
		color: black;

	}
	p{
		text-align:center;
	}
	form{

		text-align:center;
		size: 12px;
		color: black;
	}
	img {
		margin-top: 10px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 180px;
}
.error{color:#ff0000;}

</style>
<body>
	<?php
	$UnameErr=$passErr="";

	if(empty($usern)){
		$UnameErr="UserName is required..";
	} 
	if(empty($pass)){
		$passErr="Password is required";
	}                   
?>


	<img src="logo.jpg" alt="logo">
	<div class="container">
	<h1>Welcome ShopMyBook Store</h1>
	<hr>
	
		<p>*-Required Field</p>
		<form action="index.php" method="POST">
			<b>*</b>Enter Username:<input type="text" name="uname"/><br><br>
			<b>*</b>Enter Password:<input type="Password" name="upass"/><br><br>
			<input type="Submit" name="b1" onclick="products.php" />
		</form>
		
</body>
</html>
