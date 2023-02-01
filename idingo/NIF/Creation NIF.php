<!DOCTYPE html>
<html lang="en">
<?php
include_once 'connect.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creation.css">
    <link rel="stylesheet" href="boot/css/bootstrap.css">
    <title>Création</title>
</head>

<body>
    <div class="container">
        <div class="title">Création d'Immatriculation (NIF)</div>
        <form method="post" class="form" id="frm">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nom et Prenom </span>
                    <input type="text" name="nomprenom" placeholder="Enter your Name" required>
                </div>
                <!-- <div class="input-box">
                    <span class="details">Prenom</span>
                    <input type="text" name="" placeholder="Username" required>
                </div> -->
                <div class="input-box">
                    <span class="details"> N° CIN </span>
                    <input type="number" name="cin" placeholder="Enter your Emails" required>
                </div>
                <div class="input-box">
                    <span class="details">Activités </span>
                    <input type="text" name="activite" placeholder=" ex: Epicerie" required>
                </div>
                <div class="input-box">
                    <span class="details"> N° Statistiaue</span>
                    <input type="number" name="stat" placeholder="14nombre" required>
                </div>
                <div class="input-box">
                    <span class="details"> Addresse Actuel</span>
                    <input type="text" name="adrs" placeholder=" Addresse" required>
                </div>
                <div class="input-box">
                    <span class="details"> Fokontany</span>
                    <input type="text" name="foko" placeholder=" ex: nada" required>
                </div>
                <div class="input-box">
                    <span class="details"> Commune </span>
                    <input type="text" name="commune" placeholder=" commune" required>
                </div>
                <div class="input-box">
                    <span class="details"> Région</span>
                    <input type="text" name="region" placeholder="region" required>
                </div>
            </div>
            <div class="gender-details">
                <input type="radio" value="male" name="gender" id="dot-1">
                <input type="radio" value="female" name="gender" id="dot-2">
                <input type="radio" value="prefer not say" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <button>Register</button>
            </div>
        </form>
    </div>
<script src="jquery351.js"></script>
<script src="boot/js/bootstrap.js"></script>
<script src="jquery.js"></script>
</body>
<!-- </html>
code generale des Impôts
NIF 10
Stat 14
CIN 12
Control champs
finace publics -->