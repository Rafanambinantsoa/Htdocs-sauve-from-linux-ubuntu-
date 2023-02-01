<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controllers/C_Login.php" method="post">
        <h4 class="log">Login</h4>
        <hr>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp" required>
        <hr>
        <input type="submit" value="Connexion" name="connex">
    </form>
</body>
</html>