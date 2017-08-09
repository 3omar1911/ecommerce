<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

function getCats() {

	global $con;

	$queryStr = "SELECT * FROM categories ";
	
	$runQuery = mysqli_query($con, $queryStr);

	/*while($row = mysqli_fetch_array($runQuery)) {

		$title = $row['title'];

		echo "<li><a href='#'>$title</a></li>";

	}*/

	return $runQuery;

}

function getBrands() {

	global $con;

	$queryStr = "SELECT * FROM brands ";
	
	$runQuery = mysqli_query($con, $queryStr);

	/*while($row = mysqli_fetch_array($runQuery)) {

		$title = $row['title'];

		echo "<li><a href='#'>$title</a></li>";

	}*/

	return $runQuery;

}

function getProducts() {

	global $con;
	$queryStr = "SELECT * FROM products ORDER BY RAND() LIMIT 0,6";
	$queryArray = mysqli_query($con, $queryStr);

	while($row = mysqli_fetch_array($queryArray)) {

		$title = $row['title'];
		$image = $row['image'];
		$price = $row['price'];
		echo "
		<div id='singleProduct'>
			<h3>$title</h3>
			<img src='admin_area/product_images/$image' style='width:180px;height:180px;'/>
			<p>price: $$price </p>
			<a href='#'>details</a>
			<input type='button' name='addCart' value='add to cart'/>
		</div>";
	}

}