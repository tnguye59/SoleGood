<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <style>
          /* Move down content because we have a fixed navbar that is 50px tall */
      body {
      padding-top: 50px;
      padding-bottom: 20px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <title>HOME PAGE TITLE</title>
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SHOEOHOESHOHESO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" action='' method='post'>
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>BUY SHOES NOW</h1>
          <a href="#" class="btn btn-sm btn-default">LEARN MORE!</a>
        </div>
      </div>
      <div class="most_popular">
        <h1 class='lead'>3 MOST POPULAR!</h1>
        <div class="row">
        <div class="col-md-4">
          <h2>PRODUCT TITLE</h2>
          <p>PRICE</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>PRODUCT TITLE</h2>
          <p>PRICE</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>PRODUCT TITLE</h2>
          <p>PRICE</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      </div>
    </div>

    <hr>
    <footer>
      <ul>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      <p>&copy; COMPANY 2015</p>
    </footer>
  </body>
</html>
