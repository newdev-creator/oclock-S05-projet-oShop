<section class="hero">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?= $absoluteURL ?>/">Home</a></li>
        <li class="breadcrumb-item active">Détente</li>
      </ol>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <div class="row">
        <!-- product-->
        <div class="col-lg-6 col-sm-12">
          <div class="product-image">
            <?php
            /*
            <a href="<?= $absoluteURL ?>/<?= $viewData['product']->picture ?>" class="product-hover-overlay-link">
              <img src="<?= $absoluteURL ?>/<?= $viewData['product']->picture ?>" alt="product" class="img-fluid">
            </a>
            */
            ?>
            <a href="<?= $absoluteURL ?>/<?= $product->picture ?>" class="product-hover-overlay-link">
              <img src="<?= $absoluteURL ?>/<?= $product->picture ?>" alt="product" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="mb-3">
            <h3 class="h3 text-uppercase mb-1"><?= $product->getName(); ?></h3>
            <div class="text-muted">by <em>BOOTstrap</em></div>
            <div>
              <?php 
              /*
                En base de données on a le nombre d'étoiles : 1/2/3/4/5
                par exemple 3 étoiles
                étoile 1 : fa-star ==> si (nbétoile >= 1) fa-star sinon fa-star-o
                étoile 2 : fa-star ==> si (nbétoile >= 2) fa-star sinon fa-star-o
                étoile 3 : fa-star ==> si (nbétoile >= 3) fa-star sinon fa-star-o
                étoile 4 : fa-star-o ==> si (nbétoile >= 4) fa-star sinon fa-star-o
                étoile 5 : fa-star-o ==> si (nbétoile >= 5) fa-star sinon fa-star-o
              */
              ?>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="my-2">
            <div class="text-muted"><span class="h4">40 €</span> TTC</div>
          </div>
          <div class="product-action-buttons">
            <form action="" method="post">
              <input type="hidden" name="product_id" value="1">
              <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
            </form>
          </div>
          <div class="mt-5">
            <p>
              <?= $product->description ?>
            </p>
          </div>
        </div>
        <!-- /product-->
      </div>
      
    </div>
  </section>