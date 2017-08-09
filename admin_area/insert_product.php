<!DOCTYPE html>

<?php
include('../functions/functions.php');
if(isset($_POST['submitProduct'])) {

	$title = $_POST['title'];
	$product_cat = $_POST['product_cat'];
	$product_brand = $_POST['product_brand'];
	$price = $_POST['price'];
	$product_desc = $_POST['product_desc'];
	$kwd = $_POST['kwd'];

	$imgName = $_FILES['pro_image']['name'];
	$imgTmpName = $_FILES['pro_image']['tmp_name'];

	move_uploaded_file($imgTmpName, "product_images/$imgName");

	$insertQuery = "INSERT INTO products (cat, brand, title, price, description, image, keywords) VALUES ($product_cat, $product_brand, '$title', $price, '$product_desc', '$imgName', '$kwd')";

	mysqli_query($con, $insertQuery);
}

?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>
<body>

<form action="insert_product.php" method="post" enctype="multipart/form-data">
	<table class="addingProduct">
		<tr>
			<th colspan="2"> INSERT PRODUCT </td>
		</tr>

		<tr>
			<td>Product Title</td>
			<td><input type="text" name="title"></td>
		</tr>

		<tr>
			<td>Product Category</td>
			<td>
				<select name="product_cat">
					<option>Select a category</option>
					<?php
						$rows = getCats(); 
					 while($row = mysqli_fetch_array($rows)) {

					 	$title = $row['title'];
					 	$id = $row['id'];
						echo "<option value='$id'>$title</option>";
					 }
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Product Brand</td>
			<td>
				<select name="product_brand">
					<option>Select a Brand</option>
					<?php
						$rows = getBrands(); 
					 while($row = mysqli_fetch_array($rows)) {

					 	$title = $row['title'];
					 	$id = $row['id'];
						echo "<option value='$id'>$title</option>";
					 }
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Product Price</td>
			<td><input type="text" name="price"></td>
		</tr>

		<tr>
			<td>Product Description</td>
			<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
		</tr>


		<tr>
			<td>Product image</td>
			<td><input type="file" name="pro_image"></td>
		</tr>

		<tr>
			<td>Product keywords</td>
			<td><input type="text" name="kwd"></td>
		</tr>

		
		<tr>
			
			<th colspan="2"><input type="submit" name="submitProduct" value="insert product"></th>
		</tr>
	</table>
</form>

</body>
</html>

