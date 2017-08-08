<!DOCTYPE html>
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
			<td>Product Categorie</td>
			<td><input type="text" name="cat"></td>
		</tr>

		<tr>
			<td>Product Brand</td>
			<td><input type="text" name="brand"></td>
		</tr>

		<tr>
			<td>Product Price</td>
			<td><input type="text" name="price"></td>
		</tr>

		<tr>
			<td>Product Description</td>
			<td><input type="text" name="descr"></td>
		</tr>

		<tr>
			<td>Product image</td>
			<td><input type="text" name="pro_image"></td>
		</tr>

		<tr>
			<td>Product keywords</td>
			<td><input type="text" name="kwd"></td>
		</tr>

		
		<tr>
			
			<th colspan="2"><input type="submit" value="insert product"></th>
		</tr>
	</table>
</form>

</body>
</html>