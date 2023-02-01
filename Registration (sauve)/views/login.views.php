<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= URL ?>/views/css/style.login.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/all.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/brands.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/fontawesome.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/regular.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/solid.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/svg-with-js.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v4-font-face.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v4-shims.min.css">
   <link rel="stylesheet" href="<?= URL ?>/views/fontAwesome/css/v5-font-face.min.css">
   <title>Login</title>
</head>

<body>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Login KcGram
         </div>
         <div class="title signup">
            Signup KcG
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">

            <form action="<?= URL ?>la" method="post" class="login">
               <div class="logo">
                  <i class="fa fa-user"></i>
               </div>
               <div class="field">
                  <input type="text" name="nom" placeholder="Enter your name or email" required>
               </div>
               <div class="field">
                  <input type="password" name="mdp" placeholder="Password" required>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
               </div>
               <div class="signup-link">
                  Not a member? <a href="">Signup now</a>
               </div>
               <div class="retour">
                  <a href="<?= URL ?>accueil"><i class="fa fa-arrow-left"></i>Return</a>
               </div>
            </form>
            <form action="<?= URL ?>vr" method="post" class="signup">
               <div class="field">
                  <input type="text" name="nom" placeholder="Your name" required>
               </div>
               <div class="field">
                  <input type="text" name="prenom" placeholder="Firstname" required>
               </div>
               <div class="field">
                  <input type="number" name="age" placeholder="Age" required>
               </div>
               <div class="field">
                  <input type="email" name="mail" placeholder="Email Address" required>
               </div>
               <div class="field">
                  <input type="password" name="password" placeholder="Password" required>
               </div>
               <div class="field">
                  <input type="password" name="copassword" placeholder="Confirm password" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Signup">
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="<?= URL ?>/views/js/script-login.js"></script>
</body>

</html>