
<?php

  //Take the number of product
  $productIndex = $_GET['index'];

  //All products in array
  $products = [
          [

            'name' => 'Nike Air Span II SE Mini Swoosh - Black/Red',
            'price' => '109,00 €',
            'available' => 'Disponible',
            'descript' => "Une fois de plus, la marque américaine présente une nouvelle version d’une silhouette lancée à la fin des années 80, la Nike Air Span 2. Ce modèle aux lignes rétro arbore une construction associant différents matériaux comme du mesh, de la feutrine et du cuir. Côté coloris, cette édition présente une association de noir et de détails rouges apportant du contraste à l’ensemble à l’image du mini-Swoosh. Une semelle blanc cassé finalise son design. Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.",
            'src' => "img/air-span.jpg",
            'size' => [40, 42, 42.5, 43, 44, 44.5],
            'color' => ['black', 'red']
          ],[

            'name' => 'New Balance M1500.9 FT - Made in UK',
            'price' => '179,00 €',
            'available' => 'Disponible',
            'descript' => "Les équipes de la marque américaine ont revu le design de l’emblématique New Balance 1500 en lui apportant un côté plus technique avec cette semelle empruntée à la NB990v3. Ce changement confère un look tout de suite plus moderne à la silhouette. Son assemblage a été réalisé dans l’usine anglaise de la marque à Flimby avec ce mélange de cuir suédé et de mesh. Aux niveaux des couleurs, la paire affiche un mix de différents bleus, de rose, de blanc et de gris. Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018.",
            'src' => "img/new-balance-made-in-uk.jpg",
            'size' => [40, 41.5, 42.5, 43, 44, 44.5, 45],
            'color' => ['white', 'lightblue', 'lightpink', 'black']
          ],[

            'name' => 'Asics Gel Saga - White/Asics Blue',
            'price' => '109,00 €',
            'available' => 'Disponible',
            'descript' => "Pour sa nouvelle collection, la firme japonaise relance l'Asics Gel Saga dans son coloris d'origine. Initialement lancé en 1991, le modèle arbore une empeigne mêlant du mesh à des empiècements en feutrine comme à son origine. Côté coloris, cette édition se pare d’une teinte blanche accompagnée par des touches de bleu et d’orange. Le tout est posé sur une semelle blanche couplée à une semelle d’usure reprenant les teintes de l’empeigne. Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.",
            'src' => "img/gel-saga-whiteasics-blue.jpg",
            'size' => [40, 41.5, 42.5, 43.5, 44, 44.5, 45, 46],
            'color' => ['white', 'blue', 'orange']
          ],[

            'name' => 'Reebok ACT 300 MU - Chalk/Teal Energy',
            'price' => '99,00 €',
            'available' => 'Disponible',
            'descript' => "Reebok propose une version très sobre de la Reebok ACT 300. L’édition est parée d’un cuir entièrement beige. On remarque que l’ensemble des logos sont dans une teinte verte. Ces détails confèrent à cette édition un look vintage. Une bande verte, sur l’arrière du modèle, vient apporter du contraste à l’ensemble. Enfin une semelle monochrome beige parachève le design de cette itération. Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.",
            'src' => "img/act-300-mu-chalkteal-energy.jpg",
            'size' => [45],
            'color' => ['white', 'lightgreen']
          ]
        ];

      // if (! isset($productIndex) OR $productIndex >= count($products) OR $productIndex < 0 OR empty($productIndex)) {
      //     //If $productIndex has not here or empty or more than products or less
      //     //That's go to 404 pages
      //     header('Location: 404.html');
      //     exit;
      // }
?>

<title><?php echo $products[$productIndex]["name"]; ?> | Basket Addict</title>


  <!-- Add header -->
  <?php include('header.php'); ?>

  <main class="container" >

    <section class=" row">
      <!-- Add img of product -->
      <?php echo '<img class="img-thumbnail shadow-sm col-lg-6" src="' . $products[$productIndex]['src'] . '" alt="' . $products[0]['name'] . '">'; ?>

      <div class="col-lg-6">

        <!-- Add name of product -->
        <h2><?php echo $products[$productIndex]['name'];?></h2>

        <div class="row divPrice">

          <select class="col-6 size" name="size">

            <option value="">Taille</option>
            <!-- Add size shoes -->
            <?php  foreach($products[$productIndex]['size'] as $element) {

                echo '<option value="' . $element . '">' . $element . "</option>". '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

              }
            ?>

          </select>
          <!-- Add Price -->
          <p class="col-6 price"><?php echo $products[0]['price']; ?></p>

        </div>

        <div class="row">

          <p class="col-12 mt-2 mb-1 text-secondary font-weight-bold">Couleur</p>

          <!-- Add color -->
          <?php  foreach($products[$productIndex]['color'] as $element) {
              echo '<div class="color col-1 ' . $element . '"></div>';

            }
          ?>

        </div>

        <!-- Add if that's dispo -->
        <p class="font-weight-bold available"><?php echo $products[$productIndex]['available']; ?></p>

        <p class="text-secondary font-weight-bold">Description</p>
        <!-- Add descript -->
        <p class="text-secondary"><?php echo $products[$productIndex]['descript']; ?></p>

      </div>

    </section>

  </main>

   <?php include('footer.php'); ?>
