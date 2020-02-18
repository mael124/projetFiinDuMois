<?php 
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}

require('../admin/database/connexion.php');
$db = Database::connect();


$statement= $db->prepare('SELECT items.id, items.titre, items.description, items.image
FROM items WHERE id=?');
 $statement->execute(array($id));
 $article = $statement->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/view.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php" class="title" style="color: white; font-size:23px;text-transform:uppercase;font-weight:900;">Sport + Actu</a>  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
</header>
     <div class="container">
        <div class="card col-12">
            <?php 
           echo '<img src="../images/'.$article['image'].'" class="card-img" alt="...">';
           echo  '<div class="card-body">';
         echo  '<h5 class="card-title">'.$article['titre'].'</h5>';
              echo  '<p class="card-text">'.$article['description'].'</p>';
        
            ?>
            </div>
        </div>
     </div>

<footer>
     <!-- Footer Elements -->
<div class="container">

<!-- Soci al buttons -->
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