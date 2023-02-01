<?php
// Part 1 start ---------------------------------------------------------------------------------------
// require 'Personnage.php';

// $merlin = new Personnage("Merlin");
//Pour crier
// var_dump($merlin ->crier());
// $merlin->regenerer(2);
// var_dump($merlin->vie);
// var_dump($merlin->mort());
// $kim = new Personnage("kim");   
// $kim->regenerer(28);
// // var_dump($kim->crier());
// $merlin->attaque($kim);
// $merlin->getNom();
// if($kim->mort()){
//     echo "kim is dead";
// }
// else{
//     echo $kim->getNom() .'a survécu avec'. $kim->vie ;
// }
// $kim->setNom("Karim");
// var_dump($merlin->getNom());    
// var_dump($kim->getNom());
//end partr 1-------------------------------------------------------------------------------------------
//stockage des donne via la methode post dans $data
// var_dump($form);
// echo $form->input("username");
// echo $form->input("pass");

// echo $form->submit();

// $new  = new form();
// echo $new->input("nomasdss");
// echo $new->input("nomasdss");
// echo $new->input("nomasdss");    
// echo $new->input("nomasdss");
// echo $new->input("nomasdss");
// echo $form->submit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <form action="#" method=" post" >
        <?php
        require "class/Form.php";
        require "class/Bootstrapform.php";
        $karim = new bootstrapform();
        $karim->input('Nom');
        $karim->input('Prenom');
        $karim->input('Sexe');
        $karim->submit();

        ?>
    </form>


    <script src="bootstrap.min.js"></script>
</body>

</html>