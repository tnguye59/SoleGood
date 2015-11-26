<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sole Shoes about page</title>

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
                <a class="navbar-brand" href="index.html">Sole Good!</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">Register/Login</a>
                    </li>
                    <li>
                        <a href="services.html">Help</a>
                    </li>
                    <li>
                        <a href="contact.html">Cart</a>
                    </li>
                    <li>
                        <a href="/welcome/about">About</a>
                    </li>
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
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">About</li>
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
                <p><?= $product_info['price']?></p>
                <p><?= $product_info['description']?></p>
                <form action = "/users/add_to_cart" method = "post">
                  <input type = "hidden" name ="product_id" value = "<?= $product_info['id'] ?>">
                  <input type = "hidden" name ="price" value = "<?= $product_info['price'] ?>">
                  <input type = "hidden" name ="product_name" value = "<?= $product_info['name'] ?>">
                  <input type = "hidden" name ="brand" value = "<?= $product_info['brand'] ?>">
                    <p>
                        <select name="size">
                            <option selected="selected">Size</option>
                            <option>7</option>
                            <option>7.5</option>
                            <option>8</option>
                            <option>8.5</option>
                            <option>9</option>
                            <option>9.5</option>
                            <option>10</option>
                            <option>10.5</option>
                            <option>11</option>
                            <option>11.5</option>
                            <option>12</option>
                        </select>
                        <select name = "quantity">
                            <option selected="selected">QTY</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                             <option>7</option>
                             <option>8</option>
                              <option>9</option>
                        </select>
                        <input type="submit" value="Add to Cart">
                    </p>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recommend Item</h2>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
        <!-- /.row -->


        <hr>
        <h4><a href="/welcome/contact">Contact us</a></h4>

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
