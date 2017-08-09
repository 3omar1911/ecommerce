<!DOCTYPE html>

<?php 
include('functions/functions.php');
?>

<html>
<head>
	<title>Online Shop</title>
	<link rel="stylesheet" type="text/css" href="styles/style2.css">
</head>
<body>

<div class="main_wrapper">
	<div class="header_wrapper">
		
		<img src="images/banner.gif" id="banner"/>

	</div>

	<div class="menubar">
		<ul id="menu">

			<li><a href="#">Home</a></li>
			<li><a href="#">All Products</a></li>
			<li><a href="#">My Account</a></li>
			<li><a href="#">Sign up</a></li>
			<li><a href="#">Sopping Cart</a></li>
			<li><a href="#">Contact Us</a></li>
			
		</ul>

		<div id="form1">
			<form  method="get" action="#" enctype="multipart/form-data">
				<input type="text" name="search" placeholder="search a product" />
				<input type="submit" name="user_query" value="search" />
			</form>
		</div>
	</div>

	<div class="content_wrapper">
		<div id="content_area">
			<?php getProducts(); ?>
		</div>
		<div id="sidebar">
			
			<div class="sidebar_title">Categories</div>

				<ul class="sidebar_items">

					<?php
					 $rows = getCats(); 
					 while($row = mysqli_fetch_array($rows)) {

					 	$title = $row['title'];
						echo "<li><a href='#'>$title</a></li>";
					 }

					?>
				
				</ul>
				

				<div class="sidebar_title">Brands</div>

				<ul class="sidebar_items">

					<?php
					 $rows = getBrands(); 
					 while($row = mysqli_fetch_array($rows)) {

					 	$title = $row['title'];
						echo "<li><a href='#'>$title</a></li>";
					 }

					?>
					
				</ul>

			</div>

			

		</div>
		<div id="footer">
			<h2 style="text-align: center; padding: 20px;">&copy; copyrights www.nothing.com 2017</h2>
		</div>
	</div>

	

	
</div>


</body>
</html>