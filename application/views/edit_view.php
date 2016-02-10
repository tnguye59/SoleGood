<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit a Product</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
label {
  display: inline-block;
  width: 200px;
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
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $product_info['brand']?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><?= $product_info['name']?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="/assets/images/<?= $product_info['id'] ?>.png" alt="">
            </div>

            <div class="col-md-6">
                <h2><?= $product_info['name']?></h2>
                <p><?= $product_info['category']?></p>
                <p>$<?= $product_info['price']?></p>
                <p><?= $product_info['description']?></p>
                <form action = "/products/update_product_info/<?= $product_info['id'] ?>" method = "post">
                <!--   <input type = "hidden" name ="product_id" value = "<?= $product_info['id'] ?>">
                  <input type = "hidden" name ="price" value = "<?= $product_info['price'] ?>">
                  <input type = "hidden" name ="product_name" value = "<?= $product_info['name'] ?>">
                  <input type = "hidden" name ="brand" value = "<?= $product_info['brand'] ?>"> -->
                      <label>Brand:</label><input type = "text" name = "brand">
                      <label>Category:</label><input type = "text" name = "category">
                      <label>Name:</label><input type = "text" name = "name">
                      <label>Description:</label><input type = "text" name = "description">
                      <label>Price:</label><input type = "text" name = "price">

                        <input type="submit" value="update information">

                </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Sole Good!</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>
