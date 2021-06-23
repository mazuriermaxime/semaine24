<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
</head>
<body>

<?php

require "connexion_bdd.php";

?>

<?php

try {
    // Récupération de l'identifiant concerné, passé en GET
    $pro_id=$_GET['id'];

    $requete = "SELECT * FROM produits where id=".$pro_id;
    $result = $db->query($requete);

    // Récupération du résultat de la requête

    $row = $result->fetch(PDO::FETCH_OBJ);

    // Libération de la connexion au serveur de BDD
    $result->closeCursor();
}

catch (Exception $e) {

        echo "La connexion à la base de données a échoué ! <br>";
        echo "Merci de bien vérifier vos paramètres de connexion ...<br>";
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
}
?>

<div>

     Identifiant : <?php echo   $row->pro_id."<br>"; ?>
     Catégorie du produit : <?php echo   $row->pro_cat_id."<br>"; ?>
     Référence  : <?php  echo   $row->pro_ref."<br>"; ?>
     libelle : <?php  echo   $row->pro_libelle."<br>"; ?>
     Déscription : <?php  echo   $row->pro_description."<br>"; ?>
     prix : <?php  echo   $row->pro_prix."<br>"; ?>
     stock : <?php  echo   $row->pro_stock."<br>"; ?>
     Couleur : <?php  echo   $row->pro_couleur."<br>"; ?>
     Image : <?php  echo   $row->pro_photo."<br>"; ?>
     Date d'ajout : <?php  echo   $row->pro_d_ajout."<br>"; ?>
     Date de modif : <?php  echo   $row->pro_d_modif."<br>"; ?>
     bloquer : <?php  echo   $row->pro_bloque."<br>"; ?>
     


</div>

</body>
</html>