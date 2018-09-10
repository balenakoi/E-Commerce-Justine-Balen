<!doctype html>
<html class="no-js" lang="">

<head>
  <?php
  $productIndex = $_GET['index'];

    $product = [
      ['name' => 'Nike Air Span II SE Mini Swoosh - Black/Red',
      'price' => '109,00 €',
      'available' => 'Disponible',
      'descript' => "Une fois de plus, la marque américaine présente une nouvelle version d’une silhouette lancée à la fin des années 80, la Nike Air Span 2. Ce modèle aux lignes rétro arbore une construction associant différents matériaux comme du mesh, de la feutrine et du cuir. Côté coloris, cette édition présente une association de noir et de détails rouges apportant du contraste à l’ensemble à l’image du mini-Swoosh. Une semelle blanc cassé finalise son design. Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.",
      'src' => "img/air-span.jpg",
      'size' => [40, 42, 42.5, 43, 44, 44.5],
      'color' => ['black', 'red']
      ],
        [
        'name' => 'New Balance M1500.9 FT - Made in UK',
        'price' => '179,00 €',
        'available' => 'Disponible',
        'descript' => "Les équipes de la marque américaine ont revu le design de l’emblématique New Balance 1500 en lui apportant un côté plus technique avec cette semelle empruntée à la NB990v3. Ce changement confère un look tout de suite plus moderne à la silhouette. Son assemblage a été réalisé dans l’usine anglaise de la marque à Flimby avec ce mélange de cuir suédé et de mesh. Aux niveaux des couleurs, la paire affiche un mix de différents bleus, de rose, de blanc et de gris. Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018.",
        'src' => "img/new-balance-made-in-uk.jpg",
        'size' => [40, 41.5, 42.5, 43, 44, 44.5, 45],
        'color' => ['white', 'lightblue', 'lightpink']
        ],
        [
        'name' => 'Asics Gel Saga - White/Asics Blue',
        'price' => '109,00 €',
        'available' => 'Disponible',
        'descript' => "Pour sa nouvelle collection, la firme japonaise relance l'Asics Gel Saga dans son coloris d'origine. Initialement lancé en 1991, le modèle arbore une empeigne mêlant du mesh à des empiècements en feutrine comme à son origine. Côté coloris, cette édition se pare d’une teinte blanche accompagnée par des touches de bleu et d’orange. Le tout est posé sur une semelle blanche couplée à une semelle d’usure reprenant les teintes de l’empeigne. Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.",
        'src' => "img/gel-saga-whiteasics-blue.jpg",
        'size' => [40, 41.5, 42.5, 43.5, 44, 44.5, 45, 46],
        'color' => ['white', 'blue', 'orange']
      ],
        [
        'name' => 'Reebok ACT 300 MU - Chalk/Teal Energy',
        'price' => '99,00 €',
        'available' => 'Disponible',
        'descript' => "Reebok propose une version très sobre de la Reebok ACT 300. L’édition est parée d’un cuir entièrement beige. On remarque que l’ensemble des logos sont dans une teinte verte. Ces détails confèrent à cette édition un look vintage. Une bande verte, sur l’arrière du modèle, vient apporter du contraste à l’ensemble. Enfin une semelle monochrome beige parachève le design de cette itération. Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.",
        'src' => "img/act-300-mu-chalkteal-energy.jpg",
        'size' => [45],
        'color' => ['white', 'lightgreen']
      ]
    ];



   ?>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $product[$productIndex]["name"]; ?> | Basket Addict</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

</head>

<body class="product">
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <header>

    <!-- <?php include('header.php'); ?> -->

  </header>

  <main >
    <section class="container">
      <?php echo '<img class="img-thumbnail shadow-sm" src="' . $product[$productIndex]['src'] . '" alt="' . $product[0]['name'] . '">'; ?>
      <h2><?php echo $product[$productIndex]['name']; ?></h2>
      <div class="row">
        <select class="col-6 size" name="">
          <option value="">Taille</option>
          <?php  foreach($product[$productIndex]['size'] as $element)
{

              echo '<option value="' . $element . '">' . $element . "</option>". '<br />'; // affichera $prenoms[0], $prenoms[1] etc.

            }
          ?>

        </select>
        <p class="col-6"><?php echo $product[0]['price']; ?></p>
      </div>

      <div class="row">
        <p class="col-12 mt-2 mb-1 text-secondary font-weight-bold">Couleur</p>
        <?php  for ($number = 0; $number <  count($color); $number++) {

            echo '<div class="color col-1 ' . $color[$number] . '"></div>';

          }
        ?>

      </div>

      <p class="font-weight-bold available"><?php echo $product[0]['available']; ?></p>
      <p class="text-secondary font-weight-bold">Description</p>
      <p class="text-secondary"><?php echo $product[0]['descript']; ?></p>
    </section>

  </main>

  <footer>

    <!-- <?php include('footer.php'); ?> -->

  </footer>

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
