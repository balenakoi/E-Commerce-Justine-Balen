<?php
include("header.php");

// Connection to the database
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=basket_addict;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    // We recover the last 4 tickets
    $req = $bdd->query("SELECT * FROM product WHERE id= '".$_GET['index']."'");

?>
      <div class="container">
        <div class="row">
          <?php
          // The foreach loop for looping the products
          foreach ($req as $key => $value) {
       $reqimg = $bdd->prepare("SELECT * FROM source_img WHERE product_id = :idt");
            $reqimg->execute(array(
             'idt' => $_GET['index']
           ));
           $products = $req->fetch();
      ?>


        <main class="container product" >

          <section class=" row">
            <!-- Add img of product -->
            <?php echo '<img class="img-thumbnail shadow-sm col-lg-5" src="'  . '" alt="' . $products['name'] . '">'; ?>

            <div class="col-lg-7">

              <!-- Add name of product -->
              <h2><?php echo $products['name'];?></h2>

              <div class="row divPrice">

                <select class="col-6 col-lg-2 size" name="size">

                  <option value="">Taille</option>
                  <!-- Add size shoes -->
                  <?php  foreach($products[$productIndex]['size'] as $element) {

                      echo '<option value="' . $element . '">' . $element . "</option>". '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

                    }
                  ?>

                </select>
                <!-- Add Price -->
                <p class="col-6 col-lg-3 price"><?php echo $products['price']; ?></p>

              </div>

              <div class="row divColor">

                <p class="col-12 mt-2 mb-1 text-secondary font-weight-bold">Couleur</p>

                <!-- Add color -->
                <?php  foreach($products[$productIndex]['color'] as $element) {
                    echo '<div class="color col-1 ' . $element . '"></div>';

                  }
                ?>

              </div>

              <!-- Add if that's dispo -->
              <p class="font-weight-bold available"><?php echo $products['dispo']; ?></p>

              <p class="text-secondary font-weight-bold">Description</p>
              <!-- Add descript -->
              <p class="text-secondary"><?php echo $products['content']; ?></p>

              <button type="submit" class="buttonBasket btn" name="button">Ajouter au panier</button>
            </div>


          </section>

        </main>


<?php
      $req->closeCursor();

      include('footer.php');
