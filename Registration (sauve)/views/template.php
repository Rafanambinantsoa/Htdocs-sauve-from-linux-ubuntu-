<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    
    <form action="<?= URL ?>vr" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <label for="mail">Gmail</label>
            <input type="mail" name="mail" id="mail">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="copassword">Password Confirm</label>
            <input type="password" name="copassword" id="copassword">
        </div>
        <input type="submit" value="Register">

    </form>

</body>

</html>