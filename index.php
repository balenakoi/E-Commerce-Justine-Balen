<?php  ?>
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
<p class="paragraphe"> Selection du mois</p>
  <div class="container">
      <div class="card-deck">
          <div class="card mb-4">
            <a href="produit.php?nom=" . >
              <img class="card-img-top img-fluid" src="img/5.jpg" alt="Card image cap">
              <div class="card-body">
                  <h4 class="card-title">Reebok</h4>
                  <p class="card-text">Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.</p>
                  <p class="prix">99.00€</p>
              </div>
            </a>
          </div>
          <div class="card mb-4">
            <a href="#">
              <img class="card-img-top img-fluid" src="img/3.jpg" alt="Card image cap">
              <div class="card-body">
                  <h4 class="card-title">Nike Air Span II SE </h4>
                  <p class="card-text">Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.</p>
                  <p class="prix">109.00€</p>
              </div>
            </a>
          </div>
          <div class="w-100 d-none d-sm-block d-md-none"><!-- wrap every 2 on sm--></div>
          <div class="card mb-4">
           <a href="#">
              <img class="card-img-top img-fluid" src="img/4.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Asics Gel Saga</h4>
                    <p class="card-text">Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.</p>
                    <p class="prix">119.00€</p>
                </div>
              </a>
          </div>
          <div class="w-100 d-none d-md-block d-lg-none"><!-- wrap every 3 on md--></div>
          <div class="card mb-4">
            <a href="#">
              <img class="card-img-top img-fluid" src="img/6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">New Balance </h4>
                    <p class="card-text">Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018.</p>
                    <p class="prix">179.00€</p>
                </div>
              </a>
          </div>
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
