<?php

    $userData = $this->session->userdata('userInfo');
    // var_dump($orders);

   // if($userData['is_admin'] == true)
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sole Shoes Dashboard</title>
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
    </style>


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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Welcome <?= $userData['name']; ?>, to your Dashboard
                </h1>
                <ol class="breadcrumb">
                    <?php
                    if($userData['is_admin'] == 'true'){
                    ?>
                    <li><a href="/products/addnew">Add Products</a></li>
                    <li class="active"><a href="/products/editinfo">Edit Products</li>
                  <?php
                    }
                    ?>

                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Quantity</td>
                            <td>Total Price</td>
                            <td>Created_at</td>
                        </tr>
                    </thead>

                    <tbody>
<?php
                        foreach($orders as $order)
                        {
?>
                         <tr>
                            <td><?= $order['id']; ?></td>
                            <td><?= $order['quantity']; ?></td>
                            <td><?= $order['total_price']; ?></td>
                            <td><?= $order['created_at']; ?></td>
                        </tr>
 <?php
                    };
?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; So Good 2015</p>
                </div>
            </div>
        </footer>

    </div>
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