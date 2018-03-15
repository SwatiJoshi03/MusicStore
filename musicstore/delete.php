
        <html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
		h1 { font-size: 60px;}
		header
		{
			background-color:#DB7093;
			font-size:"50px";
		}
		
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}
		
	</style>
	

</head>

<body bgcolor="#F0F8FF">
	<div class="container">
	<header>
		<h1>
			<center>MUSIC STORE</center>
		</h1>   
		</header>
		
		<ul>
		  <li><a class="active" href="#home">Home</a></li>
		  <li><a href="http://localhost/musicstore2/artist.php">Artists</a></li>
		  <li><a href="http://localhost/musicstore2/product.php">Products</a></li>
		  <li><a href="http://localhost/musicstore2/order.php">Order now</a></li>
		  
		</ul>
        </div><br><br>

<center>
<form method="POST" action="">
<table border="5" bgcolor="Lavender"> <h2><b>CUSTOMER DATABASE</b></h2><br><a href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>

<tr>
		<td>ENTER CUSTOMER_ID:</td>
		<td><input type="text" name="cid" /></td>
	</tr>

		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require 'db_conn.php';

$cid=$_POST['cid'];
if(isset($_POST['submit']))
 {
 $del=mysql_query("DELETE FROM customer where CUSTOMER_ID='$cid'");


if($del)
{
 echo"Record Successfully Deleted";
}
else
{

echo"Not Delete Your Record" ;
}
 }
?>