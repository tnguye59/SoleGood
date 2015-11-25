<?php
?>



<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="#">
	<meta charset = "utf-8">
</head>
<body>
	<div id = "wrapper">
		<h3>Edit Existing Product Information</h3>
		<form action = "/products/add_product" method = "post">
			<label>Category</label><select name = "category">
								<option value = "Dress">Dress</option>
								<option value = "Casual">Casual</option>
									<option value = "Sports">Sports</option>
								   </select>
		    <label>Name:</label><input type = "text" name = "name">
		    <label>Description:</label><input type = "text" name = "description">
		    <label>Price:</label><input type = "text" name = "price">
		    <label>Quantity:</label><input type = "text" name = "quantity">
		    <label>Gender:</label><select name = "gender">
	    							<option value = "mens">Men's</option>
	    							<option value = "womens">Women's</option>
	    							<option value = "boys">Boy's</option>
	    							<option value = "girls">Girl's</option>
									</select>
			<input type = "submit" value = "Update Product Information">
		</form>

	</div>
</body>
</html>
