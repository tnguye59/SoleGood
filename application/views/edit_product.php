<?php
?>



<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="#">
	<meta charset = "utf-8">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div id = "wrapper">
		<h3>Edit Existing Product Information</h3>
		<?php
        foreach($products as $product){
?>
        <div class="col-md-3 img-portfolio">
            <a href="/products/edit_product/<?= $product['id'] ?>">
                <img class="img-responsive img-hover" src="/assets/images/<?= $product['id'] ?>.png" alt="">
            </a>
            <p>
              <?= $product['name']?>
            </p>
            <p>
              <?= $product['category']?>
            </p>
            <p>
              <?= $product['price']?>
            </p>
        </div>

<?php  }

?>
		</form>
	</div>
</body>
</html>
