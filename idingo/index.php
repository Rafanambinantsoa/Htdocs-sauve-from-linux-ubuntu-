<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .row {
        margin-left: 18rem;
    }

    .mi {
        margin-left: 80px;
    }

    .mec {
        margin-top: 2px;

    }
</style>

<body>

    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
        <div class="l3"></div>
    </div>
    <div class="container-first">
        <h4><span>Bienvenus dans notre </span>
            <span>Site de </span>
            <span>Déclarations</span>
            <span> d'Impôts Synthétique </span>
        </h4>
        <div class="container-btns">
            <button class="btn-first b1" id="kim"> Création </button>
            <button class="btn-first b2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Log - In</button>

            <div class="row">
                <div class="col-sm-4">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <p>Veuiller Indiquer qui Vous êtes :</p>
                            <button class="btn btn-warning" id="kom">Agent</button>
                            <button class="btn btn-danger" id="contrib">Contribuables</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="booot">

    </div>
    <!-- modal contribuables -->
    <div class="modal fade" id="agent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Connexion Admin :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Nom </label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Enter the your name">
                        </div>
                        <label for="">Code </label>
                        <input type="password" name="code" id="code" class="form-control" placeholder="code">
                </div>
                <button type="button" id="login" class="btn btn-warning">Connexion</button>
                </form>
            </div>
        </div>
    </div>

    <!-- modal contribuables -->
    <div class="modal fade" id="contri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Connexion Contribuables</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="">N.I.F</label>
                            <input type="number" name="nif" id="nif" class="form-control" placeholder="Enter the NIF">
                        </div>
                        <label for="">N° CIN </label>
                        <input type="password" name="cin" id="cin" class="form-control" placeholder="CIN">
                </div>
                <div class="form-group">
                    <p class="text-center">Still don't have a NIF , click <a href="NIF.html"> here </a> to create</p>
                </div>
                <button type="button" id="login_btn" class="btn btn-warning">Connexion</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- 
    <img src="Icons/2649712.png" class="logo"> -->

    <ul class="medias">
        <li class="bulle"><img src="Icons/github.png" class="logo-medias"></li>
        <li class="bulle"><img src="Icons/instagram.png" class="logo-medias"></li>
        <li class="bulle"><img src="Icons/logo-de-lapplication-facebook.png" class="logo-medias"></li>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="bd.js"></script>
    <script src="fic.js"></script>
    <script src="bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="bootbox/bootbox.min.js"></script>
    <script src="gsap.min.js"></script>
    <script src="app.js"></script>

</body>

</html>
<!-- formulaire creation NIF zao
wamp ou bien xamp  -->