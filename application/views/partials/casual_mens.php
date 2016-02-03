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