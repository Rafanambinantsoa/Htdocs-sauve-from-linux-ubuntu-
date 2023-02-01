<?php
require "Personnage.php";
require "Archer.php";
$personnage =  new Personnage("karim");
$personnage2 =  new Personnage("gideon");
$archer = new archer('tsukasa');

$archer->attaque($personnage);
var_dump($personnage, $archer);
