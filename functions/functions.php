<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

function getCats() {

	global $con;

	$queryStr = "SELECT * FROM categories ";
	
	$runQuery = mysqli_query($con, $queryStr);

	while($row = mysqli_fetch_array($runQuery)) {

		$title = $row['title'];

		echo "<li><a href='#'>$title</a></li>";

	}

}

function getBrands() {

	global $con;

	$queryStr = "SELECT * FROM brands ";
	
	$runQuery = mysqli_query($con, $queryStr);

	while($row = mysqli_fetch_array($runQuery)) {

		$title = $row['title'];

		echo "<li><a href='#'>$title</a></li>";

	}

}