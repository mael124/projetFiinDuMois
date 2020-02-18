<?php 
      require('../admin/database/connexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/tennis.css">
    <script src="../js/nav.js"></script>
    <title>Tennis</title>
</head>
<body>


    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php" class="title" style="color: white; font-size:23px;text-transform:uppercase;font-weight:900;">Sport + Actu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="football.php">Football <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tennis.php">Tennis</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link d" href="f1.php">F1</a>
      </li>

      <li class="nav-item">
        <a class="nav-link d" href="nba.php">NBA</a>
      </li>
    </ul>
  </div>
</nav>

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../image_static/r4.png" class="d-block w-100 monImg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h1>Suivez Toute L'actualité Concernant le tennis ici</h1>
                      <p>RolangGaros</p>
                    </div>
                  </div>
                  </div>
                </div>
 
                 
              

        </header>

        <div class="container">
            <div class="row">
            
        <?php 
           
           $db = Database::connect();

          
           $statement= $db->prepare('SELECT items.id, items.titre, items.description, items.image, sports.name AS sport
           FROM items LEFT JOIN sports ON items.sport = sports.id WHERE sports.id=2 ORDER BY items.id DESC');
           $a = $statement->execute();

           while ($article = $statement->fetch()){
             echo '<div class="card col-lg-4 col-sm-6 items" style="width: 18rem;">';
             echo ' <a href="view.php?id='.$article['id'].'">';
              echo '<img src="../images/'.$article["image"].'" class="card-img-top" alt="..." heigth ="100px">';
                echo '<div class="card-body">';
                echo '<p class="card-text">'.$article['titre'].'</p>';
                echo '</div>';
                echo '</a>';
           echo '</div>';
           }
        ?>
        </div> 
        </div>


        

        <!-- <section id="Une">
        <?php 
           
           $db = Database::connect();

          
           $statement= $db->prepare('SELECT items.id, items.titre, items.description, items.image, sports.name AS sport
           FROM items LEFT JOIN sports ON items.sport = sports.id WHERE sports.id=2 ORDER BY items.id DESC LIMIT 1');
           $a = $statement->execute();
                  var_dump($a);
                   
               while ($article = $statement->fetch()){
                   echo '<div class="col-12">';
                       echo ' <a href="view.php?id='.$article['id'].'">';
                       echo '<img src="../images/'.$article["image"].'" alt="">';
                       echo '<h1>'.$article['titre'].'<h1>';
                      // echo '<h1>'.$article['description'].'<h1>';
                       echo '</a>';
                   echo '</div>';
               }

           
           Database::disconnect();
       

        ?>

        <section id="pel_mel">
        <?php 
           
                    $db = Database::connect();

                   
                    $statement= $db->prepare('SELECT items.id, items.titre, items.description, items.image, sports.name AS sport
                    FROM items LEFT JOIN sports ON items.sport = sports.id WHERE sports.id=2 ORDER BY items.id DESC');
                    $a = $statement->execute();
                           var_dump($a);
                            
                        while ($article = $statement->fetch()){
                            echo '<div>';
                                echo ' <a href="view.php?id='.$article['id'].'">';
                                echo '<img src="../images/'.$article["image"].'" alt="">';
                                echo '<h1>'.$article['titre'].'<h1>';
                               // echo '<h1>'.$article['description'].'<h1>';
                                echo '</a>';
                            echo '</div>';
                        }

                    
                    Database::disconnect();
                

                 ?>
                 
        </section> -->


        <!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

<!-- Footer Elements -->
<div class="container">

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fa fa-facebook"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fa fa-google"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fa fa-linkedin"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fa fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href=""> Mael Bah</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    <script src="../node_modules/jquery/dist/jquery.min.js" ></script>
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>