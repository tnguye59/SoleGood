<!DOCTYPE html>
<html lang="en">

<head>
  <style media="screen">
    @font-face{
      font-family: bop;
      src: url('/assets/font-awesome/fonts/bop.ttf');
    }
    .logo{
      color: white;
      font-size: 2em;
      font-family: bop;
    }
    .toppick
    {
        width: 320px;
        height: 200px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .img-responsive img-portfolio
    {
        width: 320px;
        height: 200;
    }

  </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sole Good</title>


    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

    <!-- Header Carousel -->
     <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
             <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('/assets/img/vans.jpg');"></div>
                <div class="carousel-caption">
                  <!--   <h2>Caption 1</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/jordan.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 2</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/converse.jpg');"></div>
                <div class="carousel-caption">
                   <!--  <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/nike.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/assets/img/red.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <h2>Caption 3</h2> -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    TOP PICKS
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>MEN</h4>
                    </div>
                    <div class="panel-body">
                        <h5>High Nike Roshe Suede Black Blue Running Shoes</h5>
                        <img class="toppick" src="/assets/img/nikeroshe.jpg">
                        <a href="/products/mens_products" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>WOMEN</h4>
                    </div>
                    <div class="panel-body">
                        <h5>Michael Antonio Tochi Black Satin Rep Pu</h5>
                        <img class="toppick" src="/assets/img/womentoppick.jpg">
                        <a href="/products/womens_products" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i>KIDS</h4>
                    </div>
                    <div class="panel-body">
                        <H5>Baby Shoes Rose Baby Prewalker Flowers</H5>
                        <img class="toppick" src="/assets/img/kidtoppick.jpg">
                        <a href="/products/girls_products" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row" class="newrelease">
            <div class="col-lg-12">
                <h2 class="page-header">NEW RELEASE</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/1">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/1.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/7">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/7.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/8">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/8.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/3">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/3.png" alt="">
                </a>
            </div>
                 <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/10">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/10.png" alt="">
                </a>
            </div>
                 <div class="col-md-4 col-sm-6">
                <a href="/products/product_view/14">
                    <img class="img-responsive img-portfolio img-hover" src="/assets/images/14.png" alt="">
                </a>
            </div>
        </div>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
