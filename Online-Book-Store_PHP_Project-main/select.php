
<html>
<style type="text/css">
	body{
		background-color: skyblue;
		text-align: center;
		font-size: 20px;

	}
	img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 180px;
}
h1{
	text-align: center;

}
a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
</style>
<body>
	<img src="logo.jpg" alt="logo">
	<div class="container">
	<h1>Billing Details</h1>
	<hr>
	<?php
	$conn=mysqli_connect("localhost","root","","proproduct");
	if($conn){
		echo "Connection established..";
	}
	else{
		echo "Connection failed" ;
	}
	
	$sql="SELECT * FROM products;";
	$result=$conn->query($sql);
	if($result->num_rows > 0){
		while ($row=$result->fetch_assoc()) {
			echo "Id:".$row["id"]."<br>";
			echo "Name:".$row["name"]."<br>";
			echo "Price:".$row["price"]."<br>";
		}
	}
	else{
		echo "0 results..";
	}
	$conn->close();
	?>


<a href="OrdersDetailsform.php" target="_blank">Go to Order Details</a>
</body>
</html>