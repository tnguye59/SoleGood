
<!DOCTYPE html>
<html>
<head>
	<title>Your Cart(item_count)</title>
	<meta charset = "utf-8">
  <style>
  body {
padding-top: 65px;
}
/*move this to external file*/
.product{
  border: solid;
  margin: 2px;
  width: 500px;

}

  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="/">SHOEOHOESHOHESO</a>
        </div>

     </div>
  </nav>
	<div id = "wrapper">
		<div id = "header" class = "page-header">
			<a id = "home" class = "links" href = "/welcome/shoes">< Continue Shopping</a>
			<p>Your Cart(cart_count)</p>
		</div>

		<div id = "maincontent">
    <div id="cart_contents">
      <div class="product">
        <p>foreach session cartdata
        input data into hidden inputs</p>
        <img src="http" alt="" />
        <p>PRODUCT NAME</p>
        <p>$PRICE</p>
        <p>SIZE</p>
        <p>QTY</p>
        <a href="#"><button type='button' class='btn btn-danger'>REMOVE</button></a>
        <a href="#"><button type='button' class='btn btn-warning'>EDIT</button></a>
      </div>
      <div class="product">
        <img src="http" alt="" />
        <p>PRODUCT NAME</p>
        <p>$PRICE</p>
        <p>SIZE</p>
        <p>QTY</p>
        <a href="#"><button type='button' class='btn btn-danger'>REMOVE</button></a>
        <a href="#"><button type='button' class='btn btn-warning'>EDIT</button></a>
      </div>
      <h3>Total: $total</h3>
      <a href="/orders/checkout_view"><button type='submit' class='btn btn-success'>CHECKOUT</button></a>
    </div>
	</div>

</body>
</html>
