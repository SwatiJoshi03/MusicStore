

<!DOCTYPE html>
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
		<div class="w3-content w3-section" style="max-width:400px">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\zedd1.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\id.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\ed.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\lp.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\cpsfos.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\idr.jpeg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\zedd.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\guitar.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\piano.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\btsw.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\cp1.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\ig1.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\lightsaber.jpg" style="width:100%">
	<img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\ml.jpg" style="width:100%">
        <img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\1200x630bb.jpg" style="width:100%">
        <img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\shinhwalogo.jpg" style="width:100%">
        <img class="mySlides" src="C:\Users\dell\Desktop\new music\HPpic\cp.jpg" style="width:100%">
</div>
</center>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
