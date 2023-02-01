<?php
require "form1.php";
require "text.php";
$form = new Form1(array(
    'nom' => 'Kim',
    'idao' => 'Tsukasa',
    'ido' => 'Inosuke'
));

var_dump(Text::withzero(3));



// var_dump($form);
?>

<form action="#" method="post">
    <?php
    echo $form->input("nom", "Entrer votre nom");
    echo $form->input("age", "Entrer votre nom");
    echo $form->input("fdf", "Entrer votre nom");
    echo $form->input("sdfsd", "Entrer votre fdf");
    echo $form->input("sdfsd", "Entrer votre sdfsd");
    echo $form->submit();
    ?>
</form>