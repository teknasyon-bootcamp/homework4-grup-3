
<?php 
    include "../classess/post.class.php";
    if($_GET['post']){
        $sayi = $_GET['post'];
    }else{
        echo "";
    }
    
    $user       = $Posts->Limit($sayi);
    $id         = $user[0]["id"]; 
    $image      = $user[0]["image"]; 
    $name       = $user[0]["name"]; 
    $content    = $user[0]["content"]; 
    $deleted_at = $user[0]["deleted_at"]; 
    $update_at  = $user[0]["update_at"]; 
    $created_at = $user[0]["created_at"]; 

    

?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Manage</title>
    <script src="https://kit.fontawesome.com/c400c00162.js" crossorigin="anonymous"></script>

  </head>
  <body>
    
    <div class="container">
        <div class="row mt-3 justify-content-end">
            <a href="" class="btn btn-outline-primary w-25">
                Post Ekle
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="row mt-3">

            <h2><?= $name; ?></h2>
        </div>
        <div class="row mt-3">
            <img src="../config/images/<?= $image; ?>" class="img-fluid" alt="">
        </div>
        <div class="row mt-3">
            <div class="col-md-6 btn">
                <?= $created_at; ?>
                <i class="fas fa-clock"></i>
            </div>
            <div class="col-md-6 btn">
                <?php
                if ($update_at==null) {
                    echo "Henüz güncelleme yapılmadı";
                }
                else {
                    echo $update_at;
                    echo '<i class="fas fa-clock"></i>';
                }
                
                
                ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
            <?= $content; ?>
            </div>
        </div>
        <div class="row mt-3  justify-content-end">
            <a href="http://" class="btn btn-info col-md-6 w-25">
                Güncelle
                <i class="fas fa-edit"></i>
            </a> 
            &nbsp;
            <a href="http://" class="btn btn-danger col-md-6 w-25">
            Sil
            <i class="fas fa-times-circle"></i>
            </a>


        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>