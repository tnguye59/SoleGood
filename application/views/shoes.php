<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>All Products</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <style type="text/css">
    .sidebar
    {
        height: 500px;
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function() {

      //TODO:
        // $("#sport").click(function(){
        //     $.get("/products/sports_mens_html", function (res) {
        //       $("#products").html(res);
        //     });
        //     return false;
        // });
        // $("#casual").click(function(){
        //     $.get("/products/casual_mens_html", function (res) {
        //       $("#products").html(res);
        //     });
        //     return false;
        // });
        // $("#dress").click(function(){
        //     $.get("/products/dress_mens_html", function (res) {
        //       $("#products").html(res);
        //     });
        //     return false;
        // });
    });
    </script>

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
                <h1 class="page-header">SHOES
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">ALL SHOES</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                  <a id='sport' href="/products/mens_products" class="list-group-item">Men</a>
                  <a id='casual'href="/products/womens_products" class="list-group-item">Women</a>
                  <a id='dress' href="/products/boys_products" class="list-group-item">Boys</a>
                  <a id='dress' href="/products/girls_products" class="list-group-item">Girls</a>
                </div>
            </div>
            <!-- Content Column -->
    <div class="container">

        <!-- Projects Row -->
        <div class="row">
<?php
        foreach($products as $product){
?>
        <div class="col-md-3 img-portfolio">
            <a href="/products/product_view/<?= $product['id'] ?>">
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
<!--
            <div class="col-md-3 img-portfolio">
                <a href="/welcome/item_view">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div> -->
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <!-- <div class="row">
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- Projects Row -->
        <!-- <div class="row">
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
            <div class="col-md-3 img-portfolio">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/750x450" alt="">
                </a>
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Sole Good 2015</p>
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
