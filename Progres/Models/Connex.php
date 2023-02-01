<?php
    // Connexion a la BD

    define("servername", "localhost");
    define("username", "root");
    define("password", "");
    define("db_name", "kcgram");
    
    try{
        $con = new PDO("mysql:host=".servername.";dbname=".db_name, username, password);
        //echo "Connexion a la BD reussi";
    }catch(PDOException $e){
        echo "Connexion a la BD n'est pas reussi";
        //echo $e->getMessage();
    }
?>