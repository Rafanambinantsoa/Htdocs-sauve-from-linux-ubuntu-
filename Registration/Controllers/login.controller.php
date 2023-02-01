<?php
require_once "Models/registreBD.models.php";
require_once "Models/actif.class.php";
// require_once "Models/image.models.php";

class Logincontroller
{
    private $register;
    private $pic;

    public function __construct()
    {
        $this->register = new Register;
        
    }

    public function envoieData()
    {
        $file = $_FILES['ghd'];
        $repertoire = "img/";
        $nomImageAjoute = $this->ajoutImage($file , $repertoire);
        $random_id = rand(time() , 100000 );//creating a random id
                        //asio sary sy unique _id , 
        if ($_POST['password'] == $_POST['copassword']) {
            $this->register->ajoutBD($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['mail'], $_POST['password'],$random_id , $nomImageAjoute);
            // header('Location:' . URL . 'accueil');
        } else {
            return "Veuiller verifier votre mot de passe ";
        }
    }

    public function loginValidation()
    {
        // return $_POST['nom'];
        $this->register->loginValidationBD($_POST['nom'], $_POST['mdp']);
    }
    public function detruit()
    {

        session_start();
        session_destroy();
        header('Location:' . URL . 'l');
    }

    public function ajoutValidationImages()
    {
        $file = $_FILES['kaito'];
        // echo "<pre>";
        // print_r($_FILES['kim']);
        // echo "</pre>";
        $repertoire = "views/img/";
        $nomImageAjoute =  $this->ajoutImage($file, $repertoire);

        $this->register->ajoutLivreBD($nomImageAjoute , $_POST['tsukasa']);
        // $_SESSION['alert'] = [
        //     "type" => "success",
        //     "msg"  => "Ajout  réussis"
        // ];
        header('Location:' . URL . 'liam');
    }

    private function ajoutImage($file, $dir)
    {
        if (!isset($file['name']) || empty($file['name']))
            throw new Exception("Vous devez indiquer une image");

        if (!file_exists($dir)) mkdir($dir, 0777);

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $random = rand(0, 99999);
        $target_file = $dir . $random . "_" . $file['name'];

        if (!getimagesize($file["tmp_name"]))
            throw new Exception("Le fichier n'est pas une image");
        if ($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png" && $extension !== "gif")
            throw new Exception("L'extension du fichier n'est pas reconnu");
        if (file_exists($target_file))
            throw new Exception("Le fichier existe déjà");
        if ($file['size'] > 500000)
            throw new Exception("Le fichier est trop gros");
        if (!move_uploaded_file($file['tmp_name'], $target_file))
            throw new Exception("l'ajout de l'image n'a pas fonctionné");
        else return ($random . "_" . $file['name']);
    }
}
