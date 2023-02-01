<?php
require_once "models/LivreManager.class.php";
require_once "models/Livre.class.php";


class Livrecontroller
{
    private $livremanager;

    public function __construct()
    {
        $this->livremanager = new LivreManager;

        $this->livremanager->chargementLivre();
    }

    public function afficherLivre()
    {
        $livreManager = $this->livremanager;
        $livres = $livreManager->getLivre();    
        require_once "views/livre.views.php";
    }

    public function afficherUnLivre($id)
    {
        $book = $this->livremanager->getLivreById($id);
        require "views/afficherUnLivre.views.php";
        // return "l'id du livre est : ".$id;
    }

    public function ajoutLivre()
    {
        require_once "views/ajoutLivre.views.php";
    }

    //Fonction permettant de Supprimer l'image dans le dossier source
    public function supressionImage($id)
    {
        $nomImage = $this->livremanager->getLivreById($id)->getImages();
        // echo $nomImage;
        //Supression de l'image dans public/image/ à l'aide du fonction unlink
        unlink("Public/Images" . $nomImage);
        $this->livremanager->supressionLivreBD($id);

        $_SESSION['alert'] = [
            "type" => "success",
            "msg"  => "Supression réussis"
        ];
        header('Location:' . URL . 'livre');
    }

    public function modificationLivre($id)
    {
        // echo "J suis le Njmereo ".$id;
        $livre = $this->livremanager->getLivreById($id);
        require_once "views/modificationBook.views.php";
    }

    public function modificationLivreValidation()
    {
        $imageActuelle = $this->livremanager->getLivreById($_POST['identifiant'])->getImages();
        // var_dump($imageActuelle);
        $file = $_FILES['kim'];

        if ($file['size'] > 0) {
            //Supression de l'image dans public/image/ à l'aide du fonction unlink
            unlink("Public/images/" . $imageActuelle);
            $repertoire = "Public/images/";
            $updateImageAjoute =  $this->ajoutImage($file, $repertoire);
        } else {
            $updateImageAjoute = $imageActuelle;
        }
        $this->livremanager->modificationLivreBD($_POST['identifiant'], $_POST['titre'], $_POST['nbPages'], $updateImageAjoute);
        $_SESSION['alert'] = [
            "type" => "warning",
            "msg"  => "Modifications réussis"
        ];
        header('Location:' . URL . 'livre');
    }


    public function ajoutValidationImages()
    {
        $file = $_FILES['kim'];
        // echo "<pre>";
        // print_r($_FILES['kim']);
        // echo "</pre>";
        $repertoire = "Public/images/";
        $nomImageAjoute =  $this->ajoutImage($file, $repertoire);

        $this->livremanager->ajoutLivreBD($_POST['titre'], $_POST['nbPages'], $nomImageAjoute);
        $_SESSION['alert'] = [
            "type" => "success",
            "msg"  => "Ajout  réussis"
        ];
        header('Location:' . URL . 'livre');
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
