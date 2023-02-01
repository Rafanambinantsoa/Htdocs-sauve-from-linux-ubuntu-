<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>/views/css/style1.css">
    <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/all.min.css">
    <title>Login & sign up</title>
</head>
<body>
    <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="<?= URL ?>la" method="POST" class="sign-in-form">
                        <h2 class="title">Se connecter</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="nom" placeholder="Username" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="mdp" placeholder="Password" required>
                        </div>
                        <input type="submit" value="Login" class="btn solid">
                        <p class="social-text">Ou vous pouvez s'inscrire avec d'autre compte.</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in" ></i>
                            </a>
                        </div>
                    </form>


                    <form action="<?= URL ?>vr" method="POST" class="sign-up-form" enctype="multipart/form-data" >
                        <h2 class="title">S'inscrire</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="nom" placeholder="Firstname">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="prenom" placeholder="Lastname">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="number" name="age" placeholder="Age">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="mail" placeholder="Email">
                        </div>
                        <div>
                            <!-- <i class="fas fa-lock"></i> -->
                            <input type="file" name="ghd" required>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="copassword" placeholder="confirm your Password">
                        </div>
                        <input type="submit" value="Sign up" class="btn solid">
                        <p class="social-text">Ou vous pouvez s'inscrire avec d'autre compte.</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-google" ></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in" ></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Vous n'avez pas encore une compte ? </h3>
                        <p>Pour s'inscrire a KeyCrewGram,<br> veuillez cliquer sur le button ci-dessous.</p>
                        <button class="btn transparent" id="sign-up-btn">S'inscrire</button>    
                        
                    </div>
                    <img src="<?= URL ?>img/undraw_maker_launch_re_rq81.svg" class="image" alt="">
                </div>

                <div class="panel right-panel">
                    <div class="content">
                        <h3>Vous avez deja une compte ?</h3>
                        <p>Cliquer sur le bouton ci-dessous pour se connecter.</p>
                        <button class="btn transparent" id="sign-in-btn">Se connecter</button>    
                    </div>
                    <img src="<?= URL ?>img/undraw_remotely_-2-j6y.svg" class="image" alt="">
                </div>
            </div>
    </div>
    <script src="<?= URL ?>views/js/script.js"></script>
</body>
</html>