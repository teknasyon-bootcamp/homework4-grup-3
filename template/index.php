<?php 

  include '../config/config.php';
  include __DIR__ . "../../classess/post.class.php";
  
  
  $users  = $Posts->index();

 
  


?>




<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Postlarımız</title>


    <script src="https://kit.fontawesome.com/c400c00162.js" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container">

        <div class="row text-success text-center">
         <h2>Postlarımız</h2>
        </div>

        <div class="row justify-content-evenly">


        <?php 

          if(isset($_GET['post'])):
            $LimitUser = $_GET['post'];

            
          $idUser = $Posts->Limit($LimitUser);

          $idUser = $idUser[0];
        ?>  
            <a href="<?= $url . "template/index.php"; ?>">
              <div class="row justify-content-center mt-3">
                <div class="col-md-4 btn btn-danger">
                  <i class="fas fa-times-circle"></i>
                  <label>Çık</label>
                </div>
              </div>
            </a>

            <div class="card mt-5" style="width: 18rem;">
              <img src= <?= $url . "config/images/$idUser[image]"; ?> class="card-img-top mt-2" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $idUser['name']; ?></h5>
                <p class="card-text">
                  <?= $idUser['content']; ?>
                </p>
                <a href="<?= $url . "admin/manage.php?post=$idUser[id]" ?>" class="btn btn-outline-info">Detay <i class="fas fa-pen"></i></a>
              </div>
            </div>

        <?php

          else:
            $LimitUser = '';
          
        ?>

          <!-- Post için hazırladığımız kardlar -->
        <?php foreach($users as $item): ?>

            <div class="card mt-5" style="width: 18rem;">
              <img src= <?= $url . "config/images/$item[image]"; ?> class="card-img-top mt-2" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $item['name']; ?></h5>
                <p class="card-text">
                  <?= $item['content']; ?>
                </p>
                <a href="<?= $url . "admin/manage.php?post=$item[id]" ?>" class="btn btn-outline-info">Detay <i class="fas fa-pen"></i></a>
              </div>
            </div>  

        <?php endforeach; ?>

          <!-- Post için hazırladığımız kardların bitişi -->

        <?php

          endif;
       
        
        ?>


        


        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>