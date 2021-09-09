<<<<<<< HEAD
<?php 
    include __DIR__ . "../../classess/post.class.php";
    include "../config/config.php";


=======
>>>>>>> f22b147d4f1ad71b98df5e61d78b20e71a2e58d9

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
<<<<<<< HEAD


    if(isset($_POST['head'])){
      $head = $_POST['head'];                
    }else{
      $head = '';    
    }

    if(isset($_POST['content'])){
        $content = $_POST['content']; 
    }else{
        $content = '';
    }


    $update = $Posts->Update($head, $content, $nowDate, $id);
=======
>>>>>>> f22b147d4f1ad71b98df5e61d78b20e71a2e58d9

    

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
    
    <div class="container p-3">
        <div class="row mt-3 justify-content-end">
            <a href="./manage.php?action=create&post=<?= $id; ?>" class="btn btn-outline-primary w-25">
                Post Ekle
                <i class="fas fa-plus"></i>
            </a>
        </div>
        <div class="row mt-3">
        <?php 



            if(isset($_GET['action']) and $_GET['post']):

                $action = $_GET['action'];
                $post   = $_GET['post'];

<<<<<<< HEAD
                if($action == "edit"):
                    
                    // Düzenleme Başalngıç
        ?>
                <form action="./manage.php?post=<?= $id; ?>" method="post">
                    <input type="text" name="head" class="form-control" value="<?= $name; ?>">
                    </div>
                    <div class="row mt-3">
                        <img src="../config/images/<?= $image; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 btn text-muted">
                            <?= $created_at; ?>
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="col-md-6 btn">
                            <?php
                            if ($update_at==null) {
                                echo "<span class='text-success'>Güncelleniyor...</span>";
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
                        <textarea name="content" class="form-control" id="" cols="30" rows="10"><?= $content; ?></textarea>
                        </div>
                    </div>
                    <div class="row mt-3  justify-content-end">
                        <button type="submit">Güncelle</button>
                        &nbsp;
                        <a href="./manage.php?post=<?= $id; ?>" class="btn btn-danger col-md-6 w-25">
                            İptal
                            <i class="fas fa-times-circle"></i>
                        </a> 
                    
                        </form>

        
            <?php        
                    // Düzenleme Bitiş                
               
                elseif($action == "delete"):

                    echo "silme sayfası";

                elseif($action == "create"):

                    echo "Ekleme Sayfası";

                endif;

            else:

            ?>

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
                                echo "Henüz bir güncelleme yok";
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
                        <a href="./manage.php?action=edit&post=<?= $id; ?>" class="btn btn-info col-md-6 w-25">
                            Güncelle
                            <i class="fas fa-edit"></i>
                        </a> 
                        &nbsp;
                        <a href="./manage.php?action=delete&post=<?= $id; ?>" class="btn btn-danger col-md-6 w-25">
                            Sil
                            <i class="fas fa-times-circle"></i>
                        </a> 
            
            <?php

            endif;



        
        ?>



        

 
            
=======
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
>>>>>>> f22b147d4f1ad71b98df5e61d78b20e71a2e58d9


        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>