<?php
// $l1 = new Livre(1, "algorythme", 100, "algo.png");
// $l2 = new Livre(2, "Javascript", 120, "JS.png");
// $l3 = new Livre(3, "Le corona Virus", 200, "virus.png");
// $l4 = new Livre(4, "france", 500, "france.png");



// $livremanager->AjoutLivre($l2);
// $livremanager->AjoutLivre($l1);
// $livremanager->AjoutLivre($l3);
// $livremanager->AjoutLivre($l4);


//$livres = [$l1, $l2, $l3, $l4];



ob_start();

?>

<?php if (!empty($_SESSION['alert'])) : ?>

<div class="alert alert-<?= $_SESSION['alert']['type'] ?>">
    <?= $_SESSION['alert']['msg'] ?>

    <?php unset($_SESSION['alert']) ?>
    
</div>


<?php
endif;?>
<table class="table text-center">
    <tr class="table-dark">
        <th>Images </th>
        <th>Titre </th>
        <th>Nombre de pages </th>
        <th colspan="2">Action</th>
    </tr>

    <!-- //Afohezina Code -->
    <?php //$livres = $livremanager->getLivre();  
    ?>
    <?php for ($i = 0; $i < count($livres); $i++) : ?>
        <tr>
            <td class="align-middle"><img src="Public/images/<?= $livres[$i]->getImages() ?>" alt="No internet Connexion" width="50px"></td>
            <td class="align-middle"> <a href="<?= URL ?>livre/l/<?= $livres[$i]->getId(); ?>"><?= $livres[$i]->getTitre();  ?></a> </td>
            <td class="align-middle"><?= $livres[$i]->getNbPages()  ?></td>
            <td class="align-middle"><a class="btn btn-warning" href="<?= URL ?>livre/m/<?= $livres[$i]->getId(); ?>">Modifier</a></td>
            <td class="align-middle">
                
                <!-- demande de confirmation simple en js  -->
                <form action="<?= URL ?>livre/s/<?= $livres[$i]->getId();; ?>" method="post" onSubmit="return confirm('Are you Sure About ?')">
                    <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>

            </td>

        </tr>
    <?php endfor; ?>

</table>

<a class="btn btn-success d-block" href="<?= URL ?>livre/a">Ajouter</a>
<?php
$titre = "La liste des Livres ";
$content = ob_get_clean();
require 'template.php';

?>