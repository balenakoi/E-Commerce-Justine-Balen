<?php
 //All products in array
 $products = [
         [

           'name' => 'Nike Air Span II SE Mini Swoosh - Black/Red',
           'price' => '109,00 €',
           'available' => 'Disponible',
           'descript' => "Une fois de plus, la marque américaine présente une nouvelle version d’une silhouette lancée à la fin des années 80, la Nike Air Span 2. Ce modèle aux lignes rétro arbore une construction associant différents matériaux comme du mesh, de la feutrine et du cuir. Côté coloris, cette édition présente une association de noir et de détails rouges apportant du contraste à l’ensemble à l’image du mini-Swoosh. Une semelle blanc cassé finalise son design. Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.",
           'src' => "img/air-span.jpg",
           'size' => [40, 42, 42.5, 43, 44, 44.5],
           'color' => ['black', 'red'],
             "disc" => "Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.",
         ],[

           'name' => 'New Balance M1500.9 FT - Made in UK',
           'price' => '179,00 €',
           'available' => 'Disponible',
           'descript' => "Les équipes de la marque américaine ont revu le design de l’emblématique New Balance 1500 en lui apportant un côté plus technique avec cette semelle empruntée à la NB990v3. Ce changement confère un look tout de suite plus moderne à la silhouette. Son assemblage a été réalisé dans l’usine anglaise de la marque à Flimby avec ce mélange de cuir suédé et de mesh. Aux niveaux des couleurs, la paire affiche un mix de différents bleus, de rose, de blanc et de gris. Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018.",
           'src' => "img/new-balance-made-in-uk.jpg",
           'size' => [40, 41.5, 42.5, 43, 44, 44.5, 45],
           'color' => ['white', 'lightblue', 'lightpink', 'black'],
           "disc" => "Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018." ,
         ],[

           'name' => 'Asics Gel Saga - White/Asics Blue',
           'price' => '109,00 €',
           'available' => 'Disponible',
           'descript' => "Pour sa nouvelle collection, la firme japonaise relance l'Asics Gel Saga dans son coloris d'origine. Initialement lancé en 1991, le modèle arbore une empeigne mêlant du mesh à des empiècements en feutrine comme à son origine. Côté coloris, cette édition se pare d’une teinte blanche accompagnée par des touches de bleu et d’orange. Le tout est posé sur une semelle blanche couplée à une semelle d’usure reprenant les teintes de l’empeigne. Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.",
           'src' => "img/gel-saga-whiteasics-blue.jpg",
           'size' => [40, 41.5, 42.5, 43.5, 44, 44.5, 45, 46],
           'color' => ['white', 'blue', 'orange'],
             "disc" => "Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.",
         ],[

           'name' => 'Reebok ACT 300 MU - Chalk/Teal Energy',
           'price' => '99,00 €',
           'available' => 'Disponible',
           'descript' => "Reebok propose une version très sobre de la Reebok ACT 300. L’édition est parée d’un cuir entièrement beige. On remarque que l’ensemble des logos sont dans une teinte verte. Ces détails confèrent à cette édition un look vintage. Une bande verte, sur l’arrière du modèle, vient apporter du contraste à l’ensemble. Enfin une semelle monochrome beige parachève le design de cette itération. Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.",
           'src' => "img/act-300-mu-chalkteal-energy.jpg",
           'size' => [45],
           'color' => ['white', 'lightgreen'],
           "disc" => "Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.",
         ]
       ];

     // if (! isset($productIndex) OR $productIndex >= count($products) OR $productIndex < 0 OR empty($productIndex)) {
     //     //If $productIndex has not here or empty or more than products or less
     //     //That's go to 404 pages
     //     header('Location: 404.html');
     //     exit;
     // }
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/normalize.css">
</head>

<body>
<?php
include("header.php");
?>
<!-- TITRE  -->
<p class="paragraphe">Selection du mois</p>
<div class="container">
  <div class="row">
    <?php
    // The foreach loop for looping the products
    foreach ($products as $key => $value) {?>

          <div class="col-md-3">
            <a href="product.php?index=<?php echo $key; ?>" >
              <img margin-top="100" width="300" src="<?php echo $value['src']?>">
              <div class="card-body">
                  <h4 class="card-title"><?php echo $value['name'];?></h4>
                  <p class="card-text"><?php echo $value['disc'];?></p>
                  <p class="price"><?php echo $value['price'];?></p>
              </div>
            </a>
          </div>

        <?php
    }
     ?>
 </div>
</div>
<?php
  include('footer.php');
  ?>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>
