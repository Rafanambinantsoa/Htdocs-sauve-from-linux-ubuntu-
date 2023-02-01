<?php

//Class abstract tsy azo instacena mere fa ny fille fona no afaka mi-instaver anazy
abstract class Model {

    private static $pdo;

    private static function setBdd(){
        //Remarque kely ,  tsy azo asina espace ao amin dbname=Bibliotheque et instance PDO  
        self::$pdo = new PDO("mysql:host=localhost;dbname=Bibliotheque;charset = utf8", "root" , "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$pdo === null){
            self::setBdd();
        }
        return self::$pdo;
    }
}