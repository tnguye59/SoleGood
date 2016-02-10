<!DOCTYPE html>
<html>
<head>
	<title>Your Cart (<?= $this->cart->total_items()?>)</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<style type="text/css">
.row
{
  margin-top: 100px;
}
@font-face{
	font-family: bop;
	src: url('/assets/font-awesome/fonts/bop.ttf');
}
.logo{
	color: white;
	font-size: 2em;
	font-family: bop;
}
</style>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class='logo' class="navbar-brand" href="/">Sole Good!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP NOW <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li>
                              <a href="/products/main_product_page">All Products</a>
                          </li>
                            <li>
                                <a href="/products/mens_products">Men</a>
                            </li>
                            <li>
                                <a href="/products/womens_products">Women</a>
                            </li>
                            <li>
                                <a href="/products/boys_products">Boys</a>
                            </li>
                            <li>
                                <a href="/products/girls_products">Girls</a>
                            </li>
                        </ul>
                    </li>
                    <li>
<?php
                      if($this->session->userdata('userInfo')){
?>

                        <a href="/users/dashboard">DASHBOARD</a>
<?php                 } else {

?>
                        <a href="/users">Register/Login</a>
<?php                   }
?>
                    </li>
                    <li>
                        <a href="/welcome/cart">CART</a>
                    </li>
                    <li>
                        <a href="/welcome/about">ABOUT</a>
                    </li>
<?php
                    if($this->session->userdata('userInfo')){
?>
                    <li>
                      <a href="/users/logout">LOGOUT</a>
                    </li>
<?php                 }
?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!-- /.body -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                  <h2>Your Cart (<?= $this->cart->total_items()?>)</h2>
                    <tr>
                        <th>Product</th>
                        <th></th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
<?php
										foreach($this->cart->contents() as $item)
										{
 ?>

                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/assets/images/<?= $item['id'] ?>.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/products/product_view/<?= $item['id'] ?>"><?= $item['name'] ?></a></h4>
                                <h5 class="media-heading"> by <p><?= $item['options']['brand'] ?></p></h5>
															<h5 class="media-heading"><p> Size: <?= $item['options']['size'] ?></p></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">


                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?= $item['price'] ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$<?= $item['subtotal'] ?></strong></td>
                        <td class="col-sm-1 col-md-1">
													<form action="/users/edit_cart" method="post">
														<input type = "number" name = "quantity" value = "<?= $item['qty'] ?>">
														<input type="hidden" name="row_id" value="<?= $item['rowid']?>">

														<button type="submit" class="btn btn-warning">
		                            <span class="glyphicon glyphicon glyphicon-pencil"></span>Update
		                        </button>
												</form>
                        <a href="/users/remove_item/<?= $item['rowid']?>"><button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></a></td>
                    </tr>
<?php
									}
?>


                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>FREE SHIPPING, SON!</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$<?= $this->cart->total()?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="/products/main_product_page"><button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></a></td>
                        <td>
<?php
                      if($this->session->userdata('userInfo')){
?>

											<a href="/orders/checkout_view"><button type="button" class="btn btn-success">
													Checkout <span class="glyphicon glyphicon-play"></span>
											</button></a></td>
<?php                 } else {

?>
											<a href="/users"><button type="button" class="btn btn-success">
													Checkout <span class="glyphicon glyphicon-play"></span>
											</button></a></td>
<?php                 }
?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
