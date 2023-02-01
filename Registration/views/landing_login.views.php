<?php
require_once "Models/user.models.php";
require_once "Models/actif.class.php";
$reg = new Online ();
session_start();

if (isset($_SESSION['name'])) {
    // echo $_SESSION['name'];
    $kim = new User($_SESSION['name']);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="<?= URL ?>/views/css/style2.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/all.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/brands.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/regular.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/solid.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/svg-with-js.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v4-font-face.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v4-shims.min.css">
        <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v5-font-face.min.css">
    </head>

    <body>
        <nav>
            <div class="navigation">
                <div class="nav-left">
                    <h1>K<span>c</span>-Gr<span>a</span>m-<span><i class="fa fa-telegram"></i></span></h1>
                </div>

                <div class="nav-middle">
                    <div class="search-bar">
                        <i class="fa fa-search"></i><input class="recherche" type="search" placeholder="Recherche">
                    </div>
                </div>

                <div class="nav-rigth">
                    <div class="nav-rigth-component">

                        <div class="post-logo"><a href=""><i class="fa fa-plus"></i></a></div>

                        <div class="cog-logo"><a href=""><i class="fa fa-cog"></i></a></div>

                        <div class="name-profile">
                            <h4><?= $kim->getNom() ?></h4>
                        </div>

                        <div class="picture-profile">
                            <img class="profile-img" src="views/img/<?= $kim->getImg() ?> " alt="">
                        </div>

                        <div class="logout-logo"><a href="<?= URL ?>session"><i class="fa fa-sign-out"></i></a></div>
    
                        
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <div class="card">
                <div class="card-left">

                </div>

                <div class="card-middle">
                    <div class="card-connexion">
                        <h4>Liste des amis connecté :</h4>
                        <div class="liste-friend-connexion">
                                <?php  
                                foreach ($reg->getTry() as $tableau) {
                                    echo '
                                     <a href="'.URL.'chat/user_id='.$tableau['uniqu_id'].'"><img class="profile-img"  src="'.URL.'/img/'.$tableau['img'].'"  alt=""></a>    
                                    ';
                                }
                                ?>
                                    

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-top">
                            <img class="profile-img" src="views/img/<?= $kim->getImg() ?> " alt="">
                            <div class="name-user"><?= $kim->getNom() ?></div>
                            <div class="date-heure">11 December / 11:30</div>
                            <div class="option-post"><a href=""><i class="fa fa-ellipsis"></i></a></div>
                        </div>
                        <div class="card-content">
                            <img src="<?= URL ?>/img/feed-6.jpg" alt="">
                            <div class="phrase">Code is Life 🤔! KeyCrew >>>>>>>>> All</div>
                        </div>
                        <div class="card-bottom">
                            <div class="like"><a href=""><i class="fa fa-heart"></i></a></div>
                            <div class="comment"><a href=""><i class="fa fa-comment"></i></a></div>
                            <div class="share"><a href=""><i class="fa fa-share"></i></a></div>
                        </div>
                    </div>
                </div>

                <div class="card-rigth">

                </div>

            </div>
        </main>
    </body>

    </html>



<?php

} else {
    header('Location:' . URL . 'l');
}
