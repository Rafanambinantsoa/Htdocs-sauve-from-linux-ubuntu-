<?php
    require_once("Connex.php");
    $sql;

    class uti{

        private string $nom;
        private string $mdp;

        function __construct(string $name, string $pass){
            $this->nom = $name;
            $this->mdp = $pass;
        }

        function get_nom(){
            return $this->nom;
        }

        function get_mdp(){
            return $this->mdp;
        }

        function get_one(string $name){
            global $con;
            $sql = "select * from registration where nom = :name";
            $statement = $con->prepare($sql);
            $statement->bindValue(":name" , $name);
            $statement->execute();
            return $statement->fetch();
        }
    }
?>