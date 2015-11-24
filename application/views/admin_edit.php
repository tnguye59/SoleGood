<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Editing Page</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit Order #:product id</h1>
      <form class="products/update/product id" action="index.html" method="post">
        Name:<input type="text" name="name" value="product name">
        Description:<input type="text" name="description" value="product description">
        Shipping addres:<input type="text" name="shipping" value="info shipping">
        Billing Address:<input type="text" name="billing" value="info billing">
        Total:<input type="text" name="total" value="order total">
        <input type="submit" name="edit" value="update">
      </form>
    </div>
  </body>
</html>
